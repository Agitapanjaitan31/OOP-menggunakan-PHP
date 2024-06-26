<?php

class Produk {
    public $judul = "judul", 
            $penulis = "penulis", 
            $penerbit = "penerbit", 
            $harga = 0;

    public function __construct($judul ="judul", $penulis="penulis", $penerbit ="penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = 0;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$produk3 = new Produk("Dragon Ball", "", "", 0);

echo "Komik: " . $produk1->getLabel();
echo  "<br>";
echo "Game: " . $produk2->getLabel();
echo  "<br>";
var_dump($produk3);

?>
