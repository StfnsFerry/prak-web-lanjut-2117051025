<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 left-box d-flex justify-content-center align-items-center">
                <div class="featured-image">
                    <img src="<?= base_url('assets/img/edit-kelas.svg')?>" class="img-fluid" style="width:350px;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-wrap">
                    <div class="form-header d-flex align-items-center justify-content-between mb-3">
                        <div class="title">
                            <h4 class="mb-1">Edit Kelas</h4>
                            <p class="mb-0">Update data</p>
                        </div>
                        <div class="back">
                            <a href="<?= base_url('/kelas')?>" class="btn btn-outline-dark"><i class="fas fa-arrow-left mb-0"></i></a>
                        </div>
                    </div>
                    <div class="form">
                        <form action="<?= base_url('/kelas/' . $kelas['id'])?>" method="POST">
                            <?= csrf_field() ?>
                            <div class="form-floating mb-3">
                                <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
                                    <div class="invalid-feedback">
                                        <?= session('validation')->getError('nama_kelas'); ?>
                                    </div>
                                <?php endif; ?>
                                <input type="text" id="floatingInput" class="form-control <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>"  placeholder="Nama Kelas" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>">
                                <label for="floatingInput">Nama Kelas</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <?php if (session('validation') && session('validation')->hasError('kapasitas')) : ?>
                                    <div class="invalid-feedback">
                                        <?= session('validation')->getError('kapasitas'); ?>
                                    </div>
                                <?php endif; ?>
                                <input type="number" id="floatingInput" class="form-control <?= session('validation') ? 'is-invalid' : '' ?>" placeholder="Kapasitas Ruangan" name="kapasitas" value="<?= $kelas['kapasitas_ruangan'] ?>">
                                <label for="floatingInput">Kapasitas Ruangan</label>
                            </div> 
                            
                            <div class="submit-wrap d-flex justify-content-end align-items-center">
                                <input type="hidden" name="_method" value="PUT">
                                <input class="btn btn-dark save" type="submit" value="Save Edit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection('content') ?>