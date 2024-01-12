<?php
require "functions.php";

$id = $_GET['id'];

if($id){
    
    $query = "DELETE FROM profile WHERE id='$id'";
    $result = mysqli_query($db, $query);
    echo "
    <script>
        alert('Data berhasil dihapus');
    <script/>
    ";
    header("Location: index.php");
    exit;
}

?>