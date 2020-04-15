<?php

$con = new PDO('mysql:host=localhost;dbname=test','root','');
// Ambil data ID Provinsi yang dikirim via ajax post
$id_kab = $_POST['kabupaten'];

// Buat query untuk menampilkan data kota dengan provinsi tertentu (sesuai yang dipilih user pada form)
$sql = $con->prepare("SELECT * FROM districts WHERE regency_id = '".$id_kab."' ORDER BY name");
$sql->execute(); // Eksekusi querynya

// Buat variabel untuk menampung tag-tag option nya
// Set defaultnya dengan tag option Pilih
$html = "<option value=''>Pilih</option>";

while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
	$html .= "<option value='".$data['id']."'>".$data['name']."</option>"; // Tambahkan tag option ke variabel $html
}

$callback = array('data_kec'=>$html); // Masukan variabel html tadi ke dalam array $callback dengan index array : data_kota

echo json_encode($callback); // konversi varibael $callback menjadi JSON
?>
