<?php

//$pelajar = [
//  [
//    "nama" => "nurindah",
//    "nrp"  => " 08967 ",
//    "email" => "nurindah@gmail.com"
//    ],
//    [
//        "nama" => "vitasari",
//        "nrp"  => " 00986 ",
//        "email" => "vitasari@gmail.com"
//       
//   ]
//
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
$db = $dbh->prepare('SELECT * FROM pelajar');
$db->execute();
$pelajar = $db->fetchAll(PDO::FETCH_ASSOC);

$data=json_encode($pelajar);
echo $data;

?>