<?php

include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];

if ($aksi =="tambah")
{
    $db->tambah_mhs($_POST['nama'],$_POST['tanggal_pengajuan'],$_POST['alasan']);
    header("location:tampil_pengajuan.php");
}

else if ($aksi == "update")
{
    $db->update($_POST['id_pengajuan'], $_POST['nama'], $_POST['tanggal_pengajuan'], $_POST['alasan']);
    header("location:tampil_pengajuan.php");
}

else if ($aksi == "hapus")
{
    $db->hapus($_GET['id_pengajuan']);
    header("location:tampil_pengajuan.php");
}

?>