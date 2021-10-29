<?php 
    include('database.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id='$id'";

    $result = mysqli_query($conn, $sql);
    header('location: form_product.php');
?>