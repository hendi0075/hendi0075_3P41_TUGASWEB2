<?php
class buah{
    //property 
    public $nama;
    public $warna;

    //function construct(fungsi yang dipanggil ketika membuat objek baru)
    function _construct($a,$b)
    {
        $this->nama = $a;
        $this->warna =$b;
    }
    //function deskripsi (fungsi yang diakses oleh objek untuk menampilkan deksripsi objek)
    function deskripsibuah(){
        echo "NAMA BUAH $this->nama MEMILIKI WARNA $this->warna";
    }
}
    //membuat objek mangga
    $nangka  = new buah ("nangka ","kuning ");
    
    //objek mangga mengakses function deksripsi
    $nangka->deskripsibuah();
?>