<?php
echo $this->extend('layout/template');
echo $this->section('content'); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col p-4">
                <h1 class=" text-center mt-5  fw-bold">Selamat Datang Donatur</h1>
                <hr>
            </div>
        </div>

        <div class="row p-2 mb-3">
            <div class="col-md-1"></div>

            <form action="" >
            <div class="col-md-5 bg-info p-3 rounded">
                <h3 class="fw-bold">Profil Donatur</h3>
                <hr style="width: 423px;" class="mb-1">
                <div class="mb-2">
                    <label for="nama" class="form-label fw-bolder">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama" id="nama">
                </div>
                <div class="mb-2">
                    <div class="row">
                        <label class="form-label fw-bolder">Jenis Kelamin</label>
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kelamin" id="jk1" checked>
                                <label class="form-check-label" for="jk1">Laki-laki</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kelamin" id="jk2">
                                <label class="form-check-label" for="jk2">Perempuan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label fw-bolder" for="tlp">No. Telepon</label>
                    <input class="form-control" type="text" name="telepon" id="tlp">
                </div>
                <div class="mb-2">
                    <label class="form-label fw-bolder" for="mail">Alamat Email</label>
                    <input class="form-control" type="email" name="email" id="mail">
                </div>
                <div class="mb-2">
                    <label for="almt" class="form-label fw-bolder">Alamat Lengkap</label>
                    <textarea class="form-control" name="alamat" id="almt" cols="30" rows="3"></textarea>
                </div>
                <div class="mb-2">
                    <label for="prov" class="form-label fw-bolder">Provinsi</label>
                    <select class="form-select" name="provinsi" id="prov">
                        <option value="a">Anu</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="kab" class="form-label fw-bolder">Kabupaten</label>
                    <select class="form-select" name="kabupaten" id="kab">
                        <option value="a">Analah</option>
                    </select>
                </div>
            </div>
            <div class="col-md-5"></div>
            </form>

            <div class="col-md-1"></div>
        </div>


    </div>
</section>

<?= $this->endsection(); ?>