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
        // Schema::create('pelaporans', function (Blueprint $table) {
        //     $table->id();

        //     // Kolom ID Laporan (untuk ID custom seperti LAP00001)
        //     $table->string('id_laporan')->unique();

        //     // Identitas Pelapor
        //     $table->string('nama_pelapor');
        //     $table->string('nik')->nullable();
        //     $table->string('alamat')->nullable();
        //     $table->string('no_telp')->nullable();
        //     $table->string('email')->nullable();
        //     $table->string('hubungan_dengan_terlapor')->nullable();
        //     $table->enum('identitas_terbuka', ['ya', 'tidak'])->default('tidak');

        //     // Isi Pelaporan
        //     $table->string('nama_terlapor')->nullable();
        //     $table->string('jabatan_terlapor')->nullable();
        //     $table->text('penjelasan')->nullable();
        //     $table->text('lokasi_kejadian')->nullable();
        //     $table->text('tanggal_kejadian')->nullable();
        //     $table->text('file_bukti')->nullable();

        //     // Dugaan Orang Lain Terlibat
        //     $table->json('dugaan_terlibat')->nullable();

        //     // Saksi Mata
        //     $table->json('saksi_mata')->nullable();

        //     // Pertanyaan Tambahan
        //     $table->text('kejadian_terulang')->nullable();
        //     $table->string('kerugian_finansial')->nullable();

        //     $table->timestamps();
        // });
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
