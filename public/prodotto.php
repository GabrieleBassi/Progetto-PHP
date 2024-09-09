<?php
// Include il file di configurazione principale per impostazioni e costanti
require_once("../risorse/config.php");

// Include il file dell'intestazione del sito
include(FRONT_END . DS . 'header.php');
?>

<?php
// Include il file della barra laterale per la navigazione
include('sidebar.php');
?>
<!-- inzio css per il singolo prodotto -->

<style>
  .card-img-top {
    width: 30rem;
  }

  .small {
    margin-right: 30px;
  }

  .box_qualità {
    margin: auto;
    width: 50%;

  }

  /* Stili per i contenitori e le card alle varie risoluzioni */
  @media(max-width:1000px) {
    .card-img-top {
      width: 20rem;
    }

    .box_qualità {

      width: 100%;
    }
  }

  .descrizione_sotto_prodotto{
    padding: 5%;
    width: 90%;
    margin: auto;
  }

  h3{
    color: red;
    text-align: center;
  }
</style>

<!-- Sezione per l'elenco dei prodotti -->
<div class="list_ecommerce">
  <?php mostraCategorie() ?>
</div>

<?php
// Recupera l'ID del prodotto dalla query string
$id_pdt = $_GET['id'];

// Esegue una query per selezionare i dettagli del prodotto specificato dall'ID
$singlePdt = query("SELECT * FROM ricerca WHERE id_pdt  = {$id_pdt}");

// Conferma che la query è stata eseguita correttamente
conferma($singlePdt);

// Estrae e visualizza i dettagli del prodotto
while ($row = fetch_array($singlePdt)) :
?>
  <!-- Struttura della scheda del prodotto -->
  <div class="box_prodotto" style="margin-top: 8%;">
    <div class="card_prodotto" style="text-align:left; display:flex; justify-content:space-around; flex-wrap:wrap; padding:5%;">
      <!-- Immagine del prodotto -->
      <img class="card-img-top" src="../risorse/immagini/immagini_tante/<?php echo $row['immagine']; ?>" alt="">
      <div class="card-body-prodotto">
        <!-- Titolo e prezzo del prodotto -->
        <h4 class="card-title text-center mt-5" style="font-size: 28px;"><?php echo $row['nome_pdt']; ?></h4>
        <h4>€ <?php echo $row['prezzo']; ?></h4>
        <br>
        <hr>
        <!-- Descrizione breve del prodotto -->
        <p class="card-text-prodotto"><?php echo $row['descr_breve']; ?></p>
        <hr>
        <!-- Pulsanti per l'acquisto e l'aggiunta al carrello -->
        <div style="display: flex; justify-content:center;">
          <a href="carrello.php?add=<?php echo $row['id_pdt']; ?>">
            <button type="button" class="btn btn-primary ">Acquista</button>
          </a>
        </div>
        <hr>
        <!-- Sezione per condividere il prodotto sui social media -->
        <h5>Condividi il prodotto</h5>
        <a href="#"><img width="48" height="48" src="https://img.icons8.com/fluency/48/facebook-new.png" alt="facebook-new"></a>
        <a href="#"><img width="48" height="48" src="https://img.icons8.com/fluency/48/instagram-new.png" alt="instagram-new"></a>
        <a href="#"><img width="48" height="48" src="https://img.icons8.com/color/48/twitter--v1.png" alt="twitter--v1"></a>
      </div>
    </div>
    <!-- Sezione per la descrizione dettagliata del prodotto -->
    <div class="card_prodotto card-outline-secondary my-4">
      <div class="descrizione_sotto_prodotto">
        <p><?php echo $row['info_dettagliate']; ?></p>
      </div>
    </div>
  </div>
  <!-- Fine della scheda del prodotto -->
<?php endwhile; ?>

<!-- Sezione per la qualità delle spedizioni -->
<h1 style="text-align: center; color:red;">La qualità delle spedizioni</h1>

<div style="flex-wrap:wrap;" class="mt-5 p-5 box_qualità">
  <!-- Inizio dell'accordion per i dettagli delle spedizioni -->
  <div id="accordion">
    <!-- Sezione per fornitori affidabili -->
    <div class="card">
      <div class="card-header" id="headingOne" style="background-color: transparent; border:2px solid violet">
        <h5 class="mb-0">
          <button class=" btn text-decoration-none" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Fornitori Affidabili e Selezionati
          </button>
        </h5>
      </div>
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body2" style="padding: 5%;background:black; color:white">
          La qualità di una spedizione inizia dai fornitori. Collaboriamo solo con fornitori altamente affidabili, che rispettano rigorosi standard di qualità e puntualità. Ogni partner è selezionato attraverso un processo meticoloso, garantendo che ogni prodotto sia all'altezza delle aspettative dei nostri clienti.
        </div>
      </div>
    </div>
    <!-- Sezione per imballaggi sicuri e sostenibili -->
    <div class="card">
      <div class="card-header" id="headingTwo" style="background-color: transparent; border:2px solid violet">
        <h5 class="mb-0">
          <button class="btn  text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Imballaggi Sicuri e Sostenibili
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body2" style="padding: 5%; background:black; color:white">
          La protezione del prodotto durante il trasporto è una priorità. Utilizziamo imballaggi robusti e innovativi, progettati per salvaguardare il contenuto da eventuali danni. Inoltre, ci impegniamo per la sostenibilità, scegliendo materiali ecologici e riciclabili per ridurre l'impatto ambientale delle nostre spedizioni.
        </div>
      </div>
    </div>
    <!-- Sezione per rapidità e precisione nella consegna -->
    <div class="card">
      <div class="card-header" id="headingThree" style="background-color: transparent; border:2px solid violet">
        <h5 class="mb-0">
          <button class="btn text-decoration-none collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Rapidità e Precisione nella Consegna
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body2" style="padding: 5%; background:black; color:white">
          La velocità è fondamentale per la soddisfazione del cliente. Offriamo opzioni di spedizione veloce, assicurando che gli ordini arrivino nei tempi previsti. Monitoriamo costantemente ogni spedizione, fornendo aggiornamenti in tempo reale per garantire una consegna precisa e puntuale.
        </div>
      </div>
    </div>
  </div>
  <!-- Fine dell'accordion -->
</div>

<?php
// Include il file del piè di pagina del sito
include(FRONT_END . DS . "footer.php");
?>