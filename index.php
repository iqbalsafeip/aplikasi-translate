<?php 
    include 'koneksi.php';
    include 'icons.php';
    $tindo='Terjemahan';
    $tsunda='';
    $selaras = null;
    if(isset($_GET['submit']) && $_GET['kata'] != ''){
        $kata = $_GET['kata'];
        $data = $Translate->get_vocabs_like($kata);
        $hasil = $Translate->get_vocab_equal($kata);
        if($hasil){
            $tsunda = $hasil['sunda'];
            $tindo = $hasil['indo'];
        } else if($data){
            $tsunda = $_GET['kata'];
            $tindo = $_GET['kata'];
            $selaras = $data;
        } else {
            $tsunda = $_GET['kata'];
            $tindo = $_GET['kata'];
        }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="script/css/bootstrap.css" >
    <link rel="stylesheet" href="script/css/style.css" >
    <title>Aplikasi Translate</title>
  </head>
  <body>
        <nav class="navbar navbar-light shadow-sm">
            <span class="navbar-brand mb-0 h1">Sunda Translate</span>
        </nav>
        <div class="container py-3">
        
        <a href="index.php" class="btn btn-translate shadow-sm mr-2 active"><?= icon('TEXT', '#1A73E8') ?> Text</a>
        <a href="data.php" class="btn btn-translate shadow-sm"><?= icon('FILE', '#1A73E8') ?> Kelola data</a>
        <div class="card card-body rounded-lg bordered mt-3 shadow-sm py-0 px-0">
                <div class="py-1 row px-3 d-flex flex-row align-items-center justify-content-around w-screen">
                    <h3 class="text-translate">Sunda</h3>
                    <?= icon('SWITCH', '#1A73E8') ?>
                    <h3 class="text-translate">Indonesia</h3>
                </div>
                <hr>
                <form method="GET" action="" >
                    <div class="row">
                        <div class=" col-md-6 px-md-5 px-4 ">
                            <input type="text" name="kata" autofocus='true' placeholder="Sunda" value="<?= $tsunda ?>" class="input-translate" id="kata" aria-describedby="emailHelp">
                        </div>
                        <div class=" col-md-6  px-4">
                            <h3 class="text-muted"><?= $tindo ?></h3>
                        </div>
                    </div>
                    <div class="px-5 py-3 row justify-content-end">
                        <a class="btn shadow-sm btn-light rounded-pill mt-5 mr-2" href="index.php" ><?= icon('TRASH', '#000') ?>  Clear</a>
                        <button class="btn btn-primary rounded-pill mt-5" name="submit" ><?= icon('TRANSLATE', '#fff') ?>  Translate</button>
                    </div>
                </form>
        </div>
        <?php if(isset($selaras)) { ?>
        <div class="card card-body mt-3">
            <p class="text-muted">Selaras dengan <span class="font-weight-bold"><?= $_GET['kata'] ?></span></p>
            <div class="row">
            <?php foreach($selaras as $ksama) : ?>
                <a href="index.php?kata=<?= $ksama['sunda'] ?>&submit=" class="btn btn-light shadow-sm mx-2 my-2 rounded-pill"><?= $ksama['sunda'] ?></a>
            <?php endforeach ?>
            </div>
        </div>
        <?php } ?>
    </div>

  </body>
</html>