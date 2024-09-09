<?php
// Include il file di configurazione per le impostazioni e le variabili globali
require_once("../risorse/config.php");

// Include il file dell'intestazione del sito
include(FRONT_END . DS . 'header.php');
include('sidebar.php'); // Include il file della barra laterale di navigazione
?>


<style>
    .box_button_prodotto {
        margin: auto;
    }

    .small {
        margin-right: 30px;
    }

    .prodotti_ricercati {
        display: flex;
        justify-content: center;
        margin: 5%;
        flex-wrap: wrap;



    }

    .card_ricerca_prodotto {
        width: 30rem;
        margin: 5%;

    }

    h3{
        color: red;
        text-align: center;
    }
</style>

<!-- Sezione per i link delle categorie di prodotti -->
<div class="list_ecommerce">
    <?php mostraCategorie() ?>
</div>

<!-- Sezione per la ricerca dei prodotti -->
<div class="prodotti_ricercati">
    <?php ricerca(); ?>
</div>

<!-- Include il file del piè di pagina del sito -->
<?php include(FRONT_END . DS . 'footer.php') ?>