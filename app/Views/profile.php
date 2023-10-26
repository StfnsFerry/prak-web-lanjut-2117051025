<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 left-box d-flex justify-content-center align-items-center">
                <div class="featured-image rounded-4" style="height:350px; width:100%; background-image: url('<?= $user['foto']?>'); background-size: cover;">
                    
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column">
                <div class="form-wrap w-100">
                    <div class="form-header d-flex align-items-center justify-content-between mb-4">
                        <div class="title">
                            <h4 class="mb-1">Profile</h4>
                            <p class="mb-0">Details data</p>
                        </div>
                        <div class="back">
                            <a href="<?= base_url('/user')?>" class="btn btn-outline-dark"><i class="fas fa-arrow-left mb-0"></i></a>
                        </div>
                    </div>
                    <div class="desc">
                        <div class="desc-content">
                            <div class="desc-text mb-3">
                                <p class="mb-2">Nama Lengkap</p>
                                <h1 class="mb-0"><?= $user['nama']?></h1>
                            </div>
                            <div class="desc-text mb-3">
                                <p class="mb-2">NPM</p>
                                <h1 class="mb-0"><?= $user['npm']?></h1>
                            </div>
                            <div class="desc-text mb-3">
                                <p class="mb-2">Kelas</p>
                                <h1 class="mb-0"><?= $user['nama_kelas']?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="edit d-flex justify-content-end align-items-center">
                        <a href="<?= base_url('user/' . $user['id'] . '/edit') ?>" class="btn btn-dark">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection('content') ?>