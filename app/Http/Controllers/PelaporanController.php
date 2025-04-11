<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use Illuminate\Http\Request;

class PelaporanController extends Controller
{
    public function store(Request $request)
    {
        // Validasi (optional, bisa ditambahkan sesuai kebutuhan)
        // $request->validate([...]);

        // Generate ID laporan otomatis: LAP00001, LAP00002, dst.
        $last = Pelaporan::latest('id')->first();
        $lastId = $last ? $last->id + 1 : 1;
        $customId = 'LAP' . str_pad($lastId, 5, '0', STR_PAD_LEFT);

        // Simpan data ke database
        $pelaporan = Pelaporan::create([
            'id_laporan'            => $customId,
            'anonymous'             => $request->anonymous,
            'nama_pelapor'          => $request->nama_pelapor,
            'nik'                   => $request->nik,
            'pihak'                 => $request->pihak,
            'lokasi'                => $request->lokasi,
            'telepon'               => $request->telepon,
            'email'                 => $request->email,
            'nama_terlapor'         => $request->nama_terlapor,
            'jabatan_terlapor'      => $request->jabatan_terlapor,
            'kategori_pelanggaran'  => $request->kategori, // checkbox
            'penjelasan'            => $request->penjelasan,
            'lokasi_kejadian'       => $request->lokasi_kejadian,
            'waktu_kejadian'        => $request->waktu_kejadian,
            'kronologi'             => $request->kronologi,
            'perkiraan_kerugian'    => $request->kerugian,
            'saksi'                 => $request->saksi,
            'file_bukti'            => null, // handle di bawah
            'dugaan_terlibat'       => json_encode([
                ['nama' => $request->dugaan_nama[0] ?? null, 'jabatan' => $request->dugaan_jabatan[0] ?? null],
                ['nama' => $request->dugaan_nama[1] ?? null, 'jabatan' => $request->dugaan_jabatan[1] ?? null],
                ['nama' => $request->dugaan_nama[2] ?? null, 'jabatan' => $request->dugaan_jabatan[2] ?? null],
            ]),
            'saksi_mata'            => json_encode([
                ['nama' => $request->saksi_nama[0] ?? null, 'jabatan' => $request->saksi_jabatan[0] ?? null],
                ['nama' => $request->saksi_nama[1] ?? null, 'jabatan' => $request->saksi_jabatan[1] ?? null],
                ['nama' => $request->saksi_nama[2] ?? null, 'jabatan' => $request->saksi_jabatan[2] ?? null],
            ]),
            'kejadian_terulang'     => $request->kejadian_terulang,
            'kerugian_finansial'    => $request->kerugian_finansial,
        ]);

        // Simpan file (jika ada)
        if ($request->hasFile('file_bukti')) {
            $path = $request->file('file_bukti')->store('bukti', 'public');
            $pelaporan->update(['file_bukti' => $path]);
        }

        return redirect()->back()->with('success', 'Laporan berhasil dikirim.');
    }
}
