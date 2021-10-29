<?php 
    include('database.php');

    if(isset($_POST['submit']) ) {
        $productName = $_POST['name'];
        $image = $_POST['image'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        
        $sql = "INSERT INTO products (nameProduct, category, image, price) VALUES ('$productName', '$category', '$image','$price')";
        $result = mysqli_query($conn, $sql);
        header('location: form_product.php');
    }

?>