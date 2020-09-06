<?php
    require "function.php";
    $data_mhs = query("SELECT * FROM mahasiswa");
    if(isset($_POST['cari'])){
        $data_mhs = cari($_POST['search']);
    }
    if(isset($_POST['reset-search'])){
        $data_mhs = query("SELECT * FROM mahasiswa");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container-sm">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 text-center">Data Mahasiswa</h1>
                
            </div>
        </div>
        
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="data_tambah.php" class="btn btn-primary btn-sm "><i class="fas fa-plus"></i> Tambah Data </a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="" method="post">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit" name="cari">Search</button>
                    <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit" name="reset-search">Reset</button>
                </form>
            </div>
        </nav>
               
        
        <div class="overflow-auto">
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th colspan="2">Aksi</th>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
            </tr>
            </thead>
            <?php $a = 1;?>
            <?php foreach ($data_mhs as $row) :?>
            <tbody>
            <tr>
                <td scope="row"><?= $a++ ?></td>
                <td><a href="update.php?id=<?= $row['id']?>" class="btn btn-outline-success btn-sm"><i class="fas fa-edit"></i></a></td>
                <td><a href="hapus.php?id=<?=$row['id']?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus')"><i class="fas fa-user-minus"></i></a></td>
                <td><?= $row["id"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["nim"] ?></td>
                <td><?= $row["jurusan"] ?></td>
                <td><?= $row["email"] ?></td>
            </tr>
            </tbody>
            <?php endforeach;?>
        </table>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>