<?php include 'header.php'; ?>

  <!-- IDEA: Puslapio Background -->
  <div class="container-fluid">
    <div class="row">
      <div class="col box-wraper">

        <!-- IDEA: Pradedu meniu -->
        <header class="container-fluid no-gutters">
          <div class="row meniu">
            <div class="col">

              <?php include 'nav.php'; ?>
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
          <h2 class="display-4">Susisiekite su mumis</h2>
          <p class="lead">Jai turite klausymų mielai į juos atsakysime.</p>
          <hr class="my-4">
          <p>Galime suteikti visą papildomą jus dominančią informaciją apie poilsį kalnuose.</p>
        </div>

        <!-- IDEA: Pradedu Antraste su Mygtuku -->
        <div class="container">
          <div class="row">
            <div class="col text-center">

              <!-- IDEA: Ikeliu forma -->
              <form name="kontaktai" action="poKontaktu.php" method="post">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">E-paštas</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="El. paštas"
                        required
                        oninvalid="this.setCustomValidity('Šį lauką reikia užpildyti')"
                        oninput="this.setCustomValidity('')"/>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="idėti vardą">Vardas</label>
                    <input type="text" name="vardas" class="form-control" id="inputVardas" placeholder="Vardas"
                        required
                        oninvalid="this.setCustomValidity('Šį lauką reikia užpildyti')"
                        oninput="this.setCustomValidity('')"/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Adresas</label>
                  <input type="text" name="gyvenamoji" class="form-control" id="inputAddress" placeholder="Jūsų gyvenamoji vieta"/>
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Kalnų kurorto adresas</label>
                  <input type="text" name="kurortas" class="form-control" id="inputAddress2" placeholder="Vietovė kur planuojate vykti"/>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Miestas</label>
                    <input type="text" name="miestas" class="form-control" id="inputCity"/>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">Šalis</label>
                    <input type="text" id="inputState" name="salis" class="form-control"/>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Pašto kodas</label>
                    <input type="text" name="pKodas" class="form-control" id="inputZip"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">


             <input  onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');"
                    id="field_terms" type="checkbox" required name="salygos">
                <label>Susipažinau su sąlygomis ir taisyklėmis: </label>
                <button type="button" class="taisykles" data-toggle="modal" data-target="#exampleModalLong"> Taisyklės </button>

          <!--bootstrap Modal taisyklės-->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Sutinkate patikėti asmeninius duomenis </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> uždaryti </button>
                  </div>
                </div>
              </div>
            </div>
            <!--Pabaigiam bootstrap Modal taisyklės-->

                  </div>
                </div>
                <button type="submit" name="submitas" class="btn btn-primary">Siūsti</button>
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
<script type="text/javascript">
    document.getElementById("field_terms").setCustomValidity("Pirma sutikite mums patikėti ir tavrkyti savo asmeninius duomenis");
</script>
<?php include 'footer.php'; ?>
