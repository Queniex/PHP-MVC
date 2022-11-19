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


    public function tambahDataMahasiswa($data) {
        $query = "INSERT INTO mahasiswa 
                    VALUES
                    ('', :nama, :nim, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind(":nama", $data['nama']);
        $this->db->bind(":nim", $data['nim']);
        $this->db->bind(":email", $data['email']);
        $this->db->bind(":jurusan", $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
        
    }

    public function hapusDataMahasiswa($id) {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(":id", $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data) {
        $query = "UPDATE mahasiswa 
                    SET
                    nama = :nama,
                    nim = :nim,
                    email = :email,
                    jurusan = :jurusan
                WHERE id = :id";


        $this->db->query($query);
        $this->db->bind(":id", $data['id']);
        $this->db->bind(":nama", $data['nama']);
        $this->db->bind(":nim", $data['nim']);
        $this->db->bind(":email", $data['email']);
        $this->db->bind(":jurusan", $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
        
    }

    public function cariDataMahasiswa() {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind(":keyword", "%keyword%");
        return $this->db->resultSet();
    }

}