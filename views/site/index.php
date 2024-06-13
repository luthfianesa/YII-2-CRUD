<?php

/** @var yii\web\View $this */

$this->title = 'Inova Medika Solusindo';
?>
<div class="site-index">

<div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Selamat Datang!</h1>

        <p class="lead">Silahkan tambah, ubah atau hapus data yang diperlukan di sini</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Wilayah</h2>
                <p>Kelola data wilayah di sini.</p>
                <p><a class="btn btn-outline-secondary" href="<?= yii\helpers\Url::to(['wilayah/index']) ?>">Kelola Wilayah &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Pengguna</h2>
                <p>Kelola data pengguna di sini.</p>
                <p><a class="btn btn-outline-secondary" href="<?= yii\helpers\Url::to(['pengguna/index']) ?>">Kelola Pengguna &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Pegawai</h2>
                <p>Kelola data pegawai di sini.</p>
                <p><a class="btn btn-outline-secondary" href="<?= yii\helpers\Url::to(['pegawai/index']) ?>">Kelola Pegawai &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Tindakan</h2>
                <p>Kelola data tindakan di sini.</p>
                <p><a class="btn btn-outline-secondary" href="<?= yii\helpers\Url::to(['tindakan/index']) ?>">Kelola Tindakan &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Obat</h2>
                <p>Kelola data obat di sini.</p>
                <p><a class="btn btn-outline-secondary" href="<?= yii\helpers\Url::to(['obat/index']) ?>">Kelola Obat &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
