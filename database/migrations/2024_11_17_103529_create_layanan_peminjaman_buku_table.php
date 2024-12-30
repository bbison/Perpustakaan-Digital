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
        Schema::create('layanan_peminjaman_buku', function (Blueprint $table) {
            $table->id();
            $table->string('peminjam');
            $table->string('anggota');
            $table->string('buku');
            $table->string('keterangan');

            $table->timestamps();
            $table->string('status')->default('dipinjam');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan_peminjaman_buku');
    }
};
