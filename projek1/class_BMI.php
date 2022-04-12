<?php
class BMI
{
    public $berat;
    public $tinggi;
    static $tb = 100;
    public $bmi;

    function __construct($berat, $tinggi)
    {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }
    function nilaiBMI()
    {
        $this->ting = $this->tinggi / self::$tb;
        $this->bmi = $this->berat / ($this->ting * $this->ting);
        return $this->bmi;
    }

    function statusBMI()
    {
        if ($this->nilaiBMI() < 18.5) {
            return "Kekurangan Bobot";
        } else if ($this->nilaiBMI() >= 18.5 && $this->nilaiBMI() < 23.9) {
            return "Ideal";
        } else if ($this->nilaiBMI() >= 24 && $this->nilaiBMI() < 26.9) {
            return "Kelebihan Bobot";
        } else if ($this->nilaiBMI() >= 27 && $this->nilaiBMI() < 29.9) {
            return "Obesitas 1";
        } else if ($this->nilaiBMI() < 30) {
            return "Obesitas 2";
        } else {
            return "Bilangan yg anda masukan salah";
        }
    }
}
