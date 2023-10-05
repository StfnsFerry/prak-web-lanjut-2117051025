<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <div class="container">
        <div class="form-box">
            <h1 class="mb-0">Form Controllers</h1>
            <div class="form">
                <form action="<?= base_url('/user/store');?>" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('nama'); ?>
                            </div>
                        <?php endif; ?>
                        <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>"  placeholder="Nama" name="nama" value="<?= old('nama') ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">NPM</label>
                        <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('npm'); ?>
                            </div>
                        <?php endif; ?>
                        <input type="text" class="form-control <?= session('validation') ? 'is-invalid' : '' ?>" placeholder="NPM" name="npm" value="<?= old('npm') ?>">
                    </div> 
                    
                    <div class="mb-3">
                    <label class="form-label">Kelas</label>
                        <select class="form-select mt-2" aria-label="Default select example" name="kelas">
                            <option value="" selected disabled>Pilih Kelas</option>
                                <?php
                                foreach ($kelas as $item) {
                                ?>
                                    <option value="<?= $item['id'] ?>"><?= $item['nama_kelas'] ?></option>
                            <?php } ?>
                        </select>
                    </div> 
                    <input class="btn btn-dark" type="submit">
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection('content') ?>