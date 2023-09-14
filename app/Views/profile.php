<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">
    <title>Profile</title>
</head>
<body>
    <div class="home">
        <div class="profile">
            <div class="box-profile">
                <div class="img">
                    <img src="<?=base_url('assets/img/pp.jpg');?>">
                </div>
                <div class="box-data">
                    <p class="title">Nama Lengkap</p>
                    <h1 class="data"><?=$nama?></h1>
                </div>
                <div class="box-data">
                    <p class="title">Kelas</p>
                    <h1 class="data"><?=$kelas?></h1>
                </div>
                <div class="box-data">
                    <p class="title">NPM</p>
                    <h1 class="data"><?=$npm?></h1>
                </div>
            </div>

        </div>
    </div>
</body>
</html>