<?php 
   session_start();
   // Kiểm tra tài khoản đăng nhập có tồn tại ko -> isset
   if(!isset($_SESSION['Login_Admin'])){
       header('location:admin-page.php');
   }
   include ('database.php');
   $sql_select = "SELECT * FROM products";
   $result = mysqli_query($conn, $sql_select);
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="form_admin.css">
    <title>Document</title>
</head>
<body>
      
    <h2> Hello Admin: <?php  echo($_SESSION['Login_Admin'])?> </h2>
    <a href="create.php"><button type="button" class="btn btn-success">Create Product</button></a>
    <a href="admin-page.php" style="margin-left:-0.1%;"><button type="button" class="btn btn-success">Home</button></a>
    <table>
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Function</th>   
        </tr>
      <?php while($row = mysqli_fetch_assoc($result)) {?>
        <tr> 
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['category']?></td>
                <td><?php echo $row['nameProduct']?></td> 
                <td class="image"><img src="images/<?php echo $row['image']?>" alt=""></td>
                <td><?php echo $row['price']?> VND</td>
                <td>
                <a href="updateProduct.php?id=<?php echo $row['id' ]?>"><button type="button" class="btn btn-success" id="btn1">Update</button></a>
                <a href="deleteProduct.php?id=<?php echo $row['id' ]?>"><button type="button" class="btn btn-danger" id="btn1">Delete</button></a>
                </td>
        </tr>
        <?php  } ?>
    </table>
</body>
</html>