<?php
// Inclusione del file di configurazione e del header
require_once("../risorse/config.php"); // Include il file di configurazione
include(FRONT_END . DS . 'header.php'); // Include il file di header

?>

<!-- Chiamata alla funzione che gestisce la registrazione dei dati e reindirizza verso l'area riservata -->
<?php dati_registrazione(); ?>

<!-- CSS per lo stile dell'area riservata -->
<style>
    .menu>h2 {
        border: 1px solid violet;
        /* Bordo del menu */
        box-shadow: -1rem 0 3rem violet;
        /* Ombra del menu */
        margin: 2%;
        /* Margine del menu */
        padding: 4%;
        /* Padding del menu */
    }

    .menu {
        width: 100%;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .menu_totale {
        margin-top: 5%;
        /* Margine superiore del menu totale */
        display: flex;
        /* Display flessibile per layout */
        flex: 1;
        /* Occupa tutto lo spazio disponibile */
        padding: 5%;
        /* Padding del menu totale */
        align-items: center;
        /* Allinea gli elementi al centro */
    }

    .box_form_group {
        flex-wrap: wrap;
        /* Avvolge gli elementi all'interno del gruppo */
        margin: auto;
        width: 100%;
        /* Larghezza del gruppo di form */
        display: grid;
        /* Mostra come griglia */
        justify-content: center;
        /* Allinea al centro */


    }

    .menu_laterale {
        display: none;
        /* Nasconde il menu laterale per default */
        width: 100%
            /* Larghezza massima del menu laterale */
    }

    .form-group {
        margin-left: 5%;
        /* Margine sinistro del gruppo di form */
        width: 25rem;
        /* Larghezza del gruppo di form */
    }

    /* Effetto hover per i pulsanti */
    #accesso:hover,
    #articoli:hover,
    #ordini:hover,
    #accesso2:hover,
    #articoli2:hover,
    #ordini2:hover {
        background-color: black;
        /* Colore di sfondo al passaggio del mouse */
        cursor: pointer;
        /* Puntatore del mouse cambia in mano */
        color: white;
    }

    .ordiniRiservata {
        width: 50%;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin: auto
    }

    @media(max-width:1300px) {
        .menu {
            width: 100%;
            /* Larghezza del menu per schermi piccoli */
            display: block;
        }

        .menu_totale {
            flex-wrap: wrap;
            /* Avvolge gli elementi all'interno del menu totale */
        }

        .form-group {
            margin-left: 0.0001px;
            /* Margine sinistro del gruppo di form */
        }

        .ordiniRiservata {
            width: 100%;
        }
    }

    .row {
        display: flex;
    }

    .dati_registrazione {
        display: none;
        width: 100%;
        margin: auto;

    }
</style>


<!-- Inizio della barra di navigazione -->
<nav class="navbar navbar-dark bg-dark text-white">
    <span class="h1" class="navbar-brand mb-0 ">AREA RISERVATA</span>
    <span>

        <!-- Inizio degli elementi del menu in alto -->
        <ul class="nav navbar-nav top-nav navbar-right pull-xs-right">

            <li class="dropdown nav-item">
                <!-- Inizio del menu a discesa per l'account utente -->

                <!-- Verifica se l'utente è loggato e saluto personalizzato -->
                <?php
                if (isset($_SESSION['nome'])) {
                    echo 'Ciao, ' . $_SESSION['nome'] . " benvenuto/a nella tua AREA RISERVATA";
                }
                ?>
                <!-- Fine della verifica della sessione utente -->

                <!-- Pulsante per il logout -->
                <a href="#" id="logout"><button type="button" class="btn btn-danger">
                        Logout
                    </button></a>
                <!-- Pulsante di conferma per il logout (nascosto di default) -->
                <a href="logout.php" id="logout_second" style="display: none;"><button type="button" class="btn btn-warning">
                        Clicca se sei sicuro di uscire!
                    </button></a>
    </span>
</nav>


<!-- Fine della barra di navigazione -->

<!-- Inizio della sezione "Page Heading" -->


<!-- Menu per la navigazione tra le informazioni -->
<div class="menu">
    <h2 id="accesso">Info di accesso</h2>
    <h2 id="accesso2" style="display: none;">Info di accesso</h2>

    <h2 id="articoli">Articoli in sospeso</h2>
    <h2 id="articoli2" style="display: none;">Articoli in sospeso</h2>

    <h2 id="ordini">Situazione ordini</h2>
    <h2 id="ordini2" style="display: none;">Situazione ordini</h2>

</div>
<div class="menu_totale">
    <!-- Contenitore per visualizzare gli articoli in sospeso -->
    <div class="menu_laterale animate__animated animate__fadeIn" id="menu_articoli">

        <!-- Inizio del contenuto della pagina -->
        <div class="container">
            <?php require_once('carrello.php'); ?> <!-- Include il file carrello.php -->

            <!-- Inizio della riga che contiene la tabella e il modulo -->
            <div class="">
                <div class="">

                    <!-- Inizio del modulo per PayPal -->

                    <!-- Tabella per visualizzare i prodotti nel carrello -->
                    <table class="table table-striped text-center m-auto" style="display: flex;">
                        <tbody style="margin:auto">
                            <!-- Richiamo della funzione 'carrello()' per visualizzare i prodotti -->
                            <?php carrello(); ?>
                        </tbody>
                    </table>

                </div>
            </div>

            <!-- Sezione per il riepilogo dell'ordine -->

        </div>
    </div>

    <!-- Contenitore per gli ordini effettuati -->
    <div id="box_ordini" class="menu_laterale2 animate__animated animate__fadeIn" style="display: none;">
        <div class="ordiniRiservata">

            <?php ordini_areaRiservata(); ?>
        </div>
    </div>
    <!-- Contenitore per il riepilogo dei dati di accesso dell'utente -->
    <div id="accesso_dati" class="dati_registrazione animate__animated animate__fadeIn">
        <form action="" method="post">
            <div class="box_form_group">

                <div class="form-group">
                    <label for="">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome" value="<?php echo htmlspecialchars($_SESSION['nome']); ?>" disabled>
                </div>

                <!-- Campo per l'username -->
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="username" name="username" class="form-control" placeholder="Username" value="<?php echo htmlspecialchars($_SESSION['username']); ?>" disabled>
                </div>

                <!-- Campo per l'email -->
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="mail" class="form-control" placeholder="Email" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" disabled>
                </div>

                <!-- Campo per la password -->
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo htmlspecialchars($_SESSION['password_utenti']); ?>" disabled>
                </div>

                <!-- Campo per il numero di telefono -->
                <div class="form-group">
                    <label for="">Numero di telefono</label>
                    <input type="tel" name="tel" class="form-control" placeholder="Cellulare" value="<?php echo htmlspecialchars($_SESSION['cellulare']); ?>" disabled>
                </div>

            </div>
        </form>
    </div>

</div>



<!-- Inclusione del footer della pagina -->
<?php include(FRONT_END . DS . 'footer.php'); ?>

<!-- codice javascript per gestire le animazioni tra il menu e i contenitori -->
<script>
    //script per il logout
    const logout = document.getElementById("logout")
    const logout_second = document.getElementById("logout_second")

    logout.addEventListener("click", function() {
        logout.style.display = "none";
        logout_second.style.display = "block";
    })

    // fine script per il logout

    const accesso = document.getElementById("accesso")
    const accesso2 = document.getElementById("accesso2")
    const box_accesso = document.getElementById("accesso_dati");



    accesso.addEventListener("click", function() {
        box_accesso.style.display = "block";
        accesso2.style.display = "block";
        accesso.style.display = "none";
        accesso2.style.background = "aqua";
        accesso.style.background = "aqua";
        menu_articoli.style.display = "none";
        articoli.style.background = "";
        articoli2.style.background = "";
        ordini.style.background = "";
        box_ordini.style.display = "none"

    })
    accesso2.addEventListener("click", function() {
        box_accesso.style.display = "none";
        accesso2.style.display = "none";
        accesso.style.display = "block";
        menu_articoli.style.display = "none";
        articoli2.style.background = "";
        ordini.style.background = "";
        ordini2.style.background = "";
        box_ordini.style.display = "none"
        accesso2.style.background = "";


    })

    const articoli = document.getElementById("articoli")
    const articoli2 = document.getElementById("articoli2")
    const menu_articoli = document.getElementById("menu_articoli")




    articoli.addEventListener("click", function() {
        menu_articoli.style.display = "block";
        articoli2.style.display = "block";
        articoli.style.display = "none";
        articoli2.style.background = "aqua";
        box_accesso.style.display = "none";
        accesso2.style.background = "";
        accesso.style.background = "";
        box_ordini.style.display = "none";
        ordini.style.background = "";
        ordini2.style.background = "";

    })

    articoli2.addEventListener("click", function() {
        menu_articoli.style.display = "none";
        articoli2.style.display = "none";
        articoli.style.display = "block";
        box_accesso.style.display = "none";
        accesso2.style.background = "";
        box_ordini.style.display = "none";
        box_ordini2.style.display = "none";

    })

    const ordini = document.getElementById("ordini")
    const ordini2 = document.getElementById("ordini2")
    const box_ordini = document.getElementById("box_ordini")



    ordini.addEventListener("click", function() {
        box_ordini.style.display = "flex";
        ordini2.style.display = "flex";
        ordini.style.display = "none";
        ordini2.style.background = "aqua";
        menu_articoli.style.display = "none";
        box_accesso.style.display = "none";
        articoli2.style.background = "";
        accesso2.style.background = "";

    })

    ordini2.addEventListener("click", function() {
        box_ordini.style.display = "none";
        ordini2.style.display = "none";
        ordini.style.display = "flex";
        accesso2.style.background = "";
        articoli2.style.background = "";
        menu_articoli.style.display = "none";


    })
</script>