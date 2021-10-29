<?php
    include('form_header.php');
?>
<?php 
    include('database.php');

    if(isset($_POST['submit']) ) {
        $fName = $_POST['firstName'];
        $lName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        
        $pro_sql = "INSERT INTO tb_customer (firstName, lastName, phone, address, cusEmail) VALUES 
                                ('$fName', '$lName', '$phone', '$address' ,'$email')";
        $result = mysqli_query($conn, $pro_sql);
        // header('location: profile.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- link Icon -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        .row{
            margin-left : 3%;
        }
        .container{
            display: flex;
        }
        .profile{
            margin-top: 5%;
            width: 80%;
            height: 60vh ;
            border-radius: 1px solid #333:
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="row">
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/cotra-avatar.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">User: cotradethuong</h5>
                        <h5 class="card-text ">Email: cotradethuong@gmail.com</h5>
                        <a href="#" class="btn btn-primary">Update Account</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="profile">
            <form action="" method="POST" class="row g-3 needs-validation" novalidate>
                <div class="col-md-4 position-relative">
                    <label for="validationTooltip01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationTooltip01" value="" required name="firstName">
                    <div class="valid-tooltip">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="validationTooltip02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationTooltip02" value="" required name="lastName">
                    <div class="valid-tooltip">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="validationTooltipUsername" class="form-label">Email</label>
                    <div class="input-group has-validation">
                    <!-- <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span> -->
                    <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required name="email">
                    <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                    </div>
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="validationTooltip03" class="form-label">Address</label>
                    <input type="text" class="form-control" id="validationTooltip03" required name="address">
                    <div class="invalid-tooltip">
                    Please provide a valid city.
                    </div>
                </div>
                
                <div class="col-md-3 position-relative">
                    <label for="validationTooltip05" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="validationTooltip05" required name="phone">
                    <div class="invalid-tooltip">
                    Please provide a valid zip.
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit"  name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

<?php
    include('footer.php');
?>