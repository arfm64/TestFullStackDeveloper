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
        Schema::create('data_pegawai', function (Blueprint $table) {
            $table->integer('id_pegawai', true);
            $table->string('nama_lengkap', 100);
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->date('tanggal_lahir');
            $table->text('alamat')->nullable();
            $table->string('no_telepon', 15)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('jabatan', 50)->nullable();
            $table->string('departemen', 50)->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->decimal('gaji_pokok', 15)->nullable();
            $table->enum('status_kepegawaian', ['Tetap', 'Kontrak', 'Magang'])->nullable();
            $table->string('foto_profil')->nullable();
            $table->string('nik', 16)->nullable();
            $table->string('npwp', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pegawai');
    }
};
