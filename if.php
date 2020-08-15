<?php

    $a = '';
    $b = 'mie';
    $c = null;

    if (empty($a)) {
        echo 'makanan' . PHP_EOL;
    } else {
        echo 'minuman' . PHP_EOL;
    }
    
    if (!empty($a)) {
        echo 'makanan' . PHP_EOL;
    } else {
        echo 'minuman' . PHP_EOL;
    }
    
    if (is_null($a)) {
        echo 'makanan' . PHP_EOL;
    } else {
        echo 'minuman' . PHP_EOL;
    }
    
    if (!empty($b)) {
        echo 'makanan' . PHP_EOL;
    } else {
        echo 'minuman' . PHP_EOL;
    }

    if (empty($b)) {
        echo 'makanan' . PHP_EOL;
    } else {
        echo 'minuman' . PHP_EOL;
    }

    // cek apakah null?
    if ($b == null) {
        echo 'makanan' . PHP_EOL;
    } else {
        echo 'minuman' . PHP_EOL;
    }
?>