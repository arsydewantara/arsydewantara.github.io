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
        <form action="tambah.php" method="post">
            
            <label for="">Nama  skin</label><br>
            <input type="text" name="namaskin" class="form-text"><br>
            
            <label for="">hero</label><br>
            <input type="text" name="hero" class="form-text"><br>
            
            <label for="">rilis</label><br>
            <input type="text" name="rilis" class="form-text"><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>