<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 left-box d-flex justify-content-center align-items-center">
                <div class="featured-image">
                    <img src="<?= base_url('assets/img/user.svg')?>" class="img-fluid" style="width:350px;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-wrap">
                    <div class="form-header d-flex align-items-center justify-content-between mb-3">
                        <div class="title">
                            <h4 class="mb-1">Create User</h4>
                            <p class="mb-0">Fill in the blanks below</p>
                        </div>
                        <div class="back">
                            <a href="<?= base_url('/user')?>" class="btn btn-outline-dark"><i class="fas fa-arrow-left mb-0"></i></a>
                        </div>
                    </div>
                    <div class="form">
                        <form action="<?= base_url('/user/store');?>" method="POST" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                                    <div class="invalid-feedback">
                                        <?= session('validation')->getError('nama'); ?>
                                    </div>
                                <?php endif; ?>
                                <input type="text" id="floatingInput" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>"  placeholder="Nama Lengkap" name="nama" value="<?= old('nama') ?>">
                                <label for="floatingInput">Nama Lengkap</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                                    <div class="invalid-feedback">
                                        <?= session('validation')->getError('npm'); ?>
                                    </div>
                                <?php endif; ?>
                                <input type="text" id="floatingInput" class="form-control <?= session('validation') ? 'is-invalid' : '' ?>" placeholder="NPM" name="npm" value="<?= old('npm') ?>">
                                <label for="floatingInput">NPM</label>
                            </div> 
                            
                            <div class="form-floating mb-3">
                                <select class="form-select mt-2" id="floatingSelect" aria-label="Default select example" name="kelas">
                                    <option value="" selected disabled>Pilih Kelas</option>
                                        <?php
                                        foreach ($kelas as $item) {
                                        ?>
                                            <option value="<?= $item['id'] ?>"><?= $item['nama_kelas'] ?></option>
                                    <?php } ?>
                                </select>
                                <label for="floatingSelect">Kelas</label>
                            </div>
                                            
                            <div class="mb-3">
                                <input type="file" name="foto">
                            </div>
                            <div class="submit-wrap d-flex justify-content-end align-items-center">
                                <input class="btn btn-dark save" type="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection('content') ?>