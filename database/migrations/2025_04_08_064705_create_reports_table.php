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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();  // ID Laporan
            $table->string('reporter_name');  // Nama pelapor
            $table->string('reporter_email')->nullable();  // Email pelapor
            $table->text('description');  // Deskripsi laporan
            $table->enum('fraud_type', ['phishing', 'identity_theft', 'transaction_fraud', 'account_tampering', 'other']);  // Jenis fraud
            $table->timestamp('incident_date');  // Tanggal kejadian
            $table->enum('status', ['pending', 'under_review', 'resolved', 'closed'])->default('pending');  // Status laporan
            $table->timestamps();  // Tanggal dibuat dan diubah
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
