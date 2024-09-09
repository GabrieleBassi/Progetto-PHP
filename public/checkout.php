<?php
// Inclusione del file di configurazione
require_once("../risorse/config.php");

// Inclusione del file 'carrello.php' che contiene le funzioni per la gestione del carrello
require_once('carrello.php');

// Inclusione dell'header della pagina
include(FRONT_END . DS . 'header.php');
?>

<style>
    @media(max-width:1000px) {
        .prodotto {
            border: 1px solid;
        }
    }
</style>

<!-- Inizio del contenuto della pagina -->
<div class="container">
    <!-- Titolo principale della pagina -->
    <h1 class="text-center my-5">Il tuo ordine</h1>

    <!-- Inizio della riga che contiene la tabella e il modulo -->
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-10 m-auto">

            <!-- Inizio del modulo per PayPal -->
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <!-- Campi nascosti necessari per PayPal -->
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="business" value="simo.tocci-facilitator@gmail.com">
                <input type="hidden" name="charset" value="utf-8">
                <input type="hidden" NAME="currency_code" value="EUR">

                <!-- Tabella per visualizzare i prodotti nel carrello -->
                <table class="table table-striped animate__animated animate__fadeIn">
                    <thead>

                        <tr style="text-align:center;">
                            <th>Prodotto</th>
                            <th>Descrizione</th>
                            <th>Modifica</th>
                            <a href="ecommerceNuovo.php" class="btn">Torna ad acquistare!</a>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Richiamo della funzione 'carrello()' per visualizzare i prodotti -->
                        <?php carrello(); ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

    <!-- Sezione per il riepilogo dell'ordine -->
    <div class="row " style="justify-content:center; align-items:center;">
        <div style="width: 60%;">
            <div class="col-5">
                <h2>Riepilogo ordine</h2>

                <!-- Tabella per riepilogare il numero di articoli e il totale dell'ordine -->
                <table class="table table-bordered" cellspacing="0">

                    <!-- Visualizza la quantità totale di articoli nel carrello -->
                    <tr class="cart-subtotal">
                        <th>Articoli:</th>
                        <td>
                            <span class="amount">
                                <?php
                                // Verifica se la sessione per la quantità articoli è impostata, altrimenti la imposta a 0
                                echo isset($_SESSION['quantita_art']) ?  $_SESSION['quantita_art']  : $_SESSION['quantita_art'] = '0';
                                ?>
                            </span>
                        </td>
                    </tr>

                    <!-- Mostra la spedizione come gratuita -->
                    <tr class="shipping">
                        <th>Spedizione</th>
                        <td>Gratuita</td>
                    </tr>

                    <!-- Visualizza il totale dell'ordine -->

                    <tr class="order-total">
                        <th>Totale ordine</th>
                        <td><strong>
                                <span class="amount">€
                                    <?php
                                    // Verifica se la sessione per il totale dell'ordine è impostata, altrimenti la imposta a 0
                                    echo isset($_SESSION['totale']) ?  $_SESSION['totale']  : $_SESSION['totale'] = '0';
                                    ?>
                                </span>
                            </strong>
                        </td>
                    </tr>

                </table>
            </div>
        </div>

        <!-- Pulsante per il pagamento tramite PayPal -->
        <!-- <div>
            <input type="hidden" name="upload">
            <input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_buynowCC_LG.gif" name="submit" alt="paga subito" width="100%">
            <img alt="" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
        </div> -->
        <button class="btn btn-primary">Paga ora!</button>
    </div>
</div>


<!-- Inclusione del footer della pagina -->
<?php include(FRONT_END . DS . 'footer.php'); ?>