<?php

class manusia
{
    private $nama_saya;

    function panggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }

    function ambil_nama()
    {
        return $this->nama_saya;
    }
}

//class turunan atau sub class

class mahasiswa extends manusia
{
    protected $nama_mahasiswa;

    public function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
    function ambil_mahasiswa()
    {
        return $this->nama_mahasiswa;
    }
}

//instansiasi class mahasiswa
$informatika = new mahasiswa();

$informatika->panggil_nama("Rayhan Afrizal ");
$informatika->panggil_mahasiswa("Fajri");

//tampilkan isi property
echo "Nama Depan : " . $informatika->ambil_nama() . "<br>";
echo "Nama Belakang : " . $informatika->ambil_mahasiswa() . "<br>";


?>