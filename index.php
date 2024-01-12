<?php 
    require 'functions.php';
    
    $query = "SELECT * FROM profile";
    $result = mysqli_query($db, $query);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>

<body>
    <h1>Data Orang</h1>
    <a href="tambah.php">Tambah data orang</a>
    <table border="1" cellspacing="0">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>email</th>
            <th>jurusan</th>
            <th>Kelola</th>
        </tr>
        <?php 
        $index = 1;
        while ($data = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo $index?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td><?php echo $data['jurusan']?></td>
            <td>
                <a href="edit.php?id=<?php echo $data['id'] ?>">Edit</a> |
                <a href="hapus.php?id=<?php echo $data['id']?>">Hapus</a>
            </td>

        </tr>

        <?php $index++; }  
        
        ?>

    </table>

</body>

</html>