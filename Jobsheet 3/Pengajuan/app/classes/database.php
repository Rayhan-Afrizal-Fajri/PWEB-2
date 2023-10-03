<?php

class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db="pengajuan_cuti";
    var $koneksi;

    function __construct()
    {
       $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_pengajuan()
    {
        $data=mysqli_query($this->koneksi,"select * from pengajuan");
        while ($d = mysqli_fetch_array($data))
        {
            $hasil[] = $d;
        }
            return $hasil
    }

    function tambah_mhs($nama, $tanggal_pengajuan, $alasan)
    {
        mysqli_query($this->koneksi,"insert into pengajuan (nama, tanggal_pengajuan, alasan) values('$nama','$tanggal_pengajuan','$alasan')");
    }

    function edit($id_pengajuan)
    {
        $data = mysqli_query($this->koneksi, "select * from pengajuan where id_pengajuan = '$id_pengajuan'");
        while ($d = mysqli_fetch_array($data))
        {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id_pengajuan, $nama, $tanggal_pengajuan, $alasan)
    {
        mysqli_query($this->koneksi, "update pengajuan set nama='$nama', nama='$nama', tanggal_pengajuan='$tanggal_pengajuan', alasan='$alasan' where id_pengajuan='$id_pengajuan'");
    }

    function hapus($id_pengajuan)
    {
        mysqli_query($this->koneksi, "delete from pengajuan where id_pengajuan = '$id_pengajuan'");
    }
}

?>