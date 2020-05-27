<?php 
    include 'koneksi.php';
    $sort = 'ASC';
    if(isset($_GET['sort'])){
        $sort = $_GET['sort'];
    }
    $res = $Translate->get_vocabs("ORDER BY sunda ". $sort);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="script/css/bootstrap.css" >
    <title>Halaman Kelola Data</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Kelola Data</h1>
        <div class="row">
            <div class="col-4">
                <a href="index.php" class="btn btn-warning">Kembali</a>
                <a href="create.php" class="btn btn-success">Tambah Kata</a>
                <span class="text-muted">Jumlah vocab : <?= $Translate->count_vocabs()['jml']; ?></span>
            </div>
            <div class="col-4">
                <span class="text-muted">Sort By:  </span>
                <a href="?sort=ASC" class="btn btn-secondary rounded-pill">ASC</a>
                <a href="?sort=DESC" class="btn btn-secondary rounded-pill">DESC</a>
            </div>
            <div class="col-4">
                <input type="text" id="search-input" class="form-control" placeholder="cari kata disini" >
            </div>
        </div>
        <table class="table table-striped table-dark mt-3" id="tabel-data" >
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Sunda</th>
                    <th scope="col">Indo</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach($res as $row) : ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $row['sunda']; ?></td>
                    <td><?php echo $row['indo']; ?></td>
                    <td>
                        <a href="delete.php?id=<?= $row['id_vocab'] ?>" class="btn btn-danger">Delete</a>
                        <a href="update.php?id=<?= $row['id_vocab'] ?>" class="btn btn-warning">Update</a>
                    </td>
                </tr>
            <?php $i++ ?>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <script src="script/js/main.js"></script>
  </body>
</html>