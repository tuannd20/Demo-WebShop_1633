
<?php 
   session_start();
   // Kiểm tra tài khoản đăng nhập có tồn tại ko -> isset
   if(!isset($_SESSION['Login_User'])){
       header('location:login.php');
   }
   include('form_header.php');
?>
<?php 
   include('database.php');
    $products = [];
    $getCategoriesQuery = "SELECT DISTINCT category FROM products ORDER BY category ASC";
    $categoryResult = mysqli_query($conn, $getCategoriesQuery);
    
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        array_push($products, $row);
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- link Icon -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card mb-2">
        <img src="images/img.jpg" class="card-img-top" style="height:500px; width:90%; margin:auto;" alt="">
        <div class="card-body">
            <h5 class="card-title text-center">WellCome To Shop Flute of GCD0807B</h5>
        </div>
    </div>
    <h3 style="margin-left: 2%;"> <?php  echo($_SESSION['Login_User'])?> Login successfully </h3>
<!-- 
    <section class="menu-left"> 
            <div class="content-left">
                <h5>PRODUCT PORTFOLIO</h3>
                <ul>
                    <li><a href="#">Horizontal flute</a></li>
                    <li><a href="#">Gourd flute</a></li>
                    <li><a href="#">Cat flute</a></li>
                    <li><a href="#">Dizi flute</a></li>
                    <li><a href="#">Course</a></li>
                    <li><a href="#">Professional bamboo flute</a></li>
                </ul>
            </div>
    </div> -->
    <!-- </section> -->
    <div class="container">
        <?php  while($categoryName = mysqli_fetch_assoc($categoryResult)) {?>
        <h3><?php echo $categoryName['category'] ?></h3>
        <!-- <h3>Flute horizontal</h3> -->
        <div class="row">
        <?php foreach($products as $product) { ?>           
            <?php if($product['category'] == $categoryName['category']) { ?>
            <div class="col-lg-3" style="border-radius: 1px solid #333">
                <div class="card" style="width: 18rem;">
                    <img src="images/<?php echo $product['image'] ?>" class="card-img-top" style="height: 260px;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $product['nameProduct'] ?> GCD Flute</h5>
                        <p class="card-text">Price: <?php echo $product['price'] ?>VNĐ</p>
                        <button type="submit"class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/flute03.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Flute Tone R4</h5>
                        <p class="card-text">Price: $15</p>
                        <button type="submit"class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/flute03.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Flute Tone A4</h5>
                        <p class="card-text">Price: $15</p>
                        <button type="submit"class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/flute01.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Flute Tone Bh3</h5>
                        <p class="card-text">Price: $15</p>
                        <button type="submit"class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <h3>Flute cat</h3>
        <div class="row">
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/cat-flute01.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cat-Flute</h5>
                        <p class="card-text">Price: $15</p>
                        <button type="submit"class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/cat-flute03.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cat-Flute</h5>
                        <p class="card-text">Price: $30</p>
                        <button type="submit"class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/cat-flute02.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cat-Flute</h5>
                        <p class="card-text">Price: $100</p>
                        <button type="submit"class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/cat-flute03.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cat-Flute</h5>
                        <p class="card-text">Price: $25</p>
                        <button type="submit"class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div> -->
                <?php } ?>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
    <!-- ============= Featured Categories ================= -->
    <!-- <div class="list-category">
        <div class="category">
            <h2>Best-selling Product</h2>
            <div class="show-cat">
                <img src="images/flute01.jpg" alt="">
            </div>
            <div class="show-cat">
                <img src="images/cat-flute02.jpg" alt="">
            </div>
            <div class="show-cat">
                <img src="images/sao-bau04.jpg" alt="">
            </div>
        </div>
    </div> -->
    <!-- <div class="small-container">

        <div class="row row-2  d-flex flex-wrap">
            <h2>Categories</h2>
                <select style="width:180px;">
                    <option>Flute horizontal</option>
                    <option>Flute gourd</option>
                    <option>Flute Di-zi</option>
                    <option>Flute cat</option>
                </select>
        </div>
    </div> -->
</body>
</html>

<?php
    include('footer.php');
?>