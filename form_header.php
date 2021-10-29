<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- link Icon -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>ASM</title>
    <style>
        .text-end{
            margin-left: 50%;
        }
        .text-end button{
            height: 46px;
        }
        #myBtn {
            display: none; /* Mặc định button sẽ được ẩn*/
            position: fixed;
            bottom: 20px;
            right: 30px; 
            z-index: 99; /* button được ưu tiên hiển thị đè lên các phần khác*/
            border: none;
            outline: none;
            background-color: rgba(121, 121, 116, 0.904);
            color: white;
            cursor: pointer;
            padding: 12px;
            border-radius: 10px;
        }
         
        #myBtn:hover {
            background-color: rgb(119, 119, 221);
        }
    </style>
</head>
<body>
<!-- <header class="px-3 py-2 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
        <li>
          <a href="#" class="nav-link text-secondary">
            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
            Home
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
            Dashboard
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
            <i class="bi bi-cart3"></i>
            Orders
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
            Products
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"/></svg>
            Customers
          </a>
        </li>
      </ul>
    </div>
  </div>
</header> -->
<header class="px-3 py-2 bg-light text-black d-flex flex-wrap">
    <h3>Flute - GCD0807B</h3>
    <div class="text-end">
         <h5> <i class="fas fa-phone-alt"></i> Phone: 19001008</h5>
    </div>
</header>
<div class="px-3 py-2 border-bottom mb-3">
  <div class="container d-flex flex-wrap justify-content-center">
    <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" style="margin-left:-6%;">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="index.php" class="nav-link link-dark px-2 active">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">About</a></li>
            <li class="nav-item"><a href="profile.php" class="nav-link link-dark px-2">Account</a></li>
        </ul>
    </form>
    <div class="text-end">
      <button type="button" class="btn btn-light text-dark me-2"><a href="login.php" class="nav-link link-dark px-2">Log in</a></button>
      <button type="button" class="btn btn-primary"><a href="registration.php" class="nav-link link-dark px-2">Sign-up</a></button>
      <button type="button" class="btn btn-light"><a href="admin.php" target="_blank" class="nav-link link-dark px-2">Admin</a></button>
      <button type="button" class="btn btn-light"><a href="log-out.php" class="nav-link link-dark px-2">Log out</a></button>
    </div>
  </div>
</div>

<div class="b-example-divider"></div>
        <div class="container">
            <button id="myBtn" title="Go to top"><i style="font-size: 18px" class="fa fa-chevron-circle-up"></i></button>
        </div>
        <script>
        //Khi người dùng cuộn chuột thì gọi hàm scrollFunction
        window.onscroll = function() {scrollFunction()};
        // khai báo hàm scrollFunction
        function scrollFunction() {
            // Kiểm tra vị trí hiện tại của con trỏ so với nội dung trang
            if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
                //nếu lớn hơn 30px thì hiện button
                document.getElementById("myBtn").style.display = "block";
            } else {
                 //nếu nhỏ hơn30px thì ẩn button
                document.getElementById("myBtn").style.display = "none";
            }
        }
        //gán sự kiện click cho button
        document.getElementById('myBtn').addEventListener("click", function(){
            //Nếu button được click thì nhảy về đầu trang
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });
    </script>
</body>
</html>