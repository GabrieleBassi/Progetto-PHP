<?php
// Inclusione del file di configurazione e del file header
require_once("../risorse/config.php");
include(FRONT_END . DS . 'header.php');
?>

<style>
    /* Stili per l'immagine di sfondo e il testo descrittivo */
    .immagine_sfondo_impiantistica {
        background-image: url(../risorse/immagini/immagini_tante/impiantistica_sfondo.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        color: white;
        padding: 8%;
        border-radius: 100px;
        width: 80%;
        margin: auto;
    }

    /* Stili per il titolo e il testo delle card */
    .card-title1 {
        text-align: center;
        font-size: 70px;
    }

    .card-text1 {
        text-align: center;
        font-size: 20px;
        width: 70%;
        margin: auto;
    }

    .titolo_slogan_card {
        background-color: transparent;
        padding: 8%;
        width: 70%;
        margin-left: 50%;
        transform: translate(-50%);
        text-align: center;
        align-items: center;
    }

    /* Stili per le card delle caratteristiche */
    .caratteristiche {
        padding: 3%;
        text-align: center;
        display: flex;
        border: 1px solid black;
        flex-wrap: wrap;
        width: 33%;
        background-color: rgb(231, 231, 231);
    }

    /* Animazione di pulsazione per le card */
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

    /* Nascondi il corpo delle card */
    .card-body {
        display: none;
    }

    /* Stili generali per le card */
    .card {
        width: 25rem;
    }

    /* Margine inferiore per le colonne */
    .col {
        margin-bottom: 40px;
    }

    /* Stili per il contenitore delle caratteristiche */
    .contenitore_caratteristiche {
        display: flex;
        justify-content: center;
        padding: 5%;
    }

    /* Animazione di pulsazione per le card delle caratteristiche al passaggio del mouse */
    .caratteristiche:hover {
        animation: pulsazione 1.5s infinite;
    }

    /* Stili per le immagini delle card */
    .card_img {
        font-size: 60px;
    }

    /* Stili per le card con bordo e ombreggiatura */
    .card2 {
        background-color: transparent;
        border-radius: 50px;
        margin: 3%;
        box-shadow: -1rem 0 3rem black;
        border: 2px solid white;
    }

    /* Stili per il titolo delle righe e layout responsivo */
    .titolo_row {
        text-align: center;
        padding: 5%;
        width: 70%;
        margin: auto;
    }

    .card_impiantistica {
        display: flex;
        justify-content: center;
        margin: 0;
        flex-wrap: wrap;
        background-color: black;
    }

    .col_impiantistica {
        margin: 4%;
    }

    /* Media query per schermi più piccoli */
    @media(max-width:1200px) {
        .contenitore_caratteristiche {
            text-align: center;
            flex-direction: column;
            width: 100%;
            align-items: center;
        }

        .caratteristiche {
            width: 90%;
            justify-content: center;
            text-align: center;
        }

        .card-text1 {
            width: 100%;
        }

        .card {
            margin: auto;
            margin-bottom: 50px;
        }

        .titolo_slogan_card {
            width: 100%;
        }

        .titolo_row {
            width: 100%;
        }
    }
</style>

<!-- Sezione con immagine di sfondo e testo descrittivo sui sistemi impiantistici avanzati -->
<div class="immagine_sfondo_impiantistica" style="border-radius: 100px; width:80%; margin:auto">
    <h5 class="card-title1">Sistema di Impianti avanzati</h5>
    <p class="card-text1">
        Dalla progettazione alla realizzazione e alla manutenzione, ci occupiamo di tutto per
        garantirti un sistema elettrico affidabile e performante. Utilizziamo tecnologie all'avanguardia e materiali
        di alta qualità
    </p>
</div>

<!-- Sezione con slogan e descrizione dei servizi offerti -->
<div class="titolo_slogan_card">
    <h1>Di cosa ci occupiamo</h1>
    <p style="font-size: 20px;">
        Il nostro servizio di impiantistica civile e industriale è sinonimo di qualità, affidabilità e
        professionalità. Ci occupiamo di progettare, installare e mantenere impianti elettrici adatti a ogni tipo di
        ambiente, sia civile che industriale. Ci occupiamo di impianti di illuminazione, distribuzione elettrica, automazione, sicurezza e molto altro ancora. Il nostro obiettivo è fornire ai nostri clienti soluzioni complete e integrate che migliorino
        l'efficienza energetica, ottimizzino i costi e garantiscano un ambiente di lavoro sicuro e confortevole.

    </p>
</div>

<!-- Definizione degli stili CSS per la pagina -->


<!-- Sezione delle caratteristiche principali -->
<div class="contenitore_caratteristiche">

    <!-- Card per Puntualità -->
    <div class="caratteristiche card2">
        <div class="card1">
            <p class="card_img">&#128346</p>
            <h4>PUNTUALITÀ</h4>
            <p>
                Ci impegniamo a fornire servizi di alta qualità con una precisione impeccabile <br> e una puntualità
                assoluta. Ogni progetto è gestito con cura e attenzione ai dettagli, garantendo <br>risultati che
                rispettano i tempi concordati.
            </p>
        </div>
    </div>

    <!-- Card per Precisione -->
    <div class="caratteristiche card2">
        <div class="card3">
            <p class="card_img">&#128204</p>
            <h4>PRECISIONE</h4>
            <p>
                La nostra dedizione alla precisione si traduce in soluzioni affidabili e durature per le tue esigenze. Con anni di esperienza nel settore, sappiamo esattamente come offrire risultati che superano le tue aspettative e contribuiscono al tuo successo.
            </p>
        </div>
    </div>

    <!-- Card per Esperienza -->
    <div class="caratteristiche card2">
        <div class="card3">
            <p class="card_img">&#128200</p>
            <h4>ESPERIENZA</h4>
            <p>
                La nostra lunga esperienza nel settore ci permette di affrontare ogni sfida con sicurezza e competenza. Con un approccio basato sull’esperienza e sulla conoscenza, garantiamo soluzioni su misura che rispettano le tue aspettative.
            </p>
        </div>
    </div>

</div>

<div class="titolo_row">
    <h1>I nostri servizi sono a vostra disposizione</h1>
    <p>
        Offriamo soluzioni complete per impiantistica industriale e civile, garantendo efficienza, sicurezza e rispetto delle normative vigenti. Dall'installazione di impianti elettrici ad alta tecnologia alla manutenzione e aggiornamento di sistemi preesistenti, il nostro team di esperti è pronto a soddisfare ogni esigenza. Che si tratti di edifici residenziali, uffici o complessi industriali, forniamo servizi personalizzati per assicurare il corretto funzionamento di ogni impianto, contribuendo a creare ambienti sicuri e operativi.
    </p>
</div>

<!-- Sezione delle card con dettagli sui servizi -->
<div class="card_impiantistica">
    <!-- Card per Quadristica -->
    <div class="col_impiantistica" id="card">
        <div class="card h-100">
            <img src="../risorse/immagini/immagini_tante/impiantielettrici-civili-industriali.jpg" class="card-img-top" alt="...">
            <div class="card-body" id="card-body">
                <h5 class="card-title">Quadristica</h5>
                <p class="card-text animate__animated animate__fadeIn">
                    I nostri quadri elettrici sono la spina dorsale di ogni sistema di distribuzione e controllo dell’energia. Progettati con precisione e costruiti per durare nel tempo, i nostri quadri garantiscono un flusso affidabile di energia elettrica per le tue esigenze industriali o commerciali.
                </p>
            </div>
        </div>
    </div>

    <!-- Card per Pannelli solari -->
    <div class="col_impiantistica" id="card1">
        <div class="card h-100">
            <img src="../risorse/immagini/immagini_tante/pannelli-solari-1920x1080.webp" class="card-img-top" alt="...">
            <div class="card-body" id="card-body1">
                <h5 class="card-title">Pannelli solari</h5>
                <p class="card-text animate__animated animate__fadeIn">
                    Abbraccia il futuro dell’energia sostenibile con i nostri pannelli solari ad alta efficienza. Con tecnologia all’avanguardia e design affidabile, i nostri pannelli ti offrono un modo ecologico per ridurre i costi energetici e l’impatto ambientale della tua attività.
                </p>
            </div>
        </div>
    </div>

    <!-- Card per Impianti civili -->
    <div class="col_impiantistica" id="card2">
        <div class="card h-100">
            <img src="../risorse/immagini/immagini_tante/imp-civili-02.jpg" class="card-img-top" alt="...">
            <div class="card-body" id="card-body2">
                <h5 class="card-title">Impianti civili</h5>
                <p class="card-text animate__animated animate__fadeIn">
                    I nostri impianti civili portano comfort e sicurezza nella tua casa o nell’edificio commerciale. Dalla climatizzazione alla sicurezza elettrica, progettiamo e installiamo sistemi su misura che si integrano perfettamente con la tua struttura, garantendo un ambiente confortevole e funzionale per te e i tuoi clienti.
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Sezione delle card aggiuntive con dettagli sui servizi -->
<div class="card_impiantistica">

    <!-- Card per Impianti di Domotica -->
    <div class="col_impiantistica" id="card3">
        <div class="card h-100">
            <img src="../risorse/immagini/immagini_tante/domotica.jpg" class="card-img-top" alt="...">
            <div class="card-body" id="card-body3">
                <h5 class="card-title">Impianti di domotica</h5>
                <p class="card-text animate__animated animate__fadeIn">
                    Trasforma la tua casa in un’oasi di comfort e praticità con i nostri impianti
                    di domotica personalizzati. Grazie alla nostra esperienza e tecnologia all’avanguardia, potrai
                    controllare luci, tapparelle, temperatura e molto altro con un semplice tocco sul tuo smartphone
                    o tablet.
                </p>
            </div>
        </div>
    </div>

    <!-- Card per Impianti Elettrici -->
    <div class="col_impiantistica" id="card4">
        <div class="card h-100">
            <img src="../risorse/immagini/immagini_tante/IMPIANTI-ELETTRICI-TECNOLOGICI.webp" class="card-img-top" alt="...">
            <div class="card-body" id="card-body4">
                <h5 class="card-title">Impianti elettrici</h5>
                <p class="card-text animate__animated animate__fadeIn">
                    Impianti elettrici affidabili e sicuri sono fondamentali per la tua casa o
                    attività commerciale. Gabbioli offre servizi di progettazione, installazione e manutenzione di
                    impianti elettrici su misura, garantendo efficienza energetica e conformità alle normative di
                    sicurezza.
                </p>
            </div>
        </div>
    </div>

    <!-- Card per Installazione di LED -->
    <div class="col_impiantistica" id="card5">
        <div class="card h-100">
            <img src="../risorse/immagini/immagini_tante/illuminazione-led.webp" class="card-img-top" alt="...">
            <div class="card-body" id="card-body5">
                <h5 class="card-title">Installazione di LED</h5>
                <p class="card-text animate__animated animate__fadeIn">
                    Risparmia energia e riduci i costi di gestione con l’installazione di LED a
                    basso consumo energetico. I nostri esperti ti guideranno nella scelta dei migliori prodotti e
                    gestiranno l’installazione in modo professionale, garantendo un’illuminazione efficace e
                    duratura per il tuo ambiente.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Script per gestire la visualizzazione dinamica delle descrizioni delle card al passaggio del mouse -->
<script>
    // Selezione degli elementi delle card e dei rispettivi corpi delle card
    const card = document.getElementById("card");
    const card1 = document.getElementById("card1");
    const card2 = document.getElementById("card2");
    const card3 = document.getElementById("card3");
    const card4 = document.getElementById("card4");
    const card5 = document.getElementById("card5");
    const body_card = document.getElementById("card-body");
    const body_card1 = document.getElementById("card-body1");
    const body_card2 = document.getElementById("card-body2");
    const body_card3 = document.getElementById("card-body3");
    const body_card4 = document.getElementById("card-body4");
    const body_card5 = document.getElementById("card-body5");

    // Aggiunta degli eventi per mostrare la descrizione delle card al passaggio del mouse
    card.addEventListener("mouseover", function() {
        body_card.style.display = "block";
    });
    card1.addEventListener("mouseover", function() {
        body_card1.style.display = "block";
    });
    card2.addEventListener("mouseover", function() {
        body_card2.style.display = "block";
    });
    card3.addEventListener("mouseover", function() {
        body_card3.style.display = "block";
    });
    card4.addEventListener("mouseover", function() {
        body_card4.style.display = "block";
    });
    card5.addEventListener("mouseover", function() {
        body_card5.style.display = "block";
    });

    // Aggiunta degli eventi per nascondere la descrizione delle card quando il mouse esce
    card.addEventListener("mouseout", function() {
        body_card.style.display = "";
    });
    card1.addEventListener("mouseout", function() {
        body_card1.style.display = "";
    });
    card2.addEventListener("mouseout", function() {
        body_card2.style.display = "";
    });
    card3.addEventListener("mouseout", function() {
        body_card3.style.display = "";
    });
    card4.addEventListener("mouseout", function() {
        body_card4.style.display = "";
    });
    card5.addEventListener("mouseout", function() {
        body_card5.style.display = "";
    });
</script>

<?php
// Inclusione del file di piè di pagina per completare la struttura del sito web
include(FRONT_END . DS . "footer.php");
?>