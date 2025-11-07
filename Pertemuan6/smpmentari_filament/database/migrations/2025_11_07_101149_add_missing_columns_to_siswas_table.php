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
        Schema::table('siswas', function (Blueprint $table) {
            $table->string('nisn')->nullable()->after('nis');
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable()->after('nama');
            $table->date('tanggal_lahir')->nullable()->after('kelas');
            // Kolom 'alamat' sudah ada di migration awal, jadi tidak perlu ditambahkan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siswas', function (Blueprint $table) {
            $table->dropColumn(['nisn', 'jenis_kelamin', 'tanggal_lahir']);
        });
    }
};