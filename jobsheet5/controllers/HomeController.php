<?php

class HomeController
{
    public function home()
    {
        header("location:http://localhost/jobsheet5/index.php");
    }
    public function mahasiswa()
    {
        header("location:http://localhost/jobsheet5/views/mahasiswa/index.php");
    }

    public function dosen()
    {
        header("location:http://localhost/jobsheet5/views/dosen/index.php");
    }

    public function tambah_mahasiswa()
    {
        header("location:http://localhost/jobsheet5/views/mahasiswa/tambah.php");
    }

    public function proses_tambah_mahasiswa()
    {
        header("location:http://localhost/jobsheet5/views/mahasiswa/proses_tambah.php");
    }

    public function edit_mahasiswa($id_mahasiswa)
    {
        header("location:http://localhost/jobsheet5/views/mahasiswa/edit.php?id_mahasiswa={$id_mahasiswa}");
    }

    public function hapus_mahasiswa()
    {
        header("location:http://localhost/jobsheet5/views/mahasiswa/hapus.php");
    }
}