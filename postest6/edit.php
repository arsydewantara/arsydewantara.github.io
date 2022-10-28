<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM eventt WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $namaskin = $_POST['namaskin'];
        $hero = $_POST['hero'];
        $rilis = $_POST['rilis'];
     

        $update = mysqli_query($db, "UPDATE eventt SET namaskin='$namaskin', hero='$hero', rilis='$rilis' WHERE id='$id'");

        if($update){
            header("Location:menucrud.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENT</title>
    <link rel="stylesheet" href="crudstyle.css">
</head>
<body>
    <header>
        <h2>MENU EVENT</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit Data event</h3>
        <form action="" method="post">
            
            <label for="">Nama Skin</label><br>
            <input type="text" name="namaskin" class="form-text" value=<?=$row['namaskin'];?>><br>
            
            <label for="">Hero</label><br>
            <input type="text" name="hero" class="form-text" value=<?=$row['hero'];?>><br>
            
            <label for="">Rilis</label><br>
            <input type="text" name="rilis" class="form-text" value=<?=$row['rilis'];?>><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>