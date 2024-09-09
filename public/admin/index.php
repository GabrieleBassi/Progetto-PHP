<?php
require_once("../../risorse/config.php");
include(BACK_END . DS . "header.php");

//richiamo della sessione per utente diverso da Admin
if ($_SESSION['ruolo'] !== 'admin') {
    header('Location: ../../public/areariservata.php');
}
?>


<!-- INIZIO INDEX -->

<div id="page-wrapper">

    <div class="container-fluid">




        <!-- RIEPILOGO -->
        <?php
        //definizione delle directories per homepage (URI) e sottopagine
        if ($_SERVER['REQUEST_URI'] == "/PROGETTO/public/admin/" || $_SERVER['REQUEST_URI'] == "/PROGETTO/public/admin/index.php") {
            include(BACK_END . DS . "content_admin.php");
        }

        if (isset($_GET['ordini'])) {
            include(BACK_END . DS . "ordini.php");
        }

        if (isset($_GET['prodotti-admin'])) {
            include(BACK_END . DS . "prodotti-admin.php");
        }

        if (isset($_GET['aggiungi-pdt'])) {
            include(BACK_END . DS . "aggiungi-pdt.php");
        }

        if (isset($_GET['aggiorna-pdt'])) {
            include(BACK_END . DS . "aggiorna-pdt.php");
        }
        if (isset($_GET['categorie-admin'])) {
            include(BACK_END . DS . "categorie-admin.php");
        }
        if (isset($_GET['messaggi'])) {
            include(BACK_END . DS . "messaggi.php");
        }
        if (isset($_GET['aggiorna-ordini'])) {
            include(BACK_END . DS . "aggiorna-ordini.php");
        }
        if (isset($_GET['aggiungi-ordini'])) {
            include(BACK_END . DS . "aggiungi-ordini.php");
        }
        if (isset($_GET['modifica-categorie'])) {
            include(BACK_END . DS . "modifica-categorie.php");
        }
        if (isset($_GET['modifica-ordini'])) {
            include(BACK_END . DS . "modifica-ordini.php");
        }
        if (isset($_GET['process_dati'])) {
            include(FRONT_END . DS . "process_dati_form.php");
        }
        if (isset($_GET['categoria_aggiunta'])) {
            include(BACK_END . DS . "categoria_aggiunta.php");
        }
        if (isset($_GET['immagini'])) {
            include(BACK_END . DS . "immagini.php");
        }

        ?>
    </div>
</div>
<!-- /.row -->


<!-- footer -->
<?php include(BACK_END . DS . "footer.php"); ?>