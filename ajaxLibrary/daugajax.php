<?php
include '../db.php';
 $method = $_POST['Method'];
 $method();
$result = array (
      'vardas' => 'Kestutis',
      'pavarde' => 'Morkevicius',
      'spalva' => 'green'
);
if($_POST) {
 if ($method == 'vardai') {
    echo $result['vardas'];
 }
elseif ($method == 'vardai2') {
    echo $result['pavarde'];
}
elseif ($method == 'vardai3') {
    echo $result['spalva'];
  }
}
function vardai() {
        echo 'pavyko';
         }
function vardai2() {
  $visikontaktai = getKontaktai();
  while ( $kontaktai = mysqli_fetch_assoc($visikontaktai))
   {
    echo $kontaktai['registracija']." ";
    echo $kontaktai['E-paštas']." ";
    echo $kontaktai['Vardas']." ";
    echo $kontaktai['Adresas']." ";
    echo $kontaktai['Kalnų-kurorto-adresas']." ";
    echo $kontaktai['Miestas']." ";
    echo $kontaktai['Šalis']." ";
    echo $kontaktai['Pašto-kodas']."<br />";
        }
   }
function vardai3() {
        echo 'pavyko3';
   }
  ?>
