<?php

require_once 'App/Autoloading_init.php';

$Sproduk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
$Sproduk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);

$ScetakProduk = new CetakInfoProduk();

$ScetakProduk->tambahProduk($Sproduk2);
$ScetakProduk->tambahProduk($Sproduk1);

echo $ScetakProduk->cetak();