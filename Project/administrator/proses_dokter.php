<?php

require_once 'koneksi.php';

$_nama = $_POST['nama'];
$_gender = $_POST['gender'];
$_tmp_lahir = $_POST['tmp_lahir'];
$_tgl_lahir = $_POST['tgl_lahir'];
$_kategori = $_POST['kategori'];
$_telpon = $_POST['telpon'];
$_alamat = $_POST['alamat'];
$_unit_kerja = $_POST['unit_kerja'];


$data = array($_nama, $_gender, $_tmp_lahir, $_tgl_lahir, $_kategori, $_telpon, $_alamat, $_unit_kerja);

$_proses = $_POST['proses_paramedik'];
if ($_proses == "Simpan") {
    $sql = 'INSERT INTO paramedik(nama, gender, tmp_lahir, tgl_lahir, kategori, telpon , alamat, unit_kerja_id) VALUES(?, ?, ?, ?, ?, ?, ?, ?)';
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
} else if ($_proses == "Edit") {
    $_idx = $_POST['idx'];
    $data[] = $_idx;
    $sql = "UPDATE paramedik SET nama=?, gender=?, tmp_lahir=?, tgl_lahir=?, kategori=?, telpon=?, alamat=?, unit_kerja_id=? WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
} else {
    if (isset($_GET['idx'])) {
        $idx = $_GET['idx'];
        $sql = "DELETE FROM paramedik WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$idx]);
    }
}

// Redirect ke halaman data_pasien.php
header("Location: data_dokter.php");
exit();
