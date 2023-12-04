<?php

//get data dari form
$nama            = $_POST['nama'];
$jenis_kelamin   = $_POST['jenis_kelamin'];
$alamat          = $_POST['alamat'];
$id              = $_POST['id'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:8080/api_server/php_rest_api.php?function=Post_karyawan',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'id='.$id.'&nama='.$nama.'&jenis_kelamin='.$jenis_kelamin.'&alamat='.$alamat,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo "<script>alert('".$response."');window.location='index.php';</script>";
//echo $response;
?>