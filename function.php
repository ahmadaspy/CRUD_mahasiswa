<?php
    // sebuah variabel yang memuat conection untuk database
    $conn = mysqli_connect("localhost", "root", "", "mahasiswa_coba");


    //merupakan function dengan menggunakan parameter yg dimana melakukan pengembalian data dari database
    function query($data){
        //global variabel merupakan cara untuk bisa scope variable tersebut bisa di luar scope dari function ini
        global $conn;
        // pengembalian data dengan parameter $data dimana di ketikan di require dari halaman lain
        $result = mysqli_query($conn, $data);
        // membuat sebuah array kosong yang nantinya di return oleh function ini
        $rowdata= [];
        while ($data_base = mysqli_fetch_assoc($result)){
            $rowdata[] = $data_base;
        }
        return $rowdata;
    }
    function tambah_data($data){
        global $conn;
        // penggunaa htmlspecialchars untuk prevent user di form memasukan tag html yang akan tereksekusi oleh web browser
        // $nama = htmlspecialchars($data['nama']);
        $nama = htmlspecialchars($data['nama']);
        $nim =htmlspecialchars($data['nim']);
        $jurusan = htmlspecialchars($data['jurusan']);
        $email = htmlspecialchars($data['email']);

        $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$jurusan', '$email')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    function hapus($data){
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $data");
        return mysqli_affected_rows($conn);

    }
    function update($data){
        global $conn;
        $id = $data['id'];
        $nama = htmlspecialchars($data['nama']);
        $nim =htmlspecialchars($data['nim']);
        $jurusan = htmlspecialchars($data['jurusan']);
        $email = htmlspecialchars($data['email']);

        $query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan', email='$email' WHERE id = $id";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    function cari($data){
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$data%' OR nim LIKE '%$data%' OR jurusan LIKE '%$data%' OR email LIKE '%$data%'";
        return query($query);
    }

?>