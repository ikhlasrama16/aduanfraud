<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_laporan',
        'anonymous',
        'nama_pelapor',
        'nik',
        'pihak',
        'lokasi',
        'telepon',
        'email',
        'nama_terlapor',
        'jabatan_terlapor',
        'kategori_pelanggaran',
        'penjelasan',
        'lokasi_kejadian',
        'waktu_kejadian',
        'kronologi',
        'perkiraan_kerugian',
        'saksi',
        'file_bukti',
        'dugaan_terlibat',
        'saksi_mata',
        'kejadian_terulang',
        'kerugian_finansial',
    ];

    protected $casts = [
        'kategori_pelanggaran' => 'array',
        'dugaan_terlibat' => 'array',
        'saksi_mata' => 'array',
    ];
}
