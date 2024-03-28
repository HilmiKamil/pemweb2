<?php

class NilaiMahasiswa
{
    // Property
    public $matakuliah;
    public $nilai;
    public $nim;

    // Method
    function __construct($_nim, $_matkul, $_nilai)
    {
        $this->nim = $_nim;
        $this->matakuliah = $_matkul;
        $this->nilai = $_nilai;
    }

    function grade()
    {
        if ($this->nilai <= 35) {
            return 'E';
        } elseif ($this->nilai >= 36 && $this->nilai <= 55) {
            return 'D';
        } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
            return 'C';
        } elseif ($this->nilai >= 70 && $this->nilai <= 84) {
            return 'B';
        } elseif ($this->nilai >= 85 && $this->nilai <= 100) {
            return 'A';
        } else {
            return 'NILAI DILUAR JANGKAUAN';
        }
    }

    function hasil()
    {
        if ($this->nilai < 56) {
            return 'TIDAK LULUS';
        } elseif ($this->nilai >= 56 && $this->nilai <= 100) {
            return 'LULUS';
        } else {
            return 'NILAI DILUAR JANGKAUAN';
        }
    }
}
