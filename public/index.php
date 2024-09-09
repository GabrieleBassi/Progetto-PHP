<?php
// Inclusione del file di configurazione e del file header
require_once("../risorse/config.php");
include(FRONT_END . DS . 'header.php');
?>

<style>
 /* Classe per il contenitore principale (box) */
.box-primo {
    display: flex; /* Utilizza Flexbox per il layout */
    padding: 5%; /* Spazio interno del contenitore */
    align-items: center; /* Allinea gli elementi al centro verticalmente */
    justify-content: center; /* Allinea gli elementi al centro orizzontalmente */
}

/* Classe per l'immagine di sfondo nella sezione "Negozio di corpi illuminanti" */
.immagine_sfondo_home {
    background-image: url(../risorse/immagini/immagini_tante/sfondo-lampadari2.jpg); /* Immagine di sfondo */
    background-repeat: no-repeat; /* Non ripete l'immagine */
    background-position: center; /* Posiziona l'immagine al centro */
    background-size: cover; /* Rende l'immagine di sfondo coprente */
    background-attachment: fixed; /* L'immagine di sfondo è fissa durante lo scroll */
    color: white; /* Testo bianco per contrasto */
    padding: 8%; /* Spazio interno del contenitore */
    text-align: center; /* Allinea il testo al centro */
}

/* Classe per l'immagine di sfondo nella sezione "Impianti civili e industriali" */
.immagine_sfondo_impiantistica {
    background-image: url(../risorse/immagini/immagini_tante/impiantistica_sfondo.jpg); /* Immagine di sfondo */
    background-repeat: no-repeat; /* Non ripete l'immagine */
    background-position: center; /* Posiziona l'immagine al centro */
    background-size: cover; /* Rende l'immagine di sfondo coprente */
    background-attachment: fixed; /* L'immagine di sfondo è fissa durante lo scroll */
    color: white; /* Testo bianco per contrasto */
    padding: 8%; /* Spazio interno del contenitore */
    text-align: center; /* Allinea il testo al centro */
}

/* Classe per l'immagine di sfondo nella sezione "E-commerce di Gabbioli" */
.immagine_sfondo_ecommerce {
    background-image: url(../risorse/immagini/immagini_tante/ecommerce_sfondo.jpg); /* Immagine di sfondo */
    background-repeat: no-repeat; /* Non ripete l'immagine */
    background-position: center; /* Posiziona l'immagine al centro */
    background-size: cover; /* Rende l'immagine di sfondo coprente */
    background-attachment: fixed; /* L'immagine di sfondo è fissa durante lo scroll */
    color: white; /* Testo bianco per contrasto */
    padding: 8%; /* Spazio interno del contenitore */
    text-align: center; /* Allinea il testo al centro */
}

/* Pulsante scuro con sfondo nero */
.btn-dark {
    background-color: black; /* Colore di sfondo del pulsante */
}

/* Classi per i titoli nelle sezioni */
.card-title1 {
    text-align: center; /* Allinea il testo al centro */
    font-size: 70px; /* Dimensione del font per i titoli */
}

.card-text1 {
    text-align: center; /* Allinea il testo al centro */
    font-size: 20px; /* Dimensione del font per il testo */
    width: 70%; /* Larghezza del testo */
    margin: auto; /* Centra il testo orizzontalmente */
    font-weight: bolder; /* Rende il font più spesso */
}

/* Classe per il contenitore del titolo e dello slogan nelle sezioni */
.titolo_slogan_card {
    text-align: center; /* Allinea il testo al centro */
    padding: 5%; /* Spazio interno del contenitore */
    display: none; /* Nasconde il contenitore di default */
}

/* Classe per il contenitore delle caratteristiche principali dell'azienda */
.contenitore_caratteristiche {
    display: flex; /* Utilizza Flexbox per il layout */
    justify-content: center; /* Allinea gli elementi al centro orizzontalmente */
    padding: 5%; /* Spazio interno del contenitore */
}

/* Classe per le caratteristiche principali (card) */
.caratteristiche {
    padding: 3%; /* Spazio interno delle card */
    text-align: center; /* Allinea il testo al centro */
    display: flex; /* Utilizza Flexbox per il layout */
    border: 1px solid black; /* Bordo nero per le card */
    flex-wrap: wrap; /* Permette il wrapping degli elementi */
    width: 33%; /* Larghezza della card */
    background-color: rgb(231, 231, 231); /* Colore di sfondo delle card */
}

.card_img {
    font-size: 60px; /* Dimensione del font per le icone */
}

/* Applicazione dell'animazione di pulsazione */
#button,
#button_togli,
#button1,
#button_togli1,
#button2,
#button_togli2 {
    animation: pulsazione 1.5s infinite; /* Applicazione dell'animazione pulsante */
}

/* Rimuove il bordo dai pulsanti */
.btn {
    border: none; /* Rimuove il bordo dai pulsanti */
}

/* Media query per schermi più piccoli */
@media (max-width: 1200px) {
    .contenitore_caratteristiche {
        text-align: center; /* Allinea il testo al centro */
        flex-direction: column; /* Dispone gli elementi in colonna */
        width: 100%; /* Larghezza al 100% */
    }

    .caratteristiche {
        width: 90%; /* Larghezza delle card per schermi più piccoli */
        justify-content: center; /* Allinea gli elementi al centro orizzontalmente */
    }

    .card-text1 {
        width: 100%; /* Larghezza del testo per schermi più piccoli */
    }
}

@media (max-width: 1100px) {
    .box-primo {
        flex-wrap: wrap; /* Permette il wrapping degli elementi */
        justify-content: center; /* Allinea gli elementi al centro orizzontalmente */
    }
}

/* Applicazione dell'animazione di pulsazione al passaggio del mouse */
.caratteristiche:hover {
    animation: pulsazione 1.5s infinite; /* Applicazione dell'animazione pulsante al passaggio del mouse */
}

/* Classe per le card secondarie */
.card2 {
    background-color: transparent; /* Colore di sfondo trasparente */
    border-radius: 50px; /* Angoli arrotondati */
    margin: 3%; /* Margine delle card */
    box-shadow: -1rem 0 3rem black; /* Ombra della card */
    border: 2px solid white; /* Bordo bianco per la card */
}

</style>


<!-- Sezione con dettagli sul negozio e la sua storia -->
<div class="box-primo">

    <!-- Sezione del negozio con immagine di sfondo -->
    <div class="immagine_sfondo_home" style="width: 100%; border-radius:50px;">
        <h5 class="card-title1">Negozio di corpi illuminanti</h5>
        <p class="card-text1">Siamo una azienda che offre una vasta scelta di corpi illuminanti
            per ogni esigenza, sia per ambienti civili che industriali.</p>
        <button style="margin:auto; font-size:20px" id="button" class="btn btn-dark mt-5">Scopri!</button>
        <button style="margin:auto; display:none;  font-size:20px" id="button_togli" class="btn btn-dark  mt-5">Nascondi!</button>
    </div>

    <!-- Sezione con dettagli sulle origini del negozio -->
    <div id="titolo_slogan_card" class="titolo_slogan_card text-left animate__animated animate__fadeIn" style="width:100rem;">
        <h3>Il nostro negozio e le sue origini</h3>
        <ol>
            <li><strong>Fondazione dell'azienda</strong></li>
            <ul>
                <li>Gabbioli Srl è stata fondata da Giovanni Gabbioli in una piccola cittadina circondata dalle montagne.</li>
                <li>L'azienda iniziò come una modesta bottega di riparazione elettrica.</li>
            </ul>
            <br>
            <li><strong>Espansione sotto la guida di Luigi</strong></li>
            <ul>
                <li>Marco, figlio di Giovanni, amplia l'azienda per offrire una gamma completa di servizi elettrici, includendo installazioni, manutenzione e soluzioni innovative per risparmi energetici.</li>
                <li>Marco mantiene l'impegno verso la qualità e il servizio personalizzato, seguendo lo spirito del padre.</li>
            </ul>
            <br>
            <li><strong>Successo Continuo</strong></li>
            <ul>
                <li>La Gabbioli Srl ha proseguito la sua storia di successo, illuminando le strade e i casi della regione con energia affidabile e un impegno costante verso la soddisfazione del cliente.</li>
            </ul>
        </ol>
    </div>
</div>

<!-- Sezione con soluzioni su misura e dettagli sui servizi -->
<div class="box-primo">
    <!-- Sezione con dettagli sulle soluzioni personalizzate -->
    <div id="titolo_slogan_card1" class="titolo_slogan_card text-left animate__animated animate__fadeIn" style="width:100rem">
        <h3>Soluzioni su Misura: Il Partner Affidabile per la Tua Impiantistica</h3>
        <ol>
            <li><strong>Esperienza Pluriennale</strong></li>
            <ul>
                <li>L'esperienza pluriennale nel settore permette di offrire soluzioni su misura con la massima qualità e affidabilità.</li>
            </ul>
            <br>
            <li><strong>Equipe qualificata</strong></li>
            <ul>
                <li>La nostra equipe di professionisti altamente qualificati è in grado di affrontare sfide di qualsiasi dimensione, garantendo risultati eccellenti e conformi agli standard di sicurezza.</li>
            </ul>
            <br>
            <li><strong>Innovazione e Tecnologia</strong></li>
            <ul>
                <li>Poniamo grande enfasi sull'innovazione e utilizziamo tecnologie all'avanguardia, materiali e apparecchiature di alta qualità per assicurare durabilità ed efficienza degli impianti.</li>
            </ul>
        </ol>
    </div>

    <!-- Sezione con immagine di sfondo e dettagli sugli impianti -->
    <div class="immagine_sfondo_impiantistica" style="border-radius:50px; width:100%">
        <h5 class="card-title1">Impianti civili e industriali</h5>
        <p class="card-text1">La nostra azienda offre un servizio di impiantistica civile e industriale con dei tecnici
            specializzati, garantendo così lavori di alta qualità e sicurezza per i nostri clienti.
        </p>
        <button style="margin:auto;  font-size:20px" id="button1" class="btn btn-dark  mt-5">Scopri!</button>
        <button style="margin:auto; display:none;  font-size:20px" id="button_togli1" class="btn btn-dark  mt-5">Nascondi!</button>
    </div>
</div>




<div class="box-primo">

    <!-- Inizio del blocco per l'immagine di sfondo e-commerce -->
    <div class="immagine_sfondo_ecommerce" style="border-radius: 50px; width:100%">
        <!-- Titolo della sezione e-commerce -->
        <h5 class="card-title1">E-commerce di Gabbioli</h5>
        <!-- Descrizione dell'e-commerce -->
        <p class="card-text1">Scintilla di stile nel tuo ambiente con il nostro e-commerce di illuminazione:
            esplora la vasta gamma di soluzioni luminose di Gabbioli, dove ogni clic porta nuova luce alla tua vita!</p>
        <!-- Bottone per scoprire l'e-commerce -->
        <button style="margin: auto;  font-size:20px" id="button2" class="btn btn-dark  mt-5">Scopri!</button>
        <button style="margin:auto; display:none;  font-size:20px" id="button_togli2" class="btn btn-dark  mt-5">Nascondi!</button>
    </div>
    <!-- Fine del blocco per l'immagine di sfondo e-commerce -->

    <!-- Inizio del blocco per il titolo e slogan della seconda card -->
    <div id="titolo_slogan_card2" class="titolo_slogan_card text-left animate__animated animate__fadeIn" style="width:100rem">
        <!-- Titolo della seconda card -->
        <h3>Il Nuovo E-Commerce del Servizio Elettrico Gabbioli</h3>
        <!-- Elenco dei punti chiave -->
        <ol>
            <!-- Primo punto: Esperienza di Shopping Online -->
            <li><strong>Esperienza di Shopping Online</strong></li>
            <ul>
                <li>Il Servizio Elettrico di Gabbioli offre un'esperienza di acquisto online semplice, conveniente e affidabile.</li>
            </ul>
            <br>
            <!-- Secondo punto: Interfaccia intuitiva -->
            <li><strong>Interfaccia intuitiva</strong></li>
            <ul>
                <li>Il nostro sito e-commerce ha un'interfaccia facile da usare, che permette di trovare rapidamente ciò di cui hai bisogno.</li>
            </ul>
            <br>
            <!-- Terzo punto: Affidabilità e Comodità -->
            <li><strong>Affidabilità e Comodità</strong></li>
            <ul>
                <li>Il nostro servizio di e-commerce è progettato per offrire comodità e affidabilità, permettendoti di acquistare tutto ciò di cui hai bisogno per le tue esigenze elettriche comodamente da casa o dall'ufficio.</li>
            </ul>
        </ol>
    </div>
    <!-- Fine del blocco per il titolo e slogan della seconda card -->

</div>
<!-- Fine del contenitore principale -->

<!-- Sezione delle caratteristiche principali dell'azienda -->
<div class="contenitore_caratteristiche">

    <!-- Prima card con informazioni generali sull'azienda -->
    <div class="caratteristiche card2">
        <div class="card1">
            <p class="card_img">&#10084</p> <!-- Icona cuore -->
            <h4>BENVENUTI DA SERVIZIO ELETTRICO GABBIOLI S.R.L</h4>

            <p>Siamo un’azienda specializzata nella vendita di corpi <br> illuminanti e materiale elettrico, oltre
                che nella <br>
                realizzazione di impianti civili e industriali per la vostra sicurezza.
            </p>
        </div>
    </div>

    <!-- Seconda card con informazioni sui prodotti e servizi -->
    <div class="caratteristiche card2">
        <div class="card3">
            <p class="card_img">&#128170</p> <!-- Icona lampadina -->
            <h4>PRODOTTI E SERVIZI DI QUALITÀ</h4>
            <p>Presso il nostro negozio troverete una vasta gamma di corpi illuminanti <br> e materiale elettrico
                delle
                migliori <br> marche, garantendo sempre la massima affidabilità e sicurezza dei nostri prodotti.</p>
        </div>
    </div>

    <!-- Terza card con informazioni sull'esperienza dell'azienda -->
    <div class="caratteristiche card2">
        <div class="card3">
            <p class="card_img">&#127891</p> <!-- Icona trofeo -->
            <h4>ESPERIENZA NEL SETTORE</h4>
            <p>Con anni di esperienza nel settore e un team di esperti qualificati, <br> ci occupiamo di realizzare
                impianti <br> elettrici efficienti e sicuri, sia per abitazioni private che per aziende.</p>
        </div>
    </div>
</div>


<!-- Inizio del codice PHP per includere il footer -->
<?php
// Include il file 'footer.php' dalla directory definita da FRONT_END e DS
include(FRONT_END . DS . "footer.php");
?>
<!-- Fine del codice PHP -->