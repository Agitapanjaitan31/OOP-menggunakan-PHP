<?php

require_once 'App/Namespace_init.php';


//$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);
//$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

//$cetakProduk = new CetakInfoProduk();
//$cetakProduk->tambahProduk($produk1);
//$cetakProduk->tambahProduk($produk2);

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
