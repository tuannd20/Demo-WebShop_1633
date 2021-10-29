<?php 
    include('database.php');

 
        $id = $_GET['id'];
        $productName = $_POST['name'];
        $image = $_POST['image'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        
        $sql = "UPDATE products
        SET nameProduct = '$productName', image= '$image', category =' $category', price='$price'
        WHERE id = $id";

        $result = mysqli_query($conn, $sql);
        header('location: form_product.php');
  

?>