<?php 

    require "functions.php";
    $id = $_GET['id'];
    
    $query = "SELECT * FROM profile WHERE id='$id'";
    $result = mysqli_query($db, $query);
    $data = mysqli_fetch_assoc($result);
    // var_dump($data);
    // echo $data['nama'];
    if($_POST){
        $id = $_POST['id'];
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $jurusan = htmlspecialchars($_POST['jurusan']);

        $query = "UPDATE profile SET nama='$nama', email='$email', jurusan='$jurusan'
                    WHERE id = '$id'
        ";

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
    <title>Update</title>
</head>

<body>
    <h2>Update data</h2>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <label for=" nama">nama</label>
        <input type="text" name="nama" id="nama" required value="<?php echo $data['nama'] ?>">
        <br>

        <label for="email">email</label>
        <input type="text" name="email" id="email" required value="<?php echo $data['email'] ?>">
        <br>
        <label for="jurusan">jurusan</label>
        <input type="text" name="jurusan" id="jurusan" required value="<?php echo $data['jurusan']?>">
        <br>
        <button type="submit" name="submit"> tambah data!</button>
    </form>
</body>

</html>