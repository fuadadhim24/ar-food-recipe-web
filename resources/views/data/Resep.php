<?php

class Recipes {
    public static $listRecipes = array(
        array(
            'id' => '1',
            'nama' => 'Nasi Goreng',
            'deskripsi' => 'Nasi goreng sehat menggabungkan keseimbangan nutrisi dengan cita rasa yang khas, menjadikannya pilihan makanan yang cocok untuk diet seimbang dan gaya hidup aktif.',
            'levelKesulitan' => 'Mudah',
            'durasiMasak' => '30',
            'bahan' => array('nasi', 'bawang merah', 'bawang putih', 'telur', 'kecap'),
            'alat' => array('wajan', 'sendok', 'kompor'),
            'stepMasak' => array(
                'Goreng bawang merah dan bawang putih hingga harum.',
                'Masukkan telur dan aduk hingga matang.',
                'Tambahkan nasi dan kecap, aduk rata.',
                'Masak hingga nasi terasa kering dan harum.'
            ),
            'namaFoto' => 'nasi-goreng.jpg'
        ),
        array(
            'id' => '2',
            'nama' => 'Pisang Goreng',
            'deskripsi' => 'Pisang goreng adalah camilan populer yang terbuat dari pisang yang dicelupkan dalam adonan tepung dan digoreng hingga keemasan.',
            'levelKesulitan' => 'Sulit',
            'durasiMasak' => '45',
            'bahan' => array('pisang', 'tepung terigu', 'gula', 'minyak goreng'),
            'alat' => array('wajan', 'sendok', 'mangkok'),
            'stepMasak' => array(
                'Kupas pisang dan potong sesuai selera.',
                'Campurkan tepung terigu dan gula dalam mangkok.',
                'Celupkan potongan pisang ke dalam adonan tepung.',
                'Goreng pisang dalam minyak panas hingga keemasan.',
                'Angkat dan tiriskan pisang goreng.',
                'Sajikan pisang goreng hangat.'
            ),
            'namaFoto' => 'pisang-goreng.jpg'
        ),
        array(
            'id' => '3',
            'nama' => 'Salad Buah Segar',
            'deskripsi' => 'Salad buah segar adalah campuran berbagai buah-buahan segar yang kaya akan vitamin dan serat, cocok dinikmati sebagai hidangan sehat dan menyegarkan.',
            'levelKesulitan' => 'Mudah',
            'durasiMasak' => '15',
            'bahan' => array('apel', 'pir', 'melon', 'anggur', 'stroberi'),
            'alat' => array('pisau', 'mangkuk besar', 'sendok'),
            'stepMasak' => array(
                'Cuci bersih semua buah-buahan.',
                'Kupas dan potong buah-buahan sesuai selera.',
                'Campurkan semua buah dalam mangkuk besar.',
                'Sajikan salad buah segar dalam mangkuk atau piring saji.'
            ),
            'namaFoto' => 'salad-buah.jpg'
        )
    );

    public static $listRecipeChoosed = array();
}

?>
