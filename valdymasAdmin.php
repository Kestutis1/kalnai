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

    function prisijungimas() {

// IDEA: kintamieji prisijungimo
    $email = mysqli_real_escape_string(getPrisijungimas(), $_POST['email']);
    $password = mysqli_real_escape_string(getPrisijungimas(), $_POST['slaptazodis']);

// IDEA: prisijungimo procesas
    $baze = "Select * from vartotojai where email = '$email' and password = '$password'";
    $result = mysqli_query(getPrisijungimas(), $baze);
    $row = mysqli_fetch_array($result);

  if ($row['email'] == $email && $row['password'] == $password) {
    echo "Prisijungėte";

    $_SESSION['username'] = $email;
    echo " ".$_SESSION['username'];

        } else {

// IDEA: Jai nepavyko arba bando užeiti svetimas
      unset($_SESSION['username']);
    $_SESSION['zinute'] = "Jums nepavyko prisijungti";
  header('location: admin.php');
}

}


// IDEA: Išaukiam prisijungimo funkciją
if (isset($_POST['submit'])){
      prisijungimas();
  }


// IDEA: Jai bando užeiti svetimas
  if (!isset($_SESSION['username'])) {
        header('location: admin.php');
  }
 ?>


</div>
<!-- IDEA: Pabaigiu Header col -->
</div>
<!-- IDEA: Pabaigiu Header row -->
</header>
<!-- IDEA: Pabaigiau Header konteinerį -->
<!-- ISJUNGIU meniu FLOAT -->
  <div class="float-fix"></div>

  <div class="jumbotron"></div>

<!-- IDEA: Pradedu Antraste -->
<div class="container">
  <div class="row align-items-center">
    <div class="col text-center atsistumiu">
      <h4> Duomenų valdymo panelė </h4>
    </div>
  </div>
</div>
</div>



<!-- IDEA: Uzdarom pagrindini puslapio Background col -->
</div>
<!-- IDEA: Uzdarom pagrindini Background row -->
</div>
<!-- IDEA: Uzdarom pagrindini Background container -->



<!-- IDEA:AJAX Čia pradedu administratoriaus valdymą -->
  <div class="row aukstis-500">

<!-- IDEA: Čia vertikalųs valdymo mygtukai kairėje -->
    <div class="col-2">
        <button type="button" name="button" class="btn btn-primary" onclick="pirkimuSuma()"> Pirkimų suma Eur. </button>
    </div>

<!-- IDEA: Čia horizantalus duomenų išvedimas -->
    <div id="isvestis" class="col-8 duomenys">
    </div>

<!-- IDEA: Čia vertikalųs valdymo mygtukai dešnėje -->
    <div class="col-2">
        <button type="button" name="button" class="btn btn-primary" onclick=""> Pirkėjų vardai </button>
    </div>

  </div>


<!-- IDEA: Pabaigiau valdymo panelę -->
<!-- IDEA: uzdarau main container -->


<?php include 'footer.php'; ?>
