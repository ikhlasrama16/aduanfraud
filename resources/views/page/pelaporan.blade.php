@extends('layouts.index')
@section('content')
    <h2>halaman form pelaporan</h2>
    <div class="accordion" id="formAccordion">
        <!-- Accordion Item 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    #1. Data Siswa
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#formAccordion">
                <div class="accordion-body">
                    <div class="row">
                        <!-- Input NISN -->
                        <div class="col-md-6 mb-3">
                            <label for="nisn" class="form-label">NISN</label>
                            <input type="text" class="form-control" id="nisn" name="nisn"
                                placeholder="Masukan NISN">
                        </div>

                        <!-- Input Jenis Kelamin -->
                        <div class="col-md-6 mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                <option selected disabled>Pilih jenis kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Accordion Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        #2. Data Orang Tua
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#formAccordion">
                    <div class="accordion-body">
                        <!-- Form Data Orang Tua -->
                        <div class="mb-3">
                            <label for="nama_ayah" class="form-label">Nama Ayah</label>
                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
                        </div>
                        <!-- dst -->
                    </div>
                </div>
            </div>

            <!-- Tambahkan accordion item lain sesuai kebutuhan -->
        </div>
    @endsection
