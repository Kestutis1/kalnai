<?php
// include '../db.php';

 $method = $_POST['Method'];
 // $method();

$result = array(
      'vardas' => 'Kestutis',
      'pavarde' => 'Morkevicius',
      'amžius' => '30'
);

$colour = array(
  'vardas' => 'miaumiau',
  'pavarde' => 'lili',
  'amžius' => 'ahaha'
);

// if($_POST['method'] == 'vardai')
//   echo json_encode($result);
//
// if($_POST['method'] == 'vardai2')
//   echo json_encode($result);
//
//   if($_POST['method'] == 'vardai3')
//     echo json_encode($colour);
// exit();


 if($_POST) {

  if ($method == 'vardai') {
    echo json_encode(array('content'=>$result['vardas'], 'colour'=>$colour['vardas'] ););

  }
 elseif ($method == 'vardai2') {
     echo json_encode(array('content'=>$result['pavarde'], 'colour'=>$colour['pavarde'] ););
 }
 elseif ($method == 'vardai3') {
     echo json_encode(array('content'=>$result['amžius'], 'colour'=>$colour['amžius'] ););

   }
 }





// function vardai() {
//         echo 'pavyko';
//          }

// function vardai2() {
//
//   $visikontaktai = getKontaktai();
//   while ( $kontaktai = mysqli_fetch_assoc($visikontaktai))
//    {
//
//     echo $kontaktai['registracija']." ";
//     echo $kontaktai['E-paštas']." ";
//     echo $kontaktai['Vardas']." ";
//     echo $kontaktai['Adresas']." ";
//     echo $kontaktai['Kalnų-kurorto-adresas']." ";
//     echo $kontaktai['Miestas']." ";
//     echo $kontaktai['Šalis']." ";
//     echo $kontaktai['Pašto-kodas']."<br />";
//
//         }
//    }


// function vardai3() {
//         echo 'pavyko3';
//    }

  ?>
