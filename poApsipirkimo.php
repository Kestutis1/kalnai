<?php include 'header.php'; ?>

  <!-- IDEA: Puslapio Background -->
  <div class="container-fluid">
    <div class="row">
      <div class="col box-wraper">

        <!-- IDEA: Pradedu meniu -->
        <header class="container-fluid no-gutters">
          <div class="row meniu">
            <div class="col">

            <?php

                include 'nav.php';


            function sukurtiVartotoja() {

              $vardas = mysqli_real_escape_string(getPrisijungimas(), $_POST['vardas']);
              $email = mysqli_real_escape_string(getPrisijungimas(), $_POST['email']);
              $telefonas = mysqli_real_escape_string(getPrisijungimas(), $_POST['telefonas']);
              $komentaras = mysqli_real_escape_string(getPrisijungimas(), $_POST['komentaras']);
              $pavarde = mysqli_real_escape_string(getPrisijungimas(), $_POST['pavarde']);
              $dienu = mysqli_real_escape_string(getPrisijungimas(), $_POST['dienu']);
              $asmenu = mysqli_real_escape_string(getPrisijungimas(), $_POST['asmenu']);
              $kaina = mysqli_real_escape_string(getPrisijungimas(), $_POST['kaina']);
              $viezb = mysqli_real_escape_string(getPrisijungimas(), $_POST['viezbutis']);

            $manoSQL = "INSERT INTO `pirkeju` (`id`, `vartotojo_vardas`, `vartotojo_pavardė`, `komentaras`, `e_pastas`, `telefonas`, `dienu`, `asmenu`, `kaina`, `viezbutis`) VALUES (NULL, '$vardas', '$pavarde', '$komentaras', '$email', '$telefonas', '$dienu', '$asmenu', '$kaina', '$viezb'); ";
            $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
                  }

                if (isset($_POST['submitted'])){
                      sukurtiVartotoja();
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

        <!-- IDEA: Pradedu Antraste  -->
        <div class="container">
          <div class="row align-items-center aukstis-300">
            <div class="col ">
            <h4> Sekmingai užsisakėte kelionę. <br /> Męs su jumis susieksime 24 valandų laikotarpyje. </h4>
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

<?php include_once 'footer.php'; ?>
