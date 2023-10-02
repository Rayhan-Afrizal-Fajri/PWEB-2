<?php


//membuat class
class mahasiswa
{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;

    //method menampilkan nama
    function tampil_nama()
    {
        return "Nama saya adalah Rayhan";
    }
    function tampil_alamat()
    {
        
    }

}

//membuat objek nama_mahasiswa
$nama_mahasiswa = new mahasiswa();

//menampilkan objek ke layar

// echo $nama_mahasiswa->tampil_nama();

?>

<?php

class dosen
{
    var $nidn;
    var $nama;
    var $prodi;

    function tampil_nama()
    {
        return "Nama saya adalah Rayhan";
    }
}

$rayhan = new dosen();

echo $rayhan->tampil_nama();

?>