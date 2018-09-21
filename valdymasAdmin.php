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



function prisijungimas()

{


$email = mysqli_real_escape_string(getPrisijungimas(), $_POST['email']);
$password = mysqli_real_escape_string(getPrisijungimas(), $_POST['slaptazodis']);

$baze = "Select * from vartotojai where email = '$email' and password = '$password'";
$result = mysqli_query(getPrisijungimas(), $baze);

$row = mysqli_fetch_array($result);
if ($row['email'] == $email && $row['password'] == $password) {
    echo "Prisijungėte";
    $_SESSION['username'] = $email;
    echo " ".$_SESSION['username'];
} else {
  unset($_SESSION['username']);
    $_SESSION['zinute'] = "Jums nepavyko prisijungti";
  header('location: admin.php');
}

}

if (isset($_POST['submit'])){
      prisijungimas();
  }
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
<div class="float-fix"> </div>

<div class="jumbotron">

</div>

<!-- IDEA: Pradedu Antraste su Mygtuku -->
<div class="container">
<div class="row align-items-center">
<div class="col text-center atsitumiu aukstis-200">


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
