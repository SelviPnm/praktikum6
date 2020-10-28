<!doctype html>
<html>
<head>
    <title> </title>
</head>
<body>
    <?php
    require_once("koneksi.php");
    
    $query = "SELECT * FROM penghuni";
    $result = mysqli_query($connect, $query);
    ?>

    <h1>Data Pemesan Paket</h1>
    <form action="paketan.php" method="post">
    <table>
        <tr>
            <td>Isi Paket</td>
            <td><input type="text" name="isipaket"></td>
        </tr>
        <tr>
            <td>Tujuan Paket</td>
            <td><select name="tujuan">
            <option value="kosong">pilih</option>
        <?php
            while($row = mysqli_fetch_assoc($result)){
        ?>
            <option value="<?php echo $row['nik'];?>"><?php echo "$row[nama]";?></option>
        <?php 
            }
        ?>
        </select>
        </td>
        </tr>
        </table>

        <input type="submit" name="submit" value="Tambahkan" />

    </form> 
        <p><button><a href='utama.php' style='text-decoration:none; color:black'>Kembali</a></button></p>
</body>
</html>