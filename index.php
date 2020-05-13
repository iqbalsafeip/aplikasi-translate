<?php 
    include 'koneksi.php';
    include 'icons.php';
    $tindo='Terjemahan';
    $tsunda='';
    if(isset($_GET['submit']) && $_GET['kata'] != ''){
        $kata = $_GET['kata'];
        $data = $Translate->get_vocabs_like($kata);
        if($data){
            $tsunda = $data[0]['sunda'];
            $tindo = $data[0]['indo'];
        }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                            <input type="text" name="kata" value="<?= $tsunda ?>" class="input-translate" id="kata" aria-describedby="emailHelp">
                        </div>
                        <div class=" col-md-6  px-4">
                            <h3 class="text-muted"><?= $tindo ?></h3>
                        </div>
                    </div>
                    <div class="px-5 py-3 row justify-content-end">
                        <button class="btn btn-primary rounded-pill mt-5" name="submit" ><?= icon('TRANSLATE', '#fff') ?>  Translate</button>
                    </div>
                </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>