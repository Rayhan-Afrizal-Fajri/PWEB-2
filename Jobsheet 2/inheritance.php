<?php

class manusia
{
    protected $nama_depan;

    function panggil_nama($saya)
    {
        $this->nama_depan = $saya;
    }

    function ambil_nama()
    {
        return $this->nama_depan;
    }
}

//class turunan atau sub class
class mahasiswa extends manusia
{
    private $nama_belakang;

    public function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_belakang = $mahasiswa;
    }
    function nama_lengkap()
    {
        return "Nama Depan : " . $this->nama_depan  . "<br>Nama Belakang : " . $this->nama_belakang;
    }
}

//instansiasi class mahasiswa
$informatika = new mahasiswa();

$informatika->panggil_nama("Rayhan Afrizal ");
$informatika->panggil_mahasiswa("Fajri");

//tampilkan isi property
echo $informatika->nama_lengkap();


?>