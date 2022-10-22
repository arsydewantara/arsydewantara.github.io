<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $namaskin = $_POST['namaskin'];
    $hero = $_POST['hero'];
    $rilis = $_POST['rilis'];

    $kirim = mysqli_query($db, "INSERT INTO eventt (namaskin,hero,rilis) VALUES ('$namaskin','$hero','$rilis')");

    if($kirim){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:menucrud.php");
    }else {
        echo "gagal mengirim";
    }
}