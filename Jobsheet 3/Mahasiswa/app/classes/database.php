<?php

class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "pengajuan_cuti";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_mahasiswa()
    {
        $data = mysqli_query($this->koneksi, "select * from mahasiswa");
        while ($d = mysqli_fetch_array($data))
        {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_mahasiswa($nim, $nama, $jurusan, $semester)
    {
        mysqli_query($this->koneksi,"insert into mahasiswa (nim,nama,jurusan,semester) values ('$nim','$nama','$jurusan', '$semester')");
    }

    function edit($id)
    {
        $data = mysqli_query($this->koneksi, "select * from mahasiswa where id = '$id'");
        while ($d = mysqli_fetch_array($data))
        {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id, $nim, $nama, $jurusan, $semester)
    {
        mysqli_query($this->koneksi, "update mahasiswa set nim = '$nim', nama = '$nama', jurusan = '$jurusan', semester = '$semester' where id = '$id'");
    }

    function hapus ($id)
    {
        mysqli_query($this->koneksi, "delete from mahasiswa where id = '$id'");
    }
}

?>