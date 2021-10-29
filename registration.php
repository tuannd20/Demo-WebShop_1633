<?php
    session_start();
    include 'database.php';

    if (isset($_POST['register-btn'])){
        $username = ($_POST['username']);
        $email = ($_POST['email']);
        $password_1 = ($_POST['password_1']);
        $password_2 = ($_POST['password_2']);
        $avatar = ($_POST['avatar']);

        if ($password_1 = $password_2 ){
            // create user
            $password = $password_1; // encrypt password before storing in the database
            $sql = "INSERT INTO users (userName, userEmail, userPass, avatar) VALUES ('$username','$email','$password', '$avatar') ";
            $result = mysqli_query($conn, $sql);
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['username'] = $username;
            header("location: index.php");

        }
        else{
                $_SESSION['message'] = "The two password do not match";
        }
    }
?>

    <style>
        .main{
            margin: 40px auto;
            width: 40%;
            height: 80vh;
            color: white;
            background: #5F9EA0;
            text-align: center;
            border: 1px solid #B0C4DE;
            border-bottom: none;
            border-radius: 10px 10px 10px 10px;
            padding: 20px;
        }
        .form-dk{
            width: 78%;
            height: 60vh;
            margin: auto;
            margin-top: 5px;
            border-radius: 10px 10px 10px 10px;
            padding: 20px;
            border: 1px solid #B0C4DE;
            background: white;
            color: #333;
        }
        .input-group{
            margin: 10px 0px 10px 0px;
        }
        .input-group label{
            display: block;
            text-align: left;
            margin: 3px;
        }
        .input-group input{
            height: 30px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
        }
        .btn{
            padding: 10px;
            font-size: 15px;
            color: white;
            background: #5F9EA0;
            border: none;
            border-radius: 5px;
        }
        .file-avatar{
            display: flex;
        }
        .file-avatar input{
            margin-top: 4.6%;
            margin-left: 2%;
        }
    </style>
    <div class="main">
      <h2>Register</h2>
      <div class="main-form">
        <form class="form-dk" action="registration.php" method="POST">

           
            
            <div class="input-group">
                <label><b>Username:</b></label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label><b>Email:</b></label>
                <input type="email" name="email">
            </div>
            <div class="input-group">
                <label><b>Password:</b></label>
                <input type="password" name="password_1">
            </div>
            <div class="input-group">
                <label><b>Confirm password: </b></label>
                <input type="password" name="password_2">
            </div>
            <div class="file-avatar">
               <h3>Select your avatar:</h5>
               <input type="file" name="avatar" accept="images/">
            </div>
            <div class="input-group">
            <button type="submit" name="register-btn" class="btn"><b> Register </b></button>
            </div>
            <p>
                Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>
    </div>
    </div>