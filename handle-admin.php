<?php 
session_start();
   include 'database.php';

         $adminName = $_POST['adminName'];
         $password = $_POST['password'];
         // SQL query for check user table in mySQL 
         $sql = "SELECT * FROM admin WHERE adminName='$adminName' AND adminPass ='$password' ";
         // Run sql query
         $result = mysqli_query($conn, $sql);
         $row = mysqli_fetch_assoc($result); // Tìm cụ thể trên gg
             
         if ($row == 0){
            header('location: admin.php');
         }
         else{
            $_SESSION['Login_Admin' ]= $row['adminName'];
            header('location: admin-page.php');
         }
         echo ($username) ;
         echo ($password) ;
?>