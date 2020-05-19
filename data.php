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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Halaman Kelola Data</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Kelola Data</h1>
        <div class="row">
        <div class="col-8">
            <a href="index.php" class="btn btn-warning">Kembali</a>
            <a href="create.php" class="btn btn-success">Tambah Kata</a>
            <span class="text-muted">Jumlah vocab : <?= $Translate->count_vocabs()['jml']; ?></span>
        </div>
            <div class="col-4">
                <span class="text-muted">Sort By:  </span>
                <a href="?sort=ASC" class="btn btn-secondary rounded-pill">ASC</a>
                <a href="?sort=DESC" class="btn btn-secondary rounded-pill">DESC</a>
            </div>
        </div>
        <table class="table table-striped table-dark mt-3">
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>