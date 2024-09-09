<?php  ?>

<?php
// Include il file di configurazione principale che contiene impostazioni e costanti
require_once("../risorse/config.php");

// Include il file dell'intestazione (header) del sito
include(FRONT_END . DS . 'header.php');
?>

<!-- Inizio del contenitore principale per il modulo di login -->
<div class="container my-5">
    <div class="text-center">
        <h1 class="display-5 m-2 p-5">Area di registrazione</h1>
        <h4 class=" text-center" style="color:white; background-color:violet"><?php mostraAvviso(); ?></h4>
    </div>



    <div class="container" style="margin: auto; width:70%">
        <!-- Contenitore principale che racchiude il form -->


        <!-- Colonna di larghezza media (6 spazi su 12), che contiene il form -->

        <!-- Inizio del modulo di registrazione -->
        <form action="" method="post">
            <!-- Invio dei dati del form alla pagina process_dati.php tramite il metodo POST -->
            <?php registrati() ?>
            <!-- Campo di input per il nome dell'utente -->
            <div class="form-group">
                <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                <!-- Campo obbligatorio per inserire il nome -->
            </div>

            <!-- Campo di input per l'username dell'utente -->
            <div class="form-group">
                <input type="username" name="username" class="form-control" placeholder="Cognome" required>
                <!-- Campo obbligatorio per inserire l'username -->
            </div>

            <!-- Campo di input per l'email dell'utente -->
            <div class="form-group">
                <input type="mail" name="mail" class="form-control" placeholder="Email" required>
                <!-- Campo obbligatorio per inserire l'email -->
            </div>

            <!-- Campo di input per la password dell'utente -->
            <div class="form-group">
                <input type="password" name="password_utenti" class="form-control" placeholder="Password" required>
                <!-- Campo obbligatorio per inserire la password -->
            </div>

            <!-- Campo di input per il numero di cellulare dell'utente -->
            <div class="form-group">
                <input type="tel" name="tel" class="form-control" placeholder="Cellulare" required>
                <!-- Campo obbligatorio per inserire il numero di cellulare -->
            </div>

            <!-- Pulsante per inviare il modulo -->
            <div class="text-center">
                <input type="submit" name="registrati" value="Registrati" class="btn btn-success">
            </div>
            <!-- Invia i dati del form -->

        </form>
        <!-- Fine del modulo di registrazione -->


        <!-- Fine della colonna che contiene il form -->
    </div>
    <!-- Fine del contenitore principale -->

</div>

<!-- Include il file del piè di pagina (footer) del sito -->
<?php include(FRONT_END . DS . 'footer.php'); ?>