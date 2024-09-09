<?php
// Inclusione del file di configurazione, che potrebbe contenere variabili di configurazione e costanti
require_once("../risorse/config.php");

// Inclusione del file header.php, che solitamente contiene il markup dell'intestazione della pagina
include(FRONT_END . DS . 'header.php');
?>

<style>
   .immagine_sfondo_home {
    background-image: url(../risorse/immagini/immagini_tante/sfondo-lampadari2.jpg); /* Immagine di sfondo */
    background-repeat: no-repeat; /* Impedisce la ripetizione dell'immagine */
    background-position: center; /* Posiziona l'immagine al centro */
    background-size: cover; /* Rende l'immagine di sfondo coprente */
    background-attachment: fixed; /* L'immagine di sfondo è fissa durante lo scroll */
    color: white; /* Colore del testo */
    padding: 8%; /* Spazio interno del contenitore */
    border-radius: 100px; /* Arrotonda gli angoli del contenitore */
    width: 80%; /* Larghezza del contenitore */
    margin: auto; /* Centra il contenitore orizzontalmente */
}

/* Classe per i titoli nelle sezioni */
.card-title1 {
    text-align: center; /* Allinea il testo al centro */
    font-size: 70px; /* Dimensione del font per i titoli */
}

/* Classe per il testo nelle card */
.card-text1 {
    text-align: center; /* Allinea il testo al centro */
    font-size: 20px; /* Dimensione del font per il testo */
    width: 70%; /* Larghezza del testo */
    margin: auto; /* Centra il testo orizzontalmente */
}

/* Classe per il contenitore del titolo e dello slogan */
.titolo_slogan_card {
    background-color: transparent; /* Sfondo trasparente */
    padding: 8%; /* Spazio interno del contenitore */
    width: 70%; /* Larghezza del contenitore */
    margin-left: 50%; /* Margine sinistro per centrare il contenitore */
    transform: translate(-50%); /* Centra il contenitore orizzontalmente */
    text-align: center; /* Allinea il testo al centro */
    align-items: center; /* Allinea gli elementi al centro verticalmente */
}

    /* Classe per il contenitore delle caratteristiche principali dell'azienda */
    .contenitore_caratteristiche {
        display: flex;
        justify-content: center;
        padding: 5%;
    }

    /* Classe per le caratteristiche principali (card) */
    .caratteristiche {
        padding: 3%;
        text-align: center;
        display: flex;
        border: 1px solid black;
        flex-wrap: wrap;
        width: 33%;
        background-color: rgb(231, 231, 231);
    }

    .card_img {
        font-size: 60px;
    }

    /* Animazione per i pulsanti */
    @keyframes pulsazione {
        0% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.1);
            opacity: 1;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    #button,
    #button_togli,
    #button1,
    #button_togli1,
    #button2,
    #button_togli2 {
        animation: pulsazione 1.5s infinite;
    }

    .btn {
        border: none;
    }

    /* Media query per schermi più piccoli */
    @media(max-width:1200px) {
        .contenitore_caratteristiche {
            text-align: center;
            flex-direction: column;
            width: 100%;
        }

        .caratteristiche {
            width: 90%;
            justify-content: center;
        }

        .card-text1 {
            width: 100%;
        }

        .titolo_slogan_card {
            width: 100%;
        }
    }

    @media(max-width:1100px) {
        .box-primo {
            flex-wrap: wrap;
            justify-content: center;
        }
    }

    .caratteristiche:hover {
        animation: pulsazione 1.5s infinite;
    }

    @media(max-width:1200px) {
        .contenitore_caratteristiche {
            text-align: center;
            flex-direction: column;
            width: 100%;
        }

        .caratteristiche {
            width: 90%;
            justify-content: center;
           
        }
    }

    .card2 {
        background-color: transparent;
        border-radius: 50px;
        margin: 3%;
        box-shadow: -1rem 0 3rem black;
        border: 2px solid white;
        
    }

    .marchi_trattati {
        text-align: center;
        padding: 5%;
        background-image: url(../risorse/immagini/immagini_tante/boomerng3.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;


    }

    .loghi {
        flex-wrap: wrap;
        display: flex;
    }

    .box-marchi {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        align-items: center;
        width: 100%;
        padding: 5%;
    }

    .box-loghi {
        padding: 3%;
        /* Padding del 5% */
        display: none;
        /* Nasconde il box dei loghi per default */
    }

    .marchi {
        width: 25%;
        border: 1px solid black;
        padding: 3%;
        border-radius: 50px;
    }

    .titolo_row {
        background-color: transparent;
        padding: 8%;
        width: 70%;
        margin-left: 50%;
        transform: translate(-50%);
        text-align: center;
    }

    #container {
        justify-content: center;
        /* Centra i contenuti all'interno del container */
        padding: 2%;
        /* Aggiunge un padding del 2% attorno al contenitore */
        flex-wrap: wrap;
        /* Permette agli elementi interni di andare a capo se necessario */
        width: 100%;
        /* Imposta la larghezza del container al 100% */
        display: flex;
        /* Utilizza il layout flexbox per gli elementi interni */
    }

    .card {
        box-shadow: -1rem 0 3rem black;
        /* Aggiunge un'ombra alla card con tonalità violet */
        border-radius: 50px;
        /* Arrotonda gli angoli della card */
        border: none;
        /* Rimuove i bordi della card */
    }

    .card:hover {
        animation: pulsazione 3s infinite linear;
        /* Animazione di pulsazione */
    }

    #button,
    #button_togli {
        animation: pulsazione 3s infinite;
        /* Applica un'animazione di pulsazione ai pulsanti */
    }

    /* Media Query per dispositivi con larghezza massima di 800px */
    @media(max-width:800px) {
        .contenitore_caratteristiche {
            text-align: center;
            /* Centratura del testo */
            flex-direction: column;
            /* Impostazione della direzione dei flex items in colonna */
            width: 100%;
            /* Larghezza al 100% del contenitore */
            align-items: center;
        }

        .caratteristiche {
            width: 90%;
            margin: auto;
            justify-content: center;
            margin-bottom: 50px;
            /* Centratura degli elementi all'interno del contenitore flex */
        }

        .card-text1 {
            width: 100%;
        }
        .titolo_row{
            width: 100%;
        }
    }

    .card{
            margin-bottom: 50px;
        }


    /* Animazione di pulsazione */
    @keyframes pulsazione {
        0% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.1);
            /* Ingrandisce il pulsante del 10% */
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }
</style>

<!-- Sezione di presentazione dello showroom -->
<div class="immagine_sfondo_home" style="border-radius: 100px; width:80%; margin:auto">
    <h5 class="card-title1">Il nostro show-room</h5>
    <p class="card-text1">
        Entra nel nostro showroom e lasciati avvolgere dalla luce: esplora la vasta gamma
        di corpi illuminanti e materiale elettrico
        di alta qualità, pronti a trasformare ogni spazio nella tua prossima
        opera d’arte luminosa!
    </p>
</div>

<!-- Sezione con uno slogan e una descrizione -->
<div class="titolo_slogan_card">
    <h1>Illumina con Eleganza</h1>
    <p style="font-size:20px">
        Benvenuti nel nostro showroom di lampadari, dove eleganza e design si incontrano. Offriamo una vasta gamma di lampadari unici e di alta qualità, adatti a ogni stile e ambiente. Il nostro team di esperti è a vostra disposizione per aiutarvi a trovare l'illuminazione perfetta. Visitateci e scoprite come trasformare i vostri spazi con la luce.
    </p>
</div>

<!-- Sezione delle caratteristiche dei servizi -->
<div class="contenitore_caratteristiche">
    <!-- Card delle caratteristiche: Puntualità -->
    <div class="caratteristiche card2">
        <div class="card1">
            <p class="card_img">&#128346</p> <!-- Icona dell'orologio per la puntualità -->
            <h4>PUNTUALITÀ</h4>
            <p>
                Ci impegniamo a fornire servizi di alta qualità con una precisione impeccabile <br>
                e una puntualità assoluta. Ogni progetto è gestito con cura e attenzione ai dettagli, garantendo <br>
                risultati che rispettano i tempi concordati.
            </p>
        </div>
    </div>
    <!-- Card delle caratteristiche: Precisione -->
    <div class="caratteristiche card2">
        <div class="card3">
            <p class="card_img">&#128204</p> <!-- Icona della puntina per la precisione -->
            <h4>PRECISIONE</h4>
            <p>
                La nostra dedizione alla precisione si traduce in soluzioni affidabili e durature per le tue esigenze. Con anni di esperienza nel settore, sappiamo esattamente come offrire risultati che superano le tue aspettative e contribuiscono al tuo successo.
            </p>
        </div>
    </div>
    <!-- Card delle caratteristiche: Esperienza -->
    <div class="caratteristiche card2">
        <div class="card3">
            <p class="card_img">&#128200</p> <!-- Icona del grafico per l'esperienza -->
            <h4>ESPERIENZA</h4>
            <p>
                La nostra lunga esperienza nel settore ci permette di affrontare ogni sfida con sicurezza e competenza. Con un approccio basato sull’esperienza e sulla conoscenza, garantiamo soluzioni su misura che rispettano le tue aspettative.
            </p>
        </div>
    </div>
</div>

<!-- Sezione dei marchi trattati -->
<div class="box-marchi">
    <!-- Contenitore dei marchi -->
    <div class="marchi_trattati" style="width: 80%;">
        <h1>Marchi che trattiamo</h1>
        <ul class="text-left">
            <li><strong>Impegno per affidabilità e qualità</strong>: Il Servizio Elettrico di Gabbioli assicura massima affidabilità e qualità nei marchi trattati.</li>
            <br>
            <li><strong>Selezione attenta dei fornitori</strong>: Solo prodotti di alto livello, affidabili e duraturi grazie alla selezione scrupolosa di fornitori e produttori.</li>
            <br>
            <li><strong>Reputazione solida</strong>: Basata su anni di esperienza e collaborazione con marchi rinomati per la loro eccellenza.</li>
            <br>
            <li><strong>Soddisfazione delle esigenze</strong>: Prodotti che rispettano elevati standard di qualità e sicurezza per soddisfare le esigenze dei clienti.</li>
            <br>
            <li><strong>Marchi fidati</strong>: I clienti possono contare su marchi affidabili e di fiducia con il Servizio Elettrico di Gabbioli.</li>
        </ul>
        <button style="margin: auto;" id="button" class="btn btn-success">Vedi marchi</button> <!-- Pulsante per visualizzare i loghi -->
        <button style="margin:auto; display:none" id="button_togli" class="btn btn-success">Togli marchi!</button>
    </div>

    <!-- Box dei loghi dei marchi -->
    <div class="box-loghi animate__animated animate__fadeIn">
        <!-- Prima riga di loghi -->
        <div class="loghi">
            <img class="marchi" src="../risorse/immagini/immagini-marchi/affralux-removebg-preview.png" alt="">
            <img class="marchi" src="../risorse/immagini/immagini-marchi/linea-light-removebg-preview.png" alt="">
            <img class="marchi" src="../risorse/immagini/immagini-marchi/FERROLUCE-LOGO-1-removebg-preview.png" alt="">
            <img class="marchi" src="../risorse/immagini/immagini-marchi/granfo.png" alt="">
        </div>
        <!-- Seconda riga di loghi -->
        <div class="loghi">
            <img class="marchi" src="../risorse/immagini/immagini-marchi/mantra.png" alt="">
            <img class="marchi" src="../risorse/immagini/immagini-marchi/perenz-removebg-preview.png" alt="">
            <img class="marchi" src="../risorse/immagini/immagini-marchi/redo-logo-removebg-preview.png" alt="">
            <img class="marchi" src="../risorse/immagini/immagini-marchi/ideal-lux-removebg-preview.png" alt="">
        </div>
    </div>
</div>


<!-- Sezione con le categorie disponibili -->
<div class="titolo_row">
    <h1>Le nostre categorie a vostra disposizione</h1>
    <p>
        Presso il nostro negozio troverai una vasta selezione di illuminazione adatta a ogni stile e ambiente. Dai design moderni e minimalisti alle eleganti soluzioni classiche, offriamo una gamma completa di lampade e lampadari per soddisfare ogni esigenza di illuminazione. Per gli spazi esterni, disponiamo di una varietà di lampade da esterno progettate per resistere agli agenti atmosferici e valorizzare gli ambienti esterni con stile e funzionalità.
    </p>
</div>

<!-- Contenitore per i prodotti dello showroom -->
<div id="container" class=" row-cols-1 row-cols-md-3 g-4">
    <?php showRoomProdotti(); // Funzione per visualizzare i prodotti dello showroom 
    ?>
</div>

<script>
    // Selezione degli elementi dalla pagina
    const box_loghi = document.querySelector(".box-loghi");
    const loghi = document.getElementById("button");
    const togli_loghi = document.getElementById("button_togli");

    // Mostra il box dei loghi al click del pulsante
    loghi.addEventListener('click', function() {
        box_loghi.style.display = "block"
        loghi.style.display = "none";
        togli_loghi.style.display = "block";
    })

    // Aggiunge un evento di click a togli_loghi per nascondere il box dei loghi
    togli_loghi.addEventListener('click', function() {
        loghi.style.display = "block"
        box_loghi.style.display = "none"
        togli_loghi.style.display = "none";
    })
</script>

<?php
// Inclusione del file footer.php, che solitamente contiene il markup del piè di pagina della pagina
include(FRONT_END . DS . "footer.php");
?>