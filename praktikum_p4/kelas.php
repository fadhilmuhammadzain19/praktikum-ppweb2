<?php

class Mahasiswa {
    public $nama; //access modifier
    public $nim;
    public $semester;

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function setsemester($semester) {
        $this->nama;
    }
}

$budi = new Mahasiswa();
$budi->setNama = ("Budi Santoso");
$budi->setNim = ("1234567890");
$budi->setsemester =("4");


echo $budi->getNama() . "<br>";
echo $budi->getNim() . "<br>";
echo $budi->getsemester() . "<br>";