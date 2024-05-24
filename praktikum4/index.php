<?php
//Membuat Variabel User
$name = "Muhamad Hilmi Kamil";
$age = 18;
$weight = 55.5;

echo "Nama saya adalah " . $name;
echo '<br/> Umur saya saat ini adalah ' . $age . " tahun";
echo "<br/> Berat badan saya adalah " . $weight . " kg";

echo '<br/>Dokumen Root ' . $_SERVER["DOCUMENT_ROOT"];
echo '<br/>Remote Port ' . $_SERVER["REMOTE_PORT"];
echo '<br/>Script Filename ' . $_SERVER["SCRIPT_FILENAME"];
