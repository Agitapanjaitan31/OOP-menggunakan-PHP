<?php

class produk{
    public $judul ="judul",
            $penulis ="penulis",
            $penerbit="penerbit",
            $harga = 0;
    public function getLabel() 
    {
        return "$this -> penulis,  $this -> penerbit";
    }       
}


$produk1 = new produk();
$produk1 -> judul = "mollary";
var_dump($produk1);

$produk2 = new produk();
$produk2 -> judul = "love harder";
$produk2 -> tambahProperty = "mimamima";
var_dump($produk2);

?>