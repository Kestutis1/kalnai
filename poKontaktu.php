<?php include('header.php') ?>

  <!-- IDEA: Puslapio Background -->
  <div class="container-fluid">
    <div class="row">
      <div class="col box-wraper">

        <!-- IDEA: Pradedu meniu -->
        <header class="container-fluid no-gutters">
          <div class="row meniu">
            <div class="col">

            <?php

                include('nav.php');
                include('db.php');

            function kontaktai() {

              $vardas = mysqli_real_escape_string(getPrisijungimas(), $_POST['vardas']);
              $email = mysqli_real_escape_string(getPrisijungimas(), $_POST['email']);
              $gyvenamoji = mysqli_real_escape_string(getPrisijungimas(), $_POST['gyvenamoji']);
              $kurortas = mysqli_real_escape_string(getPrisijungimas(), $_POST['kurortas']);
              $miestas = mysqli_real_escape_string(getPrisijungimas(), $_POST['miestas']);
              $salis = mysqli_real_escape_string(getPrisijungimas(), $_POST['salis']);
              $pKodas = mysqli_real_escape_string(getPrisijungimas(), $_POST['pKodas']);

            $manoSQL = "INSERT INTO `kontaktai` (`registracija`, `E-paštas`, `Vardas`, `Adresas`, `Kalnų-kurorto-adresas`, `Miestas`, `Šalis`, `Pašto-kodas`) VALUES (NULL, '$email', '$vardas', '$gyvenamoji', '$kurortas', '$miestas', '$salis', '$pKodas'); ";
            $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
                  }

                  if (isset($_POST['submitas'])){
                        kontaktai();
                    }
            ?>
         <!-- IDEA: Pabaigem meniu -->

            </div>
            <!-- IDEA: Pabaigiu Header col -->
          </div>
          <!-- IDEA: Pabaigiu Header row -->
        </header>
        <!-- IDEA: Pabaigiau Header konteinerį -->
        <!-- ISJUNGIU meniu FLOAT -->
        <div class="float-fix"> </div>

        <div class="jumbotron">
          <h2 class="display-4">Sveikiname puikus pasirinkimas</h2>
          <p class="lead">Jai turite klausymų mielai į juos atsakysime.</p>
          <hr class="my-4">
          <p>Galime suteikti visą papildomą jus dominančią informaciją apie poilsį kalnuose.</p>
        </div>

        <!-- IDEA: Pradedu Antraste su Mygtuku -->
        <div class="container">
          <div class="row align-items-center">
            <div class="col text-center atsitumiu aukstis-200">
            <h4> Sekmingai parašėte mums į kontaktus. <br /> Męs su jumis susieksime 24 valandų laikotarpyje. </h4>
            <br /><button class="btn btn-primary" type="button" onclick= laikas();>
                 Dabartinė data ir laikas.</button>
             <h4 id="demo"></h4>
            </div>
            </div>
         </div>
       </div>
      <!-- IDEA: Uzdarom pagrindini puslapio Background col -->
    </div>
    <!-- IDEA: Uzdarom pagrindini Background row -->
  </div>
  <!-- IDEA: Uzdarom pagrindini Background container -->
  <!-- IDEA: Antrste su mygtuku pabaigta -->

  <!-- IDEA: Isidedu specery -->
  <div class="row aukstis-100">
    <div class="col">
    </div>
  </div>
  <!-- IDEA: Pabaigiau specery pradedu footer -->
<!-- IDEA: uzdarau main container -->

<?php include('footer.php') ?>
