<?php
// Includi il file di configurazione principale per impostazioni e costanti
require_once("../risorse/config.php");

// Includi il file dell'intestazione del sito
include(FRONT_END . DS . 'header.php');
?>

<?php
// Includi il file della barra laterale (sidebar) per la navigazione
include('sidebar.php');
?>

<style>
    .immagine_sfondo_moderno {
        background-image: url(../risorse/immagini/immagini_tante/tamara-bianca-singola1.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        color: white;
        padding: 5%;
    }

    .immagine_sfondo_classico {
        background-image: url(../risorse/immagini/immagini_tante/classico3.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        color: white;
        padding: 5%;
    }

    .immagine_sfondo_esterno {
        background-image: url(../risorse/immagini/immagini_tante/esterno7.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        color: white;
        padding: 5%;
    }

    .immagine_sfondo_bambini {
        background-image: url(../risorse/immagini/immagini_tante/bambini6.webp);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        color: white;
        padding: 5%;
    }

    .immagine_sfondo_vintage {
        background-image: url(../risorse/immagini/immagini_tante/vintage2.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        color: white;
        padding: 4%;
    }

    .immagine_sfondo_ventilatori {
        background-image: url(../risorse/immagini/immagini_tante/ventilatore5.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        color: white;
        padding: 4%;
    }

    .categorie{
        border-radius: 100px;
        width: 90%;
        margin: auto;
    }

    .contenitore_card {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .card_best {
        box-shadow: -1rem 0 3rem black;
        background-color: black;
        color: white;
        margin: 4%;
        position: relative;
    }

    .card_best_moderno:hover {
        box-shadow: -1rem 0 3rem aqua;
        transition: .5s;
    }

    .card_best_classico:hover {
        box-shadow: -1rem 0 3rem gold;
        transition: .5s;
    }

    .card_best_esterno:hover {
        box-shadow: -1rem 0 3rem green;
        transition: .5s;
    }

    .card_best_bambini:hover {
        box-shadow: -1rem 0 3rem orange;
        transition: .5s;
    }

    .card_best_vintage:hover {
        box-shadow: -1rem 0 3rem brown;
        transition: .5s;
    }

    .card_best_ventilatori:hover {
        box-shadow: -1rem 0 3rem lightskyblue;
        transition: .5s;
    }

    .card_best_aggiunta:hover {
        box-shadow: -1rem 0 3rem white;
        transition: .5s;
    }



    .object {
        font-size: 40px;
    }

    .btn-prodotti{
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translate(-50%);
    }

    /* css per il carousel che gira */

    .container {
        position: relative;
        width: 320px;
        margin: 100px auto 0 auto;
        perspective: 10000px;
        align-items: center;
    }

    .carousel {
        position: absolute;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        animation: rotate360 35s infinite forwards linear;
    }

    .carousel__face {
        position: absolute;
        width: 300px;
        height: 187px;
        top: 20px;
        left: 10px;
        right: 10px;
        background-size: cover;
        display: flex;
        border-radius: 50px;
        text-align: center;
        border-radius: 50px;
    }

    .col_ecommerce{
        border-radius: 50px;
    }

    /* Colori di sfondo personalizzati per ogni faccia del carosello */
    .verde-lime {
    background-color: #32CD32; /* LimeGreen */
    width: 100%;
}

.giallo {
    background-color: #FFD700; /* Gold */
    width: 100%;
}

.arancione-rosso {
    background-color: #FF6347; /* Tomato */
    width: 100%;
}

.rosa-profondo {
    background-color: #FF69B4; /* HotPink */
    width: 100%;
}

.ciano {
    background-color: #E0FFFF; /* LightCyan */
    width: 100%;
}

.oro {
    background-color: #DAA520; /* GoldenRod */
    width: 100%;
}

.porpora {
    background-color: #6A5ACD; /* SlateBlue */
    width: 100%;
}

.azzurro-vivo {
    background-color: #87CEEB; /* SkyBlue */
    width: 100%;
}

.verde-chiaro {
    background-color: #98FB98; /* PaleGreen */
    width: 100%;
}



    span {
        margin: auto;
        font-size: 2rem;
    }

    /* Posizionamento delle facce del carosello in 3D */
    .carousel__face:nth-child(1) {
        transform: rotateY(0deg) translateZ(430px);
    }

    .carousel__face:nth-child(2) {
        transform: rotateY(40deg) translateZ(430px);
    }

    .carousel__face:nth-child(3) {
        transform: rotateY(80deg) translateZ(430px);
    }

    .carousel__face:nth-child(4) {
        transform: rotateY(120deg) translateZ(430px);
    }

    .carousel__face:nth-child(5) {
        transform: rotateY(160deg) translateZ(430px);
    }

    .carousel__face:nth-child(6) {
        transform: rotateY(200deg) translateZ(430px);
    }

    .carousel__face:nth-child(7) {
        transform: rotateY(240deg) translateZ(430px);
    }

    .carousel__face:nth-child(8) {
        transform: rotateY(280deg) translateZ(430px);
    }

    .carousel__face:nth-child(9) {
        transform: rotateY(320deg) translateZ(430px);
    }

    /* Animazione che fa ruotare il carosello in modo continuo */
    @keyframes rotate360 {
        from {
            transform: rotateY(0deg);
        }

        to {
            transform: rotateY(-360deg);
        }
    }
</style>
<!-- Inizio della sezione per l'elenco delle categorie di prodotti -->
<div class="list_ecommerce">
    <?php mostraCategorie() ?>
</div>
<!-- Fine della sezione per l'elenco delle categorie di prodotti -->

<!-- Inizio della sezione per il titolo della categoria e la descrizione del negozio -->
<div class="categorie">
    <!-- Titolo della categoria corrente -->
    <h5 class="card-title1"><?php mostra_nome_cat();  ?></h5>
</div>
<!-- Fine della sezione per il titolo della categoria e la descrizione del negozio -->

<!-- Inizio della sezione per visualizzare i prodotti della categoria corrente -->
<div class="contenitore_card">
    <!-- Richiama la funzione paginaCategoria() per mostrare i prodotti della categoria corrente -->
    <?php paginaCategoria() ?>
</div>
<!-- Fine della sezione per visualizzare i prodotti della categoria corrente -->


<!-- Sezione per il carosello animato dei servizi -->
<h1 class="text-center" style="padding: 5%;">I nostri servizi sono la tua garanzia</h1>
<div class="carosello-animato" style="margin-bottom:700px">

    <div class="container">
        <!-- Inizio del carosello -->
        <div class="carousel">
            <!-- Ogni faccia del carosello rappresenta un servizio -->
            <div class="carousel__face ">
                <div class="col_ecommerce giallo">
                    <p class="object"> &#128257</p>
                    <h3>Assortimento Completo</h3>
                </div>
            </div>
            <div class="carousel__face">
                <div class="col_ecommerce arancione-rosso">
                    <p class="object"> ⏩</p>
                    <h3>Consegna <br> Veloce</h3>
                </div>
            </div>
            <div class="carousel__face">
                <div class="col_ecommerce verde-lime">
                    <p class="object"> 🆓</p>
                    <h3>Spedizione <br> Gratuita</h3>
                </div>
            </div>
            <div class="carousel__face">
                <div class="col_ecommerce rosa-profondo">
                    <p class="object">🧑‍💻</p>
                    <h3>Assistenza <br> Immediata</h3>
                </div>
            </div>
            <div class="carousel__face">
                <div class="col_ecommerce ciano">
                    <p class="object">🛍️</p>
                    <h3>Ordini <br> Puntuali</h3>
                </div>
            </div>
            <div class="carousel__face">
                <div class="col_ecommerce oro">
                    <p class="object">🛣️</p>
                    <h3>Tracciamento <br> Facile</h3>
                </div>
            </div>
            <div class="carousel__face">
                <div class="col_ecommerce porpora">
                    <p class="object">📦</p>
                    <h3>Imballaggi <br> Sicuri</h3>
                </div>
            </div>
            <div class="carousel__face">
                <div class="col_ecommerce azzurro-vivo">
                    <p class="object">⭐</p>
                    <h3>Soddisfazione Garantita</h3>
                </div>
            </div>
            <div class="carousel__face">
                <div class="col_ecommerce verde-chiaro">
                    <p class="object">👩‍💻</p>
                    <h3>Servizio <br> Eccellente</h3>
                </div>
            </div>
        </div>
        <!-- Fine del carosello -->
    </div>
</div>
<!-- Fine della sezione per il carosello animato dei servizi -->



<?php
// Include il file del piè di pagina del sito
include(FRONT_END . DS . "footer.php");
?>