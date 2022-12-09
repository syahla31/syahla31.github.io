<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $query = "DELETE FROM member WHERE id='$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        header('location:daftarMember.php');
    } else {
        echo "Data gagal dihapus" . mysqli_error($connect);
    }
?>