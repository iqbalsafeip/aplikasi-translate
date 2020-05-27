<?php 
    include 'koneksi.php';

    $data = $Translate->get_vocab_byId($_GET['id']);

    if(isset($_POST['submit'])){
        $sunda = $_POST['sunda'];
        $indo = $_POST['indo'];
        $Translate->update_vocab($sunda, $indo, $_GET['id']);
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="script/css/bootstrap.css" >
    <title>Halaman Update Data</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Update Data</h1>
        <a href="data.php" class="btn btn-warning">Kembali</a>
        <form class="mt-3" method="POST" action="" >
            <div class="form-group">
                <label for="sunda">Kata Sunda</label>
                <input type="text" name="sunda" value="<?= $data['sunda'] ?>" class="form-control" id="sunda" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="indo">Indonesia</label>
                <input type="text" name="indo" value="<?= $data['indo'] ?>" class="form-control" id="indo">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
  </body>
</html>