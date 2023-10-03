<?php

include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];

if ($aksi =="tambah")
{
    $db->tambah_mahasiswa($_POST['nim'],$_POST['nama'], $_POST['jurusan'], $_POST['semester']);
    header("location:tampil_mahasiswa.php");
}

?>