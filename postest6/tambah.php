<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $nama_skin = $_POST['namaskin'];
    $hero = $_POST['hero'];
    $rilis = $_POST['rilis'];
    $tanggal = $_POST['tanggal'];

    $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));

        $gambar_baru = "$nama_skin.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){

        $result = mysqli_query($db, "INSERT INTO eventt VALUES ('','$nama_skin','$hero','$rilis','$tanggal','$gambar_baru')");

        if($result){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
            header("Location:menucrud.php");
        }else {
            echo "gagal mengirim";
        }
        }
}
?>