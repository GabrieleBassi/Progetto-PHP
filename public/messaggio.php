<?php
// Includi il file di configurazione principale per impostazioni e costanti
require_once("../risorse/config.php");

// Includi il file dell'intestazione del sito
include(FRONT_END . DS . 'header.php');
?>

<style>
    .box_form {
        padding: 5%;
        text-align: center;
        display: flex;
        justify-content: space-around;
        background-color: black;
        color: white;
        align-items: center;
        text-align: left;
    }

    .messaggio {
        width: 30%;
    }

    .testo_form {
        width: 40%;
    }

    @media(max-width:1100px) {
        .box_form {
            width: 100%;
            flex-wrap: wrap;
        }
        .messaggio{
            width: 100%;
        }
        .testo_form{
            width: 100%;
            text-align: center;
        }
    }
</style>

<div class="box_form">
    <div class="testo_form">
        <!-- Sezione di testo introduttivo del modulo di contatto -->
        <h2>Contattaci per le tue esigenze di impiantistica, corpi illuminanti ed e-commerce</h2>
        <br>
        <p>
            Grazie per aver visitato il nostro sito! Siamo un'azienda specializzata nell'impiantistica, nella vendita di materiale elettrico e nella gestione del nostro e-commerce. Se hai domande, richieste di preventivi, o desideri discutere di un progetto specifico, ti invito a compilare il modulo di contatto qui sotto. <br><br>

            Attraverso il modulo, puoi facilmente entrare in contatto con noi per qualsiasi esigenza, sia che tu stia cercando soluzioni personalizzate per un progetto tecnico, sia che tu abbia bisogno di assistenza per i tuoi acquisti online. Siamo qui per offrirti consigli tecnici e supporto su misura, che si tratti di un grande progetto o di un semplice ordine dal nostro shop. <br><br>

            Non esitare, siamo a tua completa disposizione per supportarti in ogni fase del tuo lavoro e per garantirti un'esperienza di acquisto online semplice e soddisfacente!
        </p>
    </div>
    <div class="messaggio">
        <!-- Inizio del modulo di contatto -->
        <form action="" method="post" class="form text-center">

            <?php modulo() ?>

            <!-- Campo per il nome dell'utente -->
            <div class="form-group">
                <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>

            <!-- Campo per l'username dell'utente -->
            <div class="form-group">
                <input type="username" name="username" class="form-control" placeholder="Cognome">
            </div>

            <!-- Campo per l'email dell'utente -->
            <div class="form-group">
                <input type="text" name="mail" class="form-control" placeholder="Email">
            </div>

            <!-- Campo per il numero di cellulare dell'utente -->
            <div class="form-group">
                <input type="text" name="tel" class="form-control" placeholder="Cellulare">
            </div>

            <!-- Campo per il messaggio dell'utente -->
            <div class="form-group">
                <textarea type="text" name="messaggio" class="form-control" placeholder="Messaggio"></textarea>
            </div>

            <!-- Pulsante per inviare il modulo -->
            <input type="submit" name="invia" value="Invia modulo" class="btn btn-success text-center">

        </form>
        <!-- Fine del modulo di contatto -->
    </div>

</div>