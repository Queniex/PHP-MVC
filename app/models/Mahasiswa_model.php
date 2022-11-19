<?php

class Mahasiswa_model {
    // private $mhs = [ // ini datanya bisa d dapat dari mana aja.
    //     [
    //         "nama" => "Quenie Salbiyah",
    //         "nim" => "2107411030",
    //         "email" => "Quenie@gmail.com",
    //         "jurusan" => "TI"
    //     ],
    //     [
    //         "nama" => "Salbiyah Quenie",
    //         "nim" => "2107411031",
    //         "email" => "Salbiyah@gmail.com",
    //         "jurusan" => "TI"
    //     ],
    //     [
    //         "nama" => "Nicholas Athena",
    //         "nim" => "2107411032",
    //         "email" => "Nicholas@gmail.com",
    //         "jurusan" => "TI"
    //     ]
    // ];

    private $table = 'mahasiswa';
    private $db;
    
    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMahasiswa() {
        // return $this->mhs;
        // $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();

    }

    public function getMahasiswaByID($id) {
        $this->db->query('SELECT * FROM ' . $this->table .  ' WHERE id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}