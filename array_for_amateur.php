<?php

    $buah1 = [
        'apple' => 'apel',
        'orange' => [
            'jeruk_bali',
            'jeruk_sunkist'
        ],
        'grape' => 'anggur',
        'melon' => 'melon',
        'watermelon' => 'semangka',
        'banana' => 'pisang'
    ];

    $buah2 = [
        'apel',
        'jeruk',
        'anggur',
        'melon',
        'semangka',
        'pisang'
    ];

    $buah3 = [
        'apple' => 'apel',
        'orange' => 'jeruk',
        'grape' => 'anggur',
        'melon' => 'melon',
        'watermelon' => 'semangka',
        'banana' => 'pisang'
    ];

    //Array Multidimensi
    foreach($buah1 as $inggrisnya => $buah) {
        if (is_array($buah)) {
            echo $inggrisnya . ' -> ' . implode(', ', $buah) . PHP_EOL;
        } else {
            echo $inggrisnya . ' -> ' . $buah . PHP_EOL;        
        }
    }
    //Array
    foreach ($buah2 as $buah) {
        echo $buah . PHP_EOL;
    }

    //Array Asosiasi
    foreach ($buah3 as $inggirnya => $buah) {
        echo $inggrisnya . ' -> ' . $buah . PHP_EOL;
    }
?>