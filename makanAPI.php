<?php
//ambil data json dari file
$content = file_get_contents("http://localhost:8070/web1/RestApi/GetJawdalDokter.php");

//mengubah standar encoding
// $content = utf8_encode($content);

//mengubah data json menjadi data array asosiatif
$result = json_decode($content, true);
// var_dump($result);
// die();

// looping data menggunakan foreach
foreach ($result as $value) {

    echo $value[3]["kode_dokter"];
    echo $value[3]['jam_mulai'];
    echo $value[3]['jam_selesai'];
    // var_dump($value[3]);
    // die();
}
