<?php

include 'db.php';

 // function getKkontaktai() {
 //        $manoSQL = "SELECT * FROM kontaktai";
 //       $rezultatai = mysqli_query( getPrisijungimas() , $manoSQL);
 //       return $rezultatai;
 //
 //   }
 //
 //      $visikontaktai = getKkontaktai();
 //       while ( $kontaktai = mysqli_fetch_assoc($visikontaktai) )
 //       {
 //        echo $kontaktai['registracija']." ";
 //         echo $kontaktai['E-paštas']." ";
 //         echo $kontaktai['Vardas']." ";
 //        echo $kontaktai['Adresas']." ";
 //        echo $kontaktai['Kalnų-kurorto-adresas']." ";
 //         echo $kontaktai['Miestas']." ";
 //         echo $kontaktai['Šalis']." ";
 //         echo $kontaktai['Pašto-kodas']."<br />"; }

// function getKainuSuma() {
//     // $maSQL = "SELECT * FROM pirkeju";
//     $manoSQL = "SELECT * FROM pirkeju";
//     $rezultatai2 = mysqli_query( getPrisijungimas() , $manoSQL);
//
//     return $rezultatai2;
//
// }
//
// $visosKainos = getKainuSuma();
// while ( $kaina = mysqli_fetch_assoc($visosKainos) )
// {
//  echo $kaina['kaina']." ";
// }

function getKainuSuma() {

    $manoSQL = "SELECT kaina FROM pirkeju";
    $rezultatai2 = mysqli_query( getPrisijungimas() , $manoSQL);
    return $rezultatai2;

}

$visosKainos = getKainuSuma();
while ( $kaina = mysqli_fetch_assoc($visosKainos) )
{
  $plius += $kaina['kaina'];
}
echo $plius . " Eurai";
?>
