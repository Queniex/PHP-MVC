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

    private $dbh; // database handler
    private $stsmt; // statement (menyimpan query)

    public function __construct() {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() {
        // return $this->mhs;
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}