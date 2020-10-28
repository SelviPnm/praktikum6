<?php
    require_once("koneksi.php");

    $idpaket = NULL;
    $isipaket = $_POST['isipaket'];
    $tujuan = $_POST['tujuan'];

    if ($tujuan == "kosong"){
        echo "<h1>Anda Belum Mengisi Tujuan Paket!!!</h1>";
        echo "<p><button><a href='tblpaket.php' style='text-decoration:none; color:black'>Kembali</a></button></p>";

    } else if($isipaket == ""){
        echo "<h1>Harap Mengisi Bagian Isi Paket!!!</h1>";
        echo "<p><button><a href='tblpaket.php' style='text-decoration:none; color:black'>Kembali</a></button></p>";
    } 
    
    else{
        $query = "INSERT INTO paket(id_paket, isi_paket, tujuan_paket) 
                    VALUES ('$idpaket','$isipaket','$tujuanpaket')";
        $result = mysqli_query($connect, $query);
        header("location: utama.php");
    }
?>