<?php require_once 'core/boot.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./view/public/css/style.scss" rel="stylesheet/scss" type="text/css">
    <!-- Bootstrap CSS v5.2.1 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./view/public/css/style.css">
    <link rel="stylesheet" href="./view/public/css/navbar.css">
    <link rel="stylesheet" href="./view/public/css/bootstrap.min.css">


</head>

<body>
    <style>
        h1{
            padding: 20px 30px;
        }
    </style>
    <?php include 'inc/headertop.php'; ?>

    <?php include 'inc/navbar.php'; ?>

    <?php include 'inc/banner.php'; ?>

    <div class="footer-banner p-3">
        <img src="./view/public/images/icon-pleats-kora-grey-02.png" height="300px" alt="">
        <div class="texxt">
            <span>2019 New Arrivals</span>
            <br>
            <b>Pleats kora store</b>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
        </div>
    </div>

    <div class="container">
        <div class="sanpham text-center">
            <h1>S???n ph???m m???i</h1>
            <ul class="d-flex">
                <li><a href="">T???T C???</a></li>
                <li><a href="">QU???N ??O</a></li>
                <li><a href="">GI??Y D??P</a></li>
                <li><a href="">PH??? KI???N & TRANG S???C</a></li>
                <li><a id="last" href="">T??I X??CH&BALO</a></li>
            </ul>
        </div>
        <div class="row m-4">
            <?php $product_list = get_all_products() ?>
            <?php foreach ($product_list as $product) { ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12 ">
                    <div class="card mt-5" style="width: 18rem;">
                    <a href="product-detail.php?id=<?php echo $product ['id']?>">
                        <img src="<?php echo $product['img']; ?>" class="card-img-top" alt="...">
                    </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $product['name']; ?></h5>
                            <p class="card-text text-center"><?php echo $product['price']; ?></p>
                            <a href="#" class="btn btn-primary  ">Th??m v??o gi??? h??ng</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
    <div class="container text-center">
        <a class="views-add" href="">Xem th??m s???n ph???m
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>

    <div class=" footer-head mt-4">
        <div class="row">
            <div class="col-lg-4 text-center icon-box">
                <div class="icon">
                    <i class="fa-solid fa-truck"></i>
                </div>
                <div class="text">
                    <h4>Mi???n ph?? giao h??ng</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam ???.</p>
                    <a class="icon-add" href=""><i class="fa-solid fa-arrow-right"></i></a>
                </div>

            </div>
            <div class="col-lg-4 text-center icon-box">
                <div class="icon">
                    <i class="fa-solid fa-truck"></i>
                </div>
                <div class="text">
                    <h4>?????i tr??? trong 30 ng??y</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam ???.</p>
                    <a class="icon-add" href=""><i class="fa-solid fa-arrow-right"></i></a>
                </div>

            </div>
            <div class="col-lg-4 text-center icon-box">
                <div class="icon">
                    <i class="fa-solid fa-truck"></i>
                </div>
                <div class="text">
                    <h4>Thanh to??n an to??n</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam ???.</p>
                    <a class="icon-add" href=""><i class="fa-solid fa-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="mainn-banner">
            <div class="row">
                <div class="col content-banner p-0">
                    <img src="./view/public/images/diamond-plaza-black.jpg" width="100%" height="500px" alt="">
                    <h5 class="linewith">M???ng khai tr????ng chi nh??nh m???i</h5>
                    <strong class="linehight">Sale off up
                        <br>
                        to 70%</strong>
                    <a class="banner-add" href="">Xem t???t c??? s???n ph???m
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col content-banner-right ">
                    <img src="./view/public/images/nguoi-mau-03.png" alt="">
                    <h3 class="lineheight text-center">Danh s??ch
                        <br>
                        s???n ph???m
                    </h3>
                    <div class="icon-banner">
                        <i class="fa-solid fa-person-dress"></i>
                    </div>
                    <a class="icon-ads" href=""><i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="main-heard text-center p-4 m-4">
            <p>Kh??ch h??ng n??i g?? v??? ch??ng t??i</p>
        </div>
        <div class="hidden-heard p-3 m-4">
            <img src="./view/public/images/nguoi-mau-01.png" alt="">
        </div>
        <div class="footer-heard text-center">
            <p> The overall use of flatsome is very VERY useful. It lacks very few, if any, things! I loved it and
                have created my first ever website Punsteronline.com! Best yet, flatsome gets free updates that are
                great! (and the support is amazing as well!:)</p>
        </div>
        <div class="hight-heard text-center p-3 m-3">
            <p>Mark Jance / Facebook</p>
        </div>
    </div>


    <div class="firts">
        <div class="container">
            <div class="last-resort ">
                <div class="row">
                <div class="col-lg-3 u p-0">
                            <img class="last-img" src="./view/public/images/gallery-01.jpg" alt="">
                        </div>
                        <div class="col-lg-3 u p-0 ">
                            <img class="last-img" src="./view/public/images/gallery-02.jpg" alt="">
                        </div>
                        <div class="col-lg-3 u p-0 ">
                            <img class="last-img" src="./view/public/images/gallery-03.jpg" alt="">
                        </div>
                        <div class="col-lg-3 u p-0 ">
                            <img class="last-img" src="./view/public/images/gallery-04.jpg" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 u p-0 ">
                            <img class="last-img" src="./view/public/images/gallery-05.jpg" alt="">
                        </div>
                        <div class="col-lg-3 u p-0 ">
                            <img class="last-img" src="./view/public/images/gallery-06.jpg" alt="">
                        </div>
                        <div class="col-lg-3 u p-0 ">
                            <img class="last-img" src="./view/public/images/gallery-07.jpg" alt="">
                        </div>
                        <div class="col-lg-3 u p-0 ">
                            <img class="last-img" src="././view/public/images/gallery-08.jpg" alt="">
                        </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row p-5 m-2 text-center">
            <div class="col-lg-4">
                <img src="./view/public/images/logo-brian-orlando-six.png" alt="">
            </div>
            <div class="col-lg-4">
                <img src="./view/public/images/logo-clark-downey.png" alt="">
            </div>
            <div class="col-lg-4">
                <img src="./view/public/images/logo-frk-island.png" alt="">
            </div>
        </div>
    </div>


    <header>
        <!-- place navbar here -->

    </header>
    <main>
    </main>
    <?php include 'inc/footer.php'; ?>

</body>

</html>