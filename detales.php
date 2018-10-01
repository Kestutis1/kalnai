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
          <h2 class="display-4">Susisiekite su mumis</h2>
          <p class="lead">Jai turite klausymų mielai į juos atsakysime.</p>
          <p>Galime suteikti visą papildomą jus dominančią informaciją apie poilsį kalnuose.</p>
        </div>

        <!-- IDEA: Pradedu Antraste su Mygtuku -->
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h4>Užpildykite trūkstamus laukus.</h4>
              <!-- IDEA: Ikeliu forma -->
              <form action="poApsipirkimo.php" method="post">
                <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="inputAddress">Telefono numeris</label>
                    <input type="text" class="form-control" name="telefonas" id="telefonas" maxlength="12" required placeholder="+370"
                      oninvalid="this.setCustomValidity('Šį lauką reikia užpildyti')"
                      oninput="this.setCustomValidity('')"/>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputEmail4">E-paštas</label>
                    <input type="email" class="form-control" name="email" id="inputEmail4" maxlength="50" required placeholder="El. paštas"
                      oninvalid="this.setCustomValidity('Šį lauką reikia užpildyti')"
                      oninput="this.setCustomValidity('')"/>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="idėti vardą">Vardas</label>
                    <input type="text" class="form-control" name="vardas" id="klientoVardas" maxlength="50" required placeholder="Vardas"/>
                  </div>

                <div class="form-group col-md-6">
                  <label for="idėti pavarde">Pavardė</label>
                  <input type="text" class="form-control" name="pavarde" id="klientoPavardė" maxlength="50" required placeholder="Pavardė"
                      oninvalid="this.setCustomValidity('Šį lauką reikia užpildyti')"
                      oninput="this.setCustomValidity('')"  />
                </div>
              </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <?php $viezbutis= $_GET['viezb']; ?>
                    <input type="hidden" name="viezbutis" maxlength="100" value="<?php echo $viezbutis; ?>">
                    <h4> <?php echo $viezbutis; ?> </h4><br />
                    <button class="btn btn-primary" type="button" onclick="getDienuSkaicius();" >
                      Pasirinkite asmenų skaičių.
                    </button>

                    <select name="asmenu" id="listZmoniuSkaiciaus" onchange = getDienuSkaicius();>
                        <option value="1">1</option>
                        <option value="1.5">2</option>
                        <option value="2">3</option>
                        <option value="2.5">4</option>
                        <option value="3">5</option>
                    </select>
                  </div>

                <div class="form-group col-md-6">
                    <h4 id="viezbucioKaina">Atostogų kaina
                      <?php
                      $kainaKintamasis = $_GET['kaina'];
                      $eurai = "eurai";
                        echo $kainaKintamasis. " " .$eurai ;
                      ?> </h4> <br />

                    <button class="btn btn-primary" type="button" onclick="getDienuSkaicius();" >
                      Pasirinkite kelionės dienų skaičių.
                    </button>

                    <select name="dienu" id="list" onchange = getDienuSkaicius();>
                        <option value="1">1</option>
                        <option value="1.5">2</option>
                        <option value="2">3</option>
                        <option value="2.5">4</option>
                        <option value="3">5</option>
                        <option value="3.5">6</option>
                        <option value="4">7</option>
                        <option value="4.5">8</option>
                        <option value="5">9</option>
                        <option value="5.5">10</option>
                        <option value="6">11</option>
                        <option value="6.5">12</option>
                        <option value="7">13</option>
                        <option value="7.5">14</option>
                    </select>
                  <input type="hidden" id="siusimKaina" maxlength="11" name="kaina" />
                </div>

                <div class="form-group col-md-12">
                  <label for="komentaras" >
                    Čia galite įrašyti savo komentarą.
                  </label>
                  <input type="text" class="form-control" maxlength="500" name="komentaras" placeholder=""/>
                  </div>
                  <div class="form-check col-md-12">
                    <button type="submit" name="submitted" class="btn btn-primary">Patvirtinti užsakymą</button>
                </div>
               </div>
              </form>
            <!-- IDEA: Užbaigiu forma -->
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
</div>
  <!-- IDEA: Pabaigiau specery pradedu footer -->
<!-- IDEA: uzdarau main container -->

<script>
function getDienuSkaicius() {
    var dienuSkaicius = document.getElementById("list").value;
    var zmoniuSkaiciaus = document.getElementById("listZmoniuSkaiciaus").value;
    var kaina = "<?php echo $kainaKintamasis; ?>";
    var kainaPadauginta = kaina * dienuSkaicius * zmoniuSkaiciaus ;
  document.getElementById('viezbucioKaina').innerHTML ='Atostogų kaina '+ kainaPadauginta +' eurai' ;
  document.getElementById('siusimKaina').value = kainaPadauginta;
}
</script>

<?php include('footer.php') ?>
