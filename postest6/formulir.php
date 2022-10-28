<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>event</title>
    <link rel="stylesheet" href="crudstyle.css">
</head>
<body>
    <header>
        <h2></h2>
    </header>
    
    <div class="form-class">
        <h3>Tambah Event</h3>
        <form action="tambah.php" method="post" enctype="multipart/form-data">
            
            <label for="">Nama  Skin</label><br>
            <input type="text" name="namaskin" class="form-text"><br>
            
            <label for="">Hero</label><br>
            <input type="text" name="hero" class="form-text"><br>
            
            <label for="">Rilis</label><br>
            <input type="text" name="rilis" class="form-text"><br>
            
            <label for="">Tanggal Rilis : </label><br>
            <input type="date" name="tanggal" class="form-text"><br>

            <label for="">Bukti Rilis</label><br>
            <input type="file" name="gambar" class="form-text"><br>


            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>