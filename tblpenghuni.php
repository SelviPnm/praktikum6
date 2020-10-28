<!doctype html>
<html>
<head>
    <title>Input Penghuni</title>
</head>
<body>
    <h1>Data Penghuni</h1>
    <form action="editpenghuni.php" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Nomor Kamar</td>
            <td><input type="text" name="kamar"></td>
        </tr>
    </table>

        <input type="submit" name="submit" value="Tambahkan" />

    </form>
    
    <p><button><a href='utama.php' style='text-decoration:none; color:black'>Kembali</a></button></p>
</body>
</html>