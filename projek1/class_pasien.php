<?php
class Pasien
{
    public $nama;
    public $kota;
    public $umur;
    public $email;
    public $gender;
    public $tanggal;


    function __construct($nama, $kota, $umur, $email, $gender, $tanggal)
    {
        $this->nama = $nama;
        $this->kota = $kota;
        $this->umur = $umur;
        $this->email = $email;
        $this->gender = $gender;
        $this->tanggal = $tanggal;
    }
}
