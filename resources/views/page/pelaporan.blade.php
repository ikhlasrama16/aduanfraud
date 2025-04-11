@extends('layouts.index')
@section('content')
    <h2>Halaman form pelaporan</h2>
    <form action="{{ route('pelaporan_process') }}" class="accordion" id="formAccordion" enctype="multipart/form-data"
        method="POST">
        @csrf
        <!-- Accordion Item 1: Identitas Pelapor -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    #1. Identitas Pelapor
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">
                <div class="accordion-body">
                    <!-- Pilihan Kerahasiaan Identitas -->
                    <div class="mb-4">
                        <label class="form-label d-block fw-bold">Apakah Anda ingin merahasiakan identitas
                            (anonymous)?</label>
                        <p class="text-muted small">Silakan pilih Ya jika Anda tidak ingin identitas Anda diketahui.</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="anonymous" id="anonymous_yes"
                                value="ya">
                            <label class="form-check-label" for="anonymous_yes">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="anonymous" id="anonymous_no"
                                value="tidak">
                            <label class="form-check-label" for="anonymous_no">Tidak</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Identitas Anda</label>
                        <p class="text-muted small">Isi data diri Anda secara lengkap, kecuali Anda memilih untuk tetap
                            anonim.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor"
                                placeholder="Masukan nama">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="number" class="form-control" id="nik" name="nik"
                                placeholder="Masukan NIK">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Pihak</label>
                            <select class="form-select" name="pihak">
                                <option value="">Pilih...</option>
                                <option value="internal">Internal</option>
                                <option value="eksternal">Eksternal</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lokasi" class="form-label">Lokasi Mitra</label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi"
                                placeholder="Masukan lokasi mitra">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon"
                                placeholder="Masukan nomor telepon">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Masukan email">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Accordion Item 2: Isi Pelaporan -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    #2. Isi Pelaporan
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                <div class="accordion-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Informasi Terlapor</label>
                        <p class="text-muted small">Harap lengkapi nama dan jabatan pihak yang dilaporkan.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nama_terlapor" class="form-label">Nama Terlapor</label>
                            <input type="text" class="form-control" id="nama_terlapor" name="nama_terlapor" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="jabatan_terlapor" class="form-label">Jabatan Terlapor</label>
                            <input type="text" class="form-control" id="jabatan_terlapor" name="jabatan_terlapor"
                                required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Kategori Pelanggaran</label>
                        <p class="text-muted small">Silakan pilih satu atau lebih kategori yang sesuai dengan pelaporan
                            Anda.</p>

                        @php
                            $kategoriList = [
                                'Pencurian atau penyalahgunaan Dana Bank atau dana Nasabah atau pihak lainnya',
                                'Pencurian atau penyalahgunaan non-cash asset (Informasi, database, inventaris kantor)',
                                'Pemalsuan (Dokumen, tandatangan)',
                                'Penyuapan/Gratifikasi',
                                'Pemerasan',
                                'Penerimaan tidak sah',
                                'Pelanggaran kode etik',
                                'Ketidaknyamanan kerja (perundungan, intimidasi, pelecehan, tindakan asusila lainnya)',
                                'Misselling/misleading penjualan produk',
                                'Pencucian uang dan pendanaan terorisme',
                                'Benturan kepentingan',
                                'Kecurangan laporan keuangan',
                                'Penipuan',
                                'Pembocoran informasi rahasia Bank',
                            ];
                        @endphp

                        <div class="row">
                            @foreach ($kategoriList as $index => $kategori)
                                <div class="col-md-6">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" name="kategori[]"
                                            value="{{ $kategori }}" id="kategori{{ $index }}" required>
                                        <label class="form-check-label" for="kategori{{ $index }}">
                                            {{ $kategori }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>


                    <div class="mb-3">

                        <p class="text-muted small">Berikan penjelasan lengkap atas kejadian yang dilaporkan</p>
                        <input class="form-control" id="kronologi" name="penjelasan" required rows="4"></input>
                    </div>
                    <div class="mb-3">

                        <p class="text-muted small">Lokasi tempat kejadian</p>
                        <input class="form-control" id="lokasi_kejadian" name="lokasi_kejadian" required
                            rows="4"></input>
                    </div>
                    <div class="mb-3">

                        <p class="text-muted small">Kapan terjadinya? (jelaskan tanggal, waktu, selama/selepas jam kerja)
                        </p>
                        <input class="form-control" id="waktu_kejadian" name="waktu_kejadian" required
                            rows="4"></input>
                    </div>
                    <div class="mb-3">

                        <p class="text-muted small">Berikan penjelasan bagaimana kejadiannya (kronologis)
                        </p>
                        <textarea class="form-control" id="kronologi" name="kronologi" required rows="4"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="perkiraan_kerugian" class="form-label fw-bold">Perkiraan Kerugian</label>
                        <p class="text-muted small">Jika ada, mohon sampaikan nilai kerugian akibat kejadian ini.</p>
                        <input type="text" class="form-control" id="perkiraan_kerugian" name="perkiraan_kerugian"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="saksi" class="form-label fw-bold">Saksi</label>
                        <p class="text-muted small">Cantumkan nama saksi yang mengetahui kejadian, jika ada.</p>
                        <input type="text" class="form-control" id="saksi" name="saksi">
                    </div>

                    <div class="mb-3">
                        <label for="bukti" class="form-label fw-bold">Bukti Pendukung</label>
                        <p class="text-muted small">Upload file yang mendukung pelaporan Anda, seperti foto, dokumen, atau
                            rekaman.</p>
                        <input type="file" class="form-control" id="file_bukti" name="file_bukti" multiple>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Apakah ada dugaan orang lain yang terlibat? Jika YA, mohon
                            disebutkan</label>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" name="dugaan_nama[]" placeholder="Nama">
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" name="dugaan_jabatan[]"
                                    placeholder="Jabatan">
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" name="dugaan_nama[]" placeholder="Nama">
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" name="dugaan_jabatan[]"
                                    placeholder="Jabatan">
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" name="dugaan_nama[]" placeholder="Nama">
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" name="dugaan_jabatan[]"
                                    placeholder="Jabatan">
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Apakah ada saksi mata? Jika YA, mohon disebutkan</label>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" name="saksi_nama[]" placeholder="Nama">
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" name="saksi_jabatan[]" placeholder="Jabatan">
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" name="saksi_nama[]" placeholder="Nama">
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" name="saksi_jabatan[]" placeholder="Jabatan">
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" name="saksi_nama[]" placeholder="Nama">
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" name="saksi_jabatan[]" placeholder="Jabatan">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Apakah kejadian ini pernah terjadi sebelumnya? Jika YA,
                            berikan penjelasan</label>
                        <textarea class="form-control" name="kejadian_terulang" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Apakah kejadian ini menyebabkan kerugian finansial terhadap
                            perusahaan? Jika YA, berapa besar jumlah kerugian yang diperkirakan?</label>
                        <input type="text" class="form-control" name="kerugian_finansial">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 text-end">
            <button type="submit" class="btn btn-success" id="submitButton">Kirim Laporan</button>
        </div>
    </form>
@endsection
