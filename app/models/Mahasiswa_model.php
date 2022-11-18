<?php

class Mahasiswa_model {
    private $mhs = [ // ini datanya bisa d dapat dari mana aja.
        [
            "nama" => "Quenie Salbiyah",
            "nim" => "2107411030",
            "email" => "Quenie@gmail.com",
            "jurusan" => "TI"
        ],
        [
            "nama" => "Salbiyah Quenie",
            "nim" => "2107411031",
            "email" => "Salbiyah@gmail.com",
            "jurusan" => "TI"
        ],
        [
            "nama" => "Nicholas Athena",
            "nim" => "2107411032",
            "email" => "Nicholas@gmail.com",
            "jurusan" => "TI"
        ]
    ];

    public function getAllMahasiswa() {
        return $this->mhs;
    }
}