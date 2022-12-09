<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $no_telp = $_GET['no_telp'];
    $jk = $_GET['jk'];
    $agama = $_GET['agama'];

    $sql="INSERT INTO member(id, nama, alamat, no_telp, jk, agama)
        VALUE('$id', '$nama', '$alamat', '$no_telp', '$jk', '$agama')";

    if (mysqli_query($connect, $sql)) {
        header('location:daftarMember.php');
    } else {
        echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>