<?php
// Inclusione del file di configurazione
require_once("../risorse/config.php");

// Blocco di codice per aggiungere prodotti al carrello
if (isset($_GET['add'])) {

    // Query per verificare la disponibilità del prodotto in base all'ID
    $controllaQuantita = query("SELECT * FROM ricerca WHERE id_pdt= {$_GET['add']}");
    conferma($controllaQuantita);

    // Ciclo per controllare la quantità disponibile del prodotto
    while ($row = fetch_array($controllaQuantita)) {

        // Controlla se la quantità richiesta non supera quella disponibile
        if ($row['quantita_pdt'] != $_SESSION['prodotto_' . $_GET['add']]) {

            // Incrementa la quantità del prodotto nel carrello
            $_SESSION['prodotto_' . $_GET['add']] += 1;
            // Reindirizza alla pagina di checkout
            header('Location: checkout.php');
        } else {
            // Crea un avviso se la quantità richiesta supera quella disponibile
            creaAvviso("Spiacenti, avevamo solo " .  $row['quantita_pdt'] . " " .  $row['nome_pdt'] . " ancora disponibili");
            // Reindirizza alla pagina di checkout
            header('Location: checkout.php');
        }
    }
}

// Blocco di codice per rimuovere prodotti dal carrello
if (isset($_GET['remove'])) {
    // Decrementa la quantità del prodotto nel carrello
    $_SESSION['prodotto_' . $_GET['remove']] -= 1;

    // Rimuove i totali della sessione (reset delle variabili di totale e quantità)
    unset($_SESSION['totale']); // Reset del totale del prezzo del carrello
    unset($_SESSION['quantita_art']); // Reset del numero totale di articoli nel carrello
    // Reindirizza alla pagina di checkout
    header('Location: checkout.php');
}

// Blocco di codice per eliminare prodotti dal carrello
if (isset($_GET['delete'])) {
    // Imposta la quantità del prodotto a 0 nel carrello
    $_SESSION['prodotto_' . $_GET['delete']] = 0;
    // Rimuove i totali della sessione (reset delle variabili di totale e quantità)
    unset($_SESSION['totale']); // Reset del totale del prezzo del carrello
    unset($_SESSION['quantita_art']); // Reset del numero totale di articoli nel carrello
    // Reindirizza alla pagina di checkout
    header('Location: checkout.php');
}

// Funzione per gestire la visualizzazione del carrello
function carrello()
{
    // Inizializzazione delle variabili di totale ordine e quantità articoli
    $totaleOrdine = 0; // Importo totale iniziale dell'ordine
    $totArticoli = 0; // Quantità totale iniziale degli articoli nel carrello

    // Variabili utilizzate per l'integrazione con PayPal
    $item_name = 1;
    $item_number = 1;
    $amount = 1;
    $quantity = 1;

    // Ciclo per iterare attraverso gli elementi della sessione
    foreach ($_SESSION as $name => $value) {
        if ($value > 0) {
            // Controlla se la sessione riguarda un prodotto (nome inizia con "prodotto_")
            if (substr($name, 0, 9) == 'prodotto_') {
                // Ottiene l'ID del prodotto estraendo la parte numerica dal nome della sessione
                $lungStringa = strlen($name);
                $id = substr($name, 9, $lungStringa);

                // Query per ottenere i dettagli del prodotto in base all'ID
                $prodotti = query("SELECT * FROM ricerca WHERE id_pdt = {$id}");
                conferma($prodotti);

                // Ciclo per elaborare ogni prodotto nel carrello
                while ($row = fetch_array($prodotti)) {
                    // Calcola l'importo totale del prodotto (prezzo unitario * quantità)
                    $importo = $row['prezzo'] * $value;
                    // Aggiunge la quantità al totale degli articoli nel carrello
                    $totArticoli += $value;

                    // Blocco di codice HTML per visualizzare il prodotto nel carrello
                    $prodottoCarrello = <<<STRINGA
                    <style>
                    .block { text-align:center;
                    display:flex;
                    
                    }
                    
                    </style>
                    <div class="">
                        <tr style="text-align:center; background-color: white;">
                            <td style="width:10rem;"><img class="card-img-top img-card" src="../risorse/immagini/immagini_tante/{$row['immagine']}" alt=""></td>
                            <td>{$row['nome_pdt']}</td>
                            <div>
                                <td class='block'><a class="btn btn-success" href="carrello.php?add={$row['id_pdt']}" role="button">Aggiungi</td>
                                <td class='block'><a class="btn btn-warning" href="carrello.php?remove={$row['id_pdt']}" role="button">Rimuovi</a></td>
                                <td class='block'><a class="btn btn-danger" href="carrello.php?delete={$row['id_pdt']}" role="button">Cancella</a> </td>
                            </div>
                        </tr>
                        <div>
                            <th>Quantità prodotto: $value</th>
                            <th style="font-size:25px;">Importo Totale: $importo</th>
                        </div>
                    </div>

                    
STRINGA;

                    // Visualizza il blocco HTML del prodotto nel carrello
                    echo $prodottoCarrello;

                    // Incrementa le variabili di PayPal per ciascun prodotto
                    $item_name++;
                    $item_number++;
                    $amount++;
                    $quantity++;
                }

                // Aggiorna le sessioni con il totale dell'ordine e la quantità totale degli articoli
                $_SESSION['totale'] = $totaleOrdine += $importo;
                $_SESSION['quantita_art'] = $totArticoli;
            }
        }
    }
}
