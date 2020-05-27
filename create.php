<?php 
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $sunda = $_POST['sunda'];
        $indo = $_POST['indo'];
        $Translate->create_vocab($sunda, $indo);
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="script/css/bootstrap.css" >
    <title>Halaman Tambah Data</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Tambah Data</h1>
        <a href="data.php" class="btn btn-warning">Kembali</a>
        <form class="mt-3" method="POST" action="" >
            <div class="form-group">
                <label for="sunda">Kata Sunda</label>
                <input type="text" autofocus='true' name="sunda" class="form-control" id="sunda" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="indo">Indonesia</label>
                <input type="text" name="indo" class="form-control" id="indo">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>