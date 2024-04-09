<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';

// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

spl_autoload_register(function($class) {
    $classPath = str_replace('\\', '/', $class) . '.php';
    require_once __DIR__ . '/' . $classPath;
});

spl_autoload_register(function($class) {
    $classPath = str_replace('\\', '/', $class) . '.php';
    require_once __DIR__ . '/Service/' . $classPath;
});
