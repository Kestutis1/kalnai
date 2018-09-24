<?php include 'header.php'; ?>
  <!-- IDEA: Puslapio Background -->
  <div class="container-fluid">
    <div class="row">
      <div class="col box-wraper">

        <!-- IDEA: Pradedu meniu -->
        <header class="container-fluid no-gutters">
          <div class="row meniu">
            <div class="col">

              <?php include 'nav.php';  ?>
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
          <h2 class="display-4"> Aministratoriaus puslapis </h2>
          <p class="lead"> Šis puslapis skirtyas valdyti svetainę.</p>
          <hr class="my-4">
        </div>

        <!-- IDEA: Pradedu Antraste su Mygtuku -->
        <div class="container">
          <div class="row">
            <div class="col text-center aukstis-200 admin">

              <!-- IDEA: Ikeliu forma -->
              <form name="kontaktai" action="valdymasAdmin.php" method="post">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4"> E-paštas </label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="El. paštas"
                        required
                        oninvalid="this.setCustomValidity('Šį lauką reikia užpildyti')"
                        oninput="this.setCustomValidity('')"/>
                  </div>
                  <div class="form-group col-md-6">
                    <?php


                    if (isset($_SESSION['zinute'])) {
                      echo $_SESSION['zinute'];
                      unset($_SESSION['zinute']);
                    }

                     ?>



                    <label for="idėti vardą"> Slaptažodis </label>
                    <input type="password" name="slaptazodis" class="form-control" id="inputVardas" placeholder="Slaptazodis"
                        required
                        oninvalid="this.setCustomValidity('Šį lauką reikia užpildyti')"
                        oninput="this.setCustomValidity('')"/>
                  </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary"> Prisijungti </button>
              </form>
            <!-- IDEA: Užbaigiu forma -->

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

<?php include 'footer.php'; ?>
