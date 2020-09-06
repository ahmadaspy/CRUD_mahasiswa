<?php
    // sebuah penggunaan function dengan require php yg lain guna mempermudah atau me modularkan\
    require 'function.php';
    
    

    if(isset($_POST["submit"])){
        

        if( tambah_data($_POST) > 0){
            echo "<script>
            
            alert('Data Berhasil Ditambahkan !');
            document.location.href = 'index.php';
            
            </script>";
        }else{
            echo '<script>
            alert("Data error");
            document.location.href = "index.php;
            
            </script>';
        }
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
    
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 text-center">Data Mahasiswa</h1>
                
            </div>
        </div>
        <form action="" method="post">
            <a href="index.php" class="btn btn-success"><i class="fas fa-long-arrow-alt-left"></i></i> Kembali</a>
            <div class="form-group">
                <label>Nama</label>
                <input class="form-control" type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input class="form-control" type="text" name="nim" required>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <input class="form-control" type="text" name="jurusan" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email" aria-describedby="Please input Email" name="email" required>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
            <button class="btn btn-danger" type="reset" name="reset">Reset</button>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>