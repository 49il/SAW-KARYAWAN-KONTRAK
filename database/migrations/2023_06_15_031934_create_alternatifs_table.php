<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alternatif', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alternatif');//Membuat kolom "nama_alternatif" dengan tipe data string dalam tabel "alternatif".
            $table->timestamps();//Membuat dua kolom "created_at" dan "updated_at" yang secara otomatis akan menandai waktu pembuatan dan waktu pembaruan setiap entri dalam tabel
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatifs');
    }
};
