<?php
// Includiamo il file di configurazione principale, che contiene le impostazioni globali del sito.
require_once("../risorse/config.php");

// Includiamo l'header della pagina, che contiene il codice HTML e PHP per la parte superiore della pagina web.
include(FRONT_END . DS . 'header.php');
?>

<!-- Includiamo la barra laterale del sito, che contiene il menu di navigazione laterale -->
<?php include('sidebar.php'); ?>

<!-- Stili CSS per personalizzare l'aspetto degli elementi nella pagina -->
<style>
    .immagine_sfondo_ecommerce {
        background-image: url(../risorse/immagini/immagini_tante/ecommerce_sfondo.jpg); /* Immagine di sfondo */
        background-repeat: no-repeat; /* Evita la ripetizione dell'immagine di sfondo */
        background-position: center; /* Posizione centrale dell'immagine di sfondo */
        background-size: cover; /* Copre completamente l'area dell'elemento */
        background-attachment: fixed; /* Fissa l'immagine di sfondo durante lo scroll */
        color: white; /* Colore del testo */
        padding: 8%; /* Padding interno dell'elemento */
        border-radius: 100px; /* Bordo arrotondato */
        width: 80%; /* Larghezza dell'elemento */
        margin: auto; /* Centro orizzontale dell'elemento */
    }

    .card-title1 {
        text-align: center; /* Allinea il testo al centro */
        font-size: 70px; /* Dimensione del font per il titolo */
    }

    .card-text1 {
        text-align: center; /* Allinea il testo al centro */
        font-size: 20px; /* Dimensione del font per il testo */
        width: 70%; /* Larghezza del testo */
        margin: auto; /* Centro orizzontale del testo */
    }

    .col_ecommerce {
        box-shadow: -1rem 0 3rem black; /* Ombra per il contenitore */
        text-align: center; /* Allinea il testo al centro */
        flex: 1; /* Occupa tutto lo spazio disponibile */
        border-radius: 50px; /* Bordo arrotondato */
        flex-wrap: wrap; /* Avvolge gli elementi all'interno del contenitore */
        padding: 3%; /* Padding interno del contenitore */
        margin: 3%; /* Margine del contenitore */
    }

    .col_ecommerce:hover {
        animation: pulsazione 3s infinite linear; /* Animazione di pulsazione al passaggio del mouse */
    }

    .row_ecommerce {
        padding: 5%; /* Padding interno della riga */
        display: flex; /* Display flessibile per layout */
        flex-wrap: wrap; /* Avvolge gli elementi all'interno della riga */
    }

    .object {
        font-size: 40px; /* Dimensione del font per l'oggetto */
    }

    .contenitore_card {
        display: flex; /* Display flessibile per layout */
        flex-wrap: wrap; /* Avvolge gli elementi all'interno del contenitore */
        justify-content: center; /* Allinea al centro orizzontalmente */
    }

    .card_ecommerce {
        border-radius: 50px; /* Bordo arrotondato */
        margin: 3%; /* Margine del card */
        box-shadow: -1rem 0 3rem black; /* Ombra del card */
        background-color: black; /* Colore di sfondo del card */
        position: relative;
        padding-bottom: 2%;
    }

    .best_single {
        margin: 2%; /* Margine del card best seller */
        padding: 0.5%; /* Padding interno del card best seller */
        box-shadow: -1rem 0 3rem white; /* Ombra del card best seller */
        border-radius: 200px; /* Bordo arrotondato */
        animation: fadeInUp 3s linear; /* Animazione di apparizione del card best seller */
    }

    .piccoli_container {
        width: 100%; /* Larghezza del contenitore dei piccoli */
        display: flex; /* Display flessibile per layout */
        flex-direction: row; /* Direzione orizzontale degli elementi */
        flex-wrap: wrap; /* Avvolge gli elementi all'interno del contenitore */
        justify-content: space-evenly; /* Spazio uniforme tra gli elementi */
        align-items: center; /* Allinea gli elementi al centro verticalmente */
    }

    .best_single:hover {
        animation: pulsazione 3s infinite; /* Animazione di pulsazione al passaggio del mouse */
    }

    .card-body {
        color: black; /* Colore del testo all'interno del card */
    }

    .card_ecommerce:hover {
        box-shadow: -1rem 0 3rem white; /* Cambia l'ombra del card al passaggio del mouse */
    }

    .container_best_seller {
        background-color: black; /* Colore di sfondo del contenitore best seller */
        display: flex; /* Display flessibile per layout */
        padding: 5%; /* Padding interno del contenitore */
    }

    .btn-prodotti{
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translate(-50%);
    }

    /* Animazione per i prodotti appena usciti */
    @keyframes fadeInUp {
        from {
            opacity: 0; /* Inizia con trasparenza */
        }
        to {
            opacity: 1; /* Termina con opacità completa */
        }
    }
    @media(max-width:1000px) {
        .card-text1 {
            width: 100%; /* Larghezza del testo per schermi piccoli */
        }
        .col_ecommerce{
            margin: 10%;
        }
    }

</style>

<!-- Sezione dedicata alla lista delle categorie di prodotti sotto forma di link -->
<div class="list_ecommerce">
    <?php mostraCategorie() ?> <!-- Mostra le categorie di prodotti -->
</div>

<!-- Sezione con un'immagine di sfondo e una breve descrizione dell'e-commerce -->
<div class="immagine_sfondo_ecommerce">
    <h5 class="card-title1">Vendita online di gabbioli</h5>
    <p class="card-text1">Scopri il nostro e-commerce e immersi nell'universo della luce: esplora un'ampia selezione di lampadari di diverse categorie e stili, perfetti per valorizzare ogni ambiente con un tocco di eleganza e personalità, pronti a trasformare ogni spazio della tua casa in un capolavoro luminoso.</p>
</div>

<!-- Sezione che evidenzia i punti di forza dell'azienda con elementi stilizzati -->
<div class="row_ecommerce" style="width:100%; padding:5%; margin:0;">
    <div class="col_ecommerce">
        <p class="object"> &#9757</p> <!-- Simbolo per il primo punto di forza -->
        <h3>Affidabilità Garantita:</h3>
        <p>Gabbioli vanta una lunga storia <br> di affidabilità nel settore elettrico.</p>
    </div>
    <div class="col_ecommerce">
        <p class="object"> &#128257</p> <!-- Simbolo per il secondo punto di forza -->
        <h3>Assortimento Completo:</h3>
        <p>Offriamo un assortimento completo di prodotti per soddisfare tutte le vostre
            esigenze elettriche.</p>
    </div>
    <div class="w-200"></div>
    <div class="col_ecommerce">
        <p class="object"> &#128178</p> <!-- Simbolo per il terzo punto di forza -->
        <h3>Convenienza e Risparmio:</h3>
        <p>Con i nostri prezzi competitivi e le offerte speciali, risparmierete senza compromettere la qualità.</p>
    </div>
    <div class="col_ecommerce">
        <p class="object"> &#128107</p> <!-- Simbolo per il quarto punto di forza -->
        <h3>Servizio Clienti Eccellente:</h3>
        <p>Il nostro team di assistenza clienti è sempre pronto ad aiutarvi con qualsiasi domanda o problema.</p>
    </div>
</div>

<!-- Contenitore delle schede prodotto, dove viene mostrata una selezione di prodotti -->
<div class="contenitore_card">
    <?php
    // Funzione che mostra i prodotti disponibili nel negozio
    mostraProdotti();
    ?>
</div>

<!-- Sezione che mostra i prodotti appena usciti, con una divisione per categoria -->
<h1 class="p-5" style="text-align: center;">I prodotti appena usciti!</h1>
<hr>
<div class="container_best_seller" id="best_seller" style="display: none;">
    <div class="piccoli_container" style="justify-content: center; flex-direction:row;">
        <?php
        // Funzione che mostra i prodotti best seller
        mostraProdottiBest();
        ?>
    </div>
</div>

<?php
// Includiamo il footer della pagina, che contiene il codice HTML e PHP per la parte inferiore della pagina web.
include(FRONT_END . DS . "footer.php");
?>