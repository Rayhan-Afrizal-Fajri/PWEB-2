<?php

class Mahasiswa
{
    private $koneksi;

    public function __construct ($db)
    {
        $this->koneksi = $db;
    }

    public function getAllMahasiswa()
    {
        $query ="SELECT * FROM mahasiswa";
        $result = mysqli_query($this->koneksi,$query);
        return $result;   
    }
    
    public function createMahasiswa($nim, $nama, $program_studi, $jenis_kelamin)
    {
        $query = "INSERT INTO mahasiswa (nim, nama, program_studi, jenis_kelamin) VALUES ('$nim','$nama','$program_studi','$jenis_kelamin')";
        $result = mysqli_query($this->koneksi,$query);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getMahasiswaById($id_mahasiswa)
    {
        $query = "SELECT * FROM mahasiswa WHERE id_mahasiswa=$id_mahasiswa";
        $result = mysqli_query($this->koneksi,$query);
        return mysqli_fetch_assoc($result);
    }

    public function updateMahasiswa($id_mahasiswa, $nim, $nama, $program_studi, $jenis_kelamin)
    {
        $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', program_studi='$program_studi', jenis_kelamin='$jenis_kelamin'";
        $result = mysqli_query($this->koneksi,$query);
        if ($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function deleteMahasiswa($id_mahasiswa)
    {
        $query = "DELETE FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa";
        $result = mysqli_query($this->koneksi,$query);
        if ($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

?>