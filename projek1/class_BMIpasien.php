<?php
require_once "class_BMI.php";
require_once "class_pasien.php";

class BmiPasien extends BMI
{
    public $tanggal;

    function __construct($nama, $kota, $umur, $email, $gender, $berat, $tinggi, $tanggal)
    {
        parent::__construct($berat, $tinggi);
        $this->nama = $nama;
        $this->kota = $kota;
        $this->umur = $umur;
        $this->email = $email;
        $this->gender = $gender;
        $this->tanggal = $tanggal;
    }
}
