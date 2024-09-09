<?php
// Include il file di configurazione principale che contiene impostazioni e costanti
require_once("../risorse/config.php");

// Include il file dell'intestazione (header) del sito
include(FRONT_END . DS . 'header.php');
?>


<!-- Inizio del contenitore principale per il modulo di login -->
<div class="container my-5">
    <!-- Sezione per visualizzare eventuali avvisi -->
    <div class="text-center">
        <h1 class="display-5 m-2 p-5">Area di login</h1>
        <h4 class=" text-center" style="color:white; background-color:violet"><?php mostraAvviso(); ?></h4>
    </div>

    <!-- Inizio del modulo di login -->
    <div class="form_box">

        <form class="form-horizontal" role="form" method="post" action="">
            <!-- Richiama la funzione login() per gestire la logica di autenticazione -->
            <?php dati_registrazione(); ?>



            <!-- Sezione del titolo del modulo per i clienti -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Pannello per clienti!</h2>
                    <hr>
                </div>
            </div>

            <!-- Sezione per il campo di inserimento del nome utente -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for=""></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                            <input type="text" name="nome" class="form-control" placeholder="Nome">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sezione per il campo di inserimento della password -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password"></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                            <input type="password" name="password_utenti" class="form-control" placeholder="Password">
                        </div>
                    </div>
                </div>

                <!-- Sezione per messaggi di errore relativi al campo password -->
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Eventuali messaggi di errore verranno visualizzati qui -->
                        </span>
                    </div>
                </div>
            </div>

            <!-- Sezione per il pulsante di invio del modulo -->
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" name="login" class="btn btn-primary btn-block">Entra</button>
                </div>
            </div>
        </form>


        <form class="form-horizontal" role="form" method="post" action="">
            <!-- Richiama la funzione login() per gestire la logica di autenticazione -->
            <?php login(); ?>



            <!-- Sezione del titolo del pannello privato -->
            <div class="row mt-5">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Pannello privato!</h2>
                    <hr>
                </div>
            </div>

            <!-- Sezione per il campo di inserimento del nome utente -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="email">Nome utente</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                            <input type="text" name="username" class="form-control" placeholder="Nome utente">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sezione per il campo di inserimento della password -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                </div>

                <!-- Sezione per messaggi di errore relativi al campo password -->
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Eventuali messaggi di errore verranno visualizzati qui -->
                        </span>
                    </div>
                </div>
            </div>

            <!-- Sezione per il pulsante di invio del modulo -->
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" name="login_admin" class="btn btn-primary btn-block">Login</button>
                </div>
            </div>
        </form>

    </div>
</div>
<!-- Fine del contenitore principale per il modulo di login -->

<!-- Include il file del piè di pagina (footer) del sito -->
<?php include(FRONT_END . DS . 'footer.php'); ?>