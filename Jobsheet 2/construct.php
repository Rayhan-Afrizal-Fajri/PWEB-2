<?php

class mahasiswa
{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;

    function __construct()
    {
        echo "Saya Mahasiswa Teknik Informatika<br>";
    }

    //method menampilkan nama
    function tampil_nama()
    {
        return "Nama saya adalah Rayhan";
    }
    function tampil_alamat()
    {
        
    }
    function tampil_mahasiswa()
    {
        return "<br>Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah";
    }

    function __destruct()
    {
        echo "<br>Politeknik Negeri Cilacap";
    }

}

//membuat objek nama_mahasiswa
$nama_mahasiswa = new mahasiswa();

//menampilkan objek ke layar

echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_mahasiswa();

?>