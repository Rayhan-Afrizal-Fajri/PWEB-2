<?php

include_once '../../models/Mahasiswa.php';

class MahasiswaController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Mahasiswa($db);
    }

    public function getAllMahasiswa()
    {
        return $this->model->getAllMahasiswa();
    }

    public function createMahasiswa($nim, $nama, $program_studi, $jenis_kelamin)
    {
        return $this->model->createMahasiswa($nim, $nama, $program_studi, $jenis_kelamin);
    }

    public function getMahasiswaById($id_mahasiswa)
    {
        return $this->model->getMahasiswaById($id_mahasiswa);
    }

    public function updateMahasiswa($id_mahasiswa, $nim, $nama, $program_studi, $jenis_kelamin)
    {
        return $this->model->updateMahasiswa($id_mahasiswa, $nim, $nama, $program_studi, $jenis_kelamin);
    }

    public function deleteMahasiswa($id_mahasiswa)
    {
        return $this->model->deleteMahasiswa($id_mahasiswa);
    }
}

?>