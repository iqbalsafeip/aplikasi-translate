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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>