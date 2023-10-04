<?php

include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];

if ($aksi =="tambah")
{
    $db->tambah_mahasiswa($_POST['nim'],$_POST['nama'], $_POST['jurusan'], $_POST['semester']);
    header("location:tampil_mahasiswa.php?");
}

if ($aksi =="update")
{
    $db->update($_POST['id'], $_POST['nim'], $_POST['nama'], $_POST['jurusan'], $_POST['semester']);
    header("location:tampil_mahasiswa.php?id=$id&aksi=edit&success=true");
}

if ($aksi == "hapus")
{
    $db->hapus($_GET['id']);
    header("location:tampil_mahasiswa.php");
}
?>