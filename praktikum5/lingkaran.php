<?php

class Lingkaran
{
    // Property / Variabel
    private $jari;
    const PHI = 3.14;

    // Method / Function
    function __construct($r)
    {
        $this->jari = $r;
    }

    function getLuas()
    {
        return self::PHI * $this->jari * $this->jari;
    }

    function getKeliling()
    {
        return 2 * self::PHI * $this->jari;
    }
}

// Instance Object
$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran(100);
echo 'Luas Lingkaran 1 = ' . $lingkaran1->getLuas() . '<br>';
echo 'Keliling Lingkaran 1 = ' . $lingkaran2->getKeliling();
