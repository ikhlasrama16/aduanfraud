<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // TABEL USER
        DB::table('users')->delete();

        $users = [
            [
                'name' => 'admin',
                'email' => 'email@admin.com',
                'password' => Hash::make('admin123456@&')
            ]
        ];

        DB::table('users')->insert($users);

        // TABEL KATEGORI PELANGGARAN
        DB::table('kategori_pelanggarans')->delete();

        $kategoripelanggaran = [
            ['nama_kategori' => 'Pencurian atau penyalahgunaan Dana Bank atau dana Nasabah atau pihak lainnya'],
            ['nama_kategori' => 'Pencurian atau penyalahgunaan non-cash asset (Informasi, database, inventaris kantor)'],
            ['nama_kategori' => 'Pemalsuan (Dokumen, tandatangan)'],
            ['nama_kategori' => 'Penyuapan/Gratifikasi'],
            ['nama_kategori' => 'Pemerasan'],
            ['nama_kategori' => 'Penerimaan tidak sah'],
            ['nama_kategori' => 'Pelanggaran kode etik'],
            ['nama_kategori' => 'Ketidaknyamanan kerja (perundungan, intimidasi, pelecehan, tindakan asusila lainnya)'],
            ['nama_kategori' => 'Misselling/misleading penjualan produk'],
            ['nama_kategori' => 'Pencucian uang dan pendanaan terorisme'],
            ['nama_kategori' => 'Benturan kepentingan'],
            ['nama_kategori' => 'Kecurangan laporan keuangan'],
            ['nama_kategori' => 'Penipuan'],
            ['nama_kategori' => 'Pembocoran informasi rahasia Bank'],
        ];

        DB::table('kategori_pelanggarans')->insert($kategoripelanggaran);
    }
}
