<?php
include '../db.php';
 $method = $_POST['Method'];
 $method();
$result = array (
      'vardas' => 'Kestutis',
      'pavarde' => 'Morkevicius',
      'spalva' => 'green'
);
// if($_POST) {
//  if ($method == 'vardai') {
//     echo $result['vardas'];
//  }
// elseif ($method == 'vardai2') {
//     echo $result['pavarde'];
// }
// elseif ($method == 'vardai3') {
//     echo $result['spalva'];
//   }
// }
function vardai() {

  $SQL = "SELECT * FROM pirkeju vartotojo_vardas";
  $rezultatas = mysqli_query( getPrisijungimas(), $SQL);
  while ( $varduMasyvas = mysqli_fetch_assoc($rezultatas))
      {
        echo $varduMasyvas['vartotojo_vardas']."<br /> ";
      }
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
        $SQL = "SELECT * FROM pirkeju vartotojo_pavardė";
        $rezultatai = mysqli_query( getPrisijungimas(), $SQL);
        while ($pavardziuMasyvas = mysqli_fetch_assoc($rezultatai))
        {
          echo $pavardziuMasyvas['vartotojo_pavardė']."<br />";
        }
   }
  ?>
