<?php
    $conn = mysqli_connect("localhost", "root", "", "mahasiswa_coba");
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

    //mysqli_fetch_row // untuk mengembalikan nilai index
    //mysqli_fetch_assoc // untuk mengembalikan nilai array assosiatif
    //mysqli_fetch_array // untuk mengembalikan nilai dari index dan assosiatif
    //mysqli_fetch_object // mengembealikan dengan bentuk object

    // penggunaan fetch_object
    // $data = mysqli_fetch_object($result);
    // var_dump($data -> nama);
    
    // penggunaan while untuk mengambil data sampai habis yang berada di database
    // while ($data = mysqli_fetch_assoc($result)){
    //     var_dump($data["nama"]);
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 text-center">Data Mahasiswa</h1>
                
            </div>
        </div>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
            </tr>
            <?php $a = 1;?>
            <?php while($data = mysqli_fetch_assoc($result)) :?>
            <tr>
                <td><?= $a++ ?></td>
                <td><?= $data["nama"] ?></td>
                <td><?= $data["nim"] ?></td>
                <td><?= $data["jurusan"] ?></td>
                <td><?= $data["email"] ?></td>
            </tr>
            <?php endwhile;?>
        </table>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>