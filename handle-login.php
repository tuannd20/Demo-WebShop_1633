<?php 
session_start();
   include 'database.php';

         $username = $_POST['username'];
         $password = $_POST['password'];
         // SQL query for check user table in mySQL 
         $sql = "SELECT * FROM users WHERE userName='$username' AND userPass ='$password' ";
         // Run sql query
         $result = mysqli_query($conn, $sql);
         $row = mysqli_fetch_assoc($result); // Tìm cụ thể trên gg
             
         if ($row == 0){
            echo '<script language="javascript">alert("Password or username incorrect !!! try again!!"); window.location="login.php";</script>';
            header('location: login.php');
         }
         else{
            $_SESSION['Login_User' ]= $row['userName'];
            header('location: index.php');
            // $_SESSION['avatar_User' ]= $row['avatar'];
            // header('location: profile.php');
            // if ($row == 0){
            //    header('location: login.php');
            // }
            // else{

            // }
         }
         echo ($username) ;
         echo ($password) ;
?>