<?php

//membuat class mahasiswa
class mahasiswa
{
    //property public dan private
    public $nama;
    protected $nim="220302022";

    //public method
    public function tampilkan_nama()
    {
        return "Nama saya Rayhan<br>";
    }

    //membuat protected method
    function tampilkan_nim()
    {
        return "nim saya ".$this->nim;
    }
}

//instansiasi objek mahasiswa ke dalam variabel $mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

//memanggil method tampilkan nama
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();
?>