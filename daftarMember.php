<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styleTugas.css">
    </head>
    <body>
        <div id="content">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    include "koneksi.php";

                    $query="SELECT * FROM member";
                    $result=mysqli_query($connect, $query);

                    if (mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td> <?php echo $row["id"]?></td>
                    <td> <?php echo $row["nama"]?></td>
                    <td> <?php echo $row["alamat"]?></td>
                    <td> <?php echo $row["no_telp"]?></td>
                    <td> <?php echo $row["jk"]?></td>
                    <td> <?php echo $row["agama"]?></td>
                    <td>
                        <a href="editMember.php?id=<?php echo $row['id']; ?>" id="edit">Edit</a> |
                        <a href="hapusMember.php?id=<?php echo $row['id']; ?>" id="hapus" onclick="return confirm('Anda yakin?')">Hapus</a>
                    </td>
                <?php
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
                </tr> 
            </table>
        </div>
    </body>
</html>