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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('intro');
            $table->text('deskripsi');
            $table->string('namaFoto');
            $table->string('kategori');
            $table->timestamps();
        });

        DB::table('classes')->insert([
            [
                'title' => 'Apa itu Stunting?',
                'intro' => 'Pengantar singkat mengenai kondisi stunting.',
                'deskripsi' => 'Stunting adalah kondisi gagal tumbuh pada anak akibat ...',
                'namaFoto' => 'a3KRo3cOeyvi8HOUXDw0GWkbWp8azjW6wvDe1Ygl.png',
                'kategori' => 'tangani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Manfaat Sayuran untuk Kesehatan',
                'intro' => 'Mengenal manfaat yang dimiliki sayuran untuk kesehatan tubuh.',
                'deskripsi' => 'Sayuran mengandung banyak vitamin dan mineral ...',
                'namaFoto' => 'a3KRo3cOeyvi8HOUXDw0GWkbWp8azjW6wvDe1Ygl.png',
                'kategori' => 'antisipasi',
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
        Schema::dropIfExists('classes');
    }
};
