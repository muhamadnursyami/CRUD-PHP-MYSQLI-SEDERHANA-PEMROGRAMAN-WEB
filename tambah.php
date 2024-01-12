<?php 
    require 'functions.php';
    if($_POST){
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $jurusan = htmlspecialchars($_POST['jurusan']);

        $query =  "INSERT INTO profile VALUES ('', '$nama', '$email', '$jurusan')";
        $result = mysqli_query($db, $query);
        
        echo "
            <script>
                alert('berhasil menambahkan data')
            </script>
        ";
        
        header("Location: index.php");
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>

<body>
    <h1>Tambah data</h1>

    <form action="" method="post">

        <label for="nama">nama</label>
        <input type="text" name="nama" id="nama" required>
        <br>

        <label for="email">email</label>
        <input type="text" name="email" id="email" required>
        <br>
        <label for="jurusan">jurusan</label>
        <input type="text" name="jurusan" id="jurusan" required>
        <br>
        <button type="submit" name="submit"> tambah data!</button>
    </form>
</body>

</html>