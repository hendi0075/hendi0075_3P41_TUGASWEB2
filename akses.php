<?php
class Buah {
    protected $nama;

    function gantinama($namabuah) {
        $this->nama = $namabuah;
    }

    function tampilannama() {
        echo $this->nama;
    }
}

class mangga extends Buah {
    function tampildata() {
        echo $this->nama;
    }
}

$mangga = new mangga();
$mangga->gantinama("mangga golek"); 
$mangga->tampildata(); 
?>