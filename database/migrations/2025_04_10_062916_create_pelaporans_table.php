<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelaporans', function (Blueprint $table) {
            $table->id();

            // ID Laporan Kustom
            $table->string('id_laporan')->unique();

            // Identitas Pelapor
            $table->enum('anonymous', ['ya', 'tidak'])->default('tidak'); // dari radio button
            $table->string('nama_pelapor')->nullable(); // nullable karena bisa anonymous
            $table->string('nik')->nullable();
            $table->string('pihak')->nullable(); // internal / eksternal
            $table->string('lokasi')->nullable(); // lokasi mitra
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();

            // Informasi Terlapor
            $table->string('nama_terlapor')->nullable();
            $table->string('jabatan_terlapor')->nullable();

            // Detail Pelaporan
            $table->json('kategori_pelanggaran')->nullable();
            $table->string('penjelasan')->nullable();
            $table->string('lokasi_kejadian')->nullable();
            $table->string('waktu_kejadian')->nullable();
            $table->text('kronologi')->nullable();

            // Lain-lain
            $table->string('perkiraan_kerugian')->nullable();
            $table->string('saksi')->nullable();
            $table->text('file_bukti')->nullable(); // path-nya
            $table->json('dugaan_terlibat')->nullable(); // array nama & jabatan
            $table->json('saksi_mata')->nullable(); // array nama & jabatan
            $table->text('kejadian_terulang')->nullable();
            $table->string('kerugian_finansial')->nullable();


            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelaporans');
    }
};
