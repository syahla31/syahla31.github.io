<html>
    <head>
        <style>
            #agama{
                width: 180px;
            }
            #submit{
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 8px 16px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 2px 1px;
                width: 120px;
                transition-duration: 0.4s;
                cursor: pointer;
                background-color: white;
                color: black;
                border: 2px solid #555555;
            }
            #submit:hover{
                background-color: #555555;
                color: white;
            }

        </style>
    </head>
    <body>
        <div id="content">
            <table>
                <form action="prosesDaftar.php" method="get">
                    <tr>
                        <td> ID </td>
                        <td>: <input type="text" name="id"></td>
                    </tr>
                    <tr>
                        <td> Nama </td>
                        <td>: <input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td> Alamat </td>
                        <td>: <textarea name="alamat" cols="20" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td> No Telp </td>
                        <td>: <input type="number" name="no_telp"></td>
                    </tr>
                    <tr>
                        <td> Jenis Kelamin </td>
                        <td>
                            <p>:
                                <input type='radio' name='jk' value='Pria' />Pria
                                <input type='radio' name='jk' value='Perempuan' />Perempuan
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Agama </td>
                        <td>: <select type='text' name='agama' id="agama" autocomplete="off">
                                <option value="Islam"> Islam </option>
                                <option value="Protestan"> Protestan </option>
                                <option value="Katolik"> Katolik </option>
                                <option value="Hindu"> Hindu </option>
                                <option value="Buddha"> Buddha </option>
                                <option value="Konghucu"> Konghucu </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><br><input type="submit" name="kirim" value="Daftar" id="submit"></td>
                    </tr>
                </form>
            </table>
        </div>
    </body>
</html>