<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('levelKesulitan');
            $table->integer('durasiMasak');
            $table->json('bahan');
            $table->json('alat');
            $table->json('stepMasak');
            $table->string('namaFoto');
            $table->timestamps();
        });

        DB::table('recipes')->insert([
            [
                'nama' => 'Nasi Goreng',
                'deskripsi' => 'Nasi goreng sehat menggabungkan keseimbangan nutrisi dengan cita rasa yang khas, menjadikannya pilihan makanan yang cocok untuk diet seimbang dan gaya hidup aktif.',
                'levelKesulitan' => 'Mudah',
                'durasiMasak' => 30,
                'bahan' => json_encode(['nasi', 'bawang merah', 'bawang putih', 'telur', 'kecap']),
                'alat' => json_encode(['wajan', 'sendok', 'kompor']),
                'stepMasak' => json_encode([
                    'Goreng bawang merah dan bawang putih hingga harum.',
                    'Masukkan telur dan aduk hingga matang.',
                    'Tambahkan nasi dan kecap, aduk rata.',
                    'Masak hingga nasi terasa kering dan harum.'
                ]),
                'namaFoto' => 'a3KRo3cOeyvi8HOUXDw0GWkbWp8azjW6wvDe1Ygl.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Pisang Goreng',
                'deskripsi' => 'Pisang goreng adalah camilan populer yang terbuat dari pisang yang dicelupkan dalam adonan tepung dan digoreng hingga keemasan.',
                'levelKesulitan' => 'Sulit',
                'durasiMasak' => 45,
                'bahan' => json_encode(['pisang', 'tepung terigu', 'gula', 'minyak goreng']),
                'alat' => json_encode(['wajan', 'sendok', 'mangkok']),
                'stepMasak' => json_encode([
                    'Kupas pisang dan potong sesuai selera.',
                    'Campurkan tepung terigu dan gula dalam mangkok.',
                    'Celupkan potongan pisang ke dalam adonan tepung.',
                    'Goreng pisang dalam minyak panas hingga keemasan.',
                    'Angkat dan tiriskan pisang goreng.',
                    'Sajikan pisang goreng hangat.'
                ]),
                'namaFoto' => 'a3KRo3cOeyvi8HOUXDw0GWkbWp8azjW6wvDe1Ygl.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Salad Buah Segar',
                'deskripsi' => 'Salad buah segar adalah campuran berbagai buah-buahan segar yang kaya akan vitamin dan serat, cocok dinikmati sebagai hidangan sehat dan menyegarkan.',
                'levelKesulitan' => 'Mudah',
                'durasiMasak' => 15,
                'bahan' => json_encode(['apel', 'pir', 'melon', 'anggur', 'stroberi']),
                'alat' => json_encode(['pisau', 'mangkuk besar', 'sendok']),
                'stepMasak' => json_encode([
                    'Cuci bersih semua buah-buahan.',
                    'Kupas dan potong buah-buahan sesuai selera.',
                    'Campurkan semua buah dalam mangkuk besar.',
                    'Sajikan salad buah segar dalam mangkuk atau piring saji.'
                ]),
                'namaFoto' => 'a3KRo3cOeyvi8HOUXDw0GWkbWp8azjW6wvDe1Ygl.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
