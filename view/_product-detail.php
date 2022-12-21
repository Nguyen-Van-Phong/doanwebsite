<?php require_once 'core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./view/public/css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./view/public/css/style.css">
    <link rel="stylesheet" href="./view/public/css/bootstrap.min.css">
</head>

<body>
    <style>
        .punctuation{
            display: flex;
            margin-top: 20px;
        }
    </style>
    <?php include 'inc/headertop.php'; ?>
    <?php include 'inc/navbar.php'; ?>

    <!-- breadcrums -->
     <!-- card -->
     <div class="container cart-title">
        <h2>Cotegory</h2>
    </div>
    <section class=" container my-5">
        <div class="row">
            <?php $product = get_product($_GET['id']);?>
            <div class="col-lg-5 col-md-5 col-12 img-cart-product">
                <img class="big-img-cart " src="<?php echo $product['img']; ?>" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-12 text-cart-product">
                <h6>CART / CLOTHES</h6>
                <h3><?php echo $product['name']?></h3>
                <h2><?php echo $product['price']?></h2>
                <select class="my-3 p-2">
                    <option value="">Size</option>
                    <option value="">S</option>
                    <option value="">M</option>
                    <option value="">L</option>
                    <option value="">Xl</option>
                </select>
                <form action="cart.php" method="post">
                <input type="hidden" name="action" value="create">
                <input type="hidden" name="productId" value="<?php echo $product['id']; ?>">
                <!-- quantity -->
                <div class="mt-4">
                    <h3 class="text-sm text-gray-800 uppercase mb-1">Quantity</h3>
                    <div class="punctuation">

                
                        <input type="text" name="quantity" value="1" class="h8 w-8 text-base flex items-center justify-center" />
 
                        </div>
                </div>
                <div class="d-grid my-4">
                    <button class="btn btn-lg btn-dark" type="submit" id="bagBtn">
                        Add To Bag
                    </button>
                </div>
                <h4>Products Details</h4>
                <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Quo magnam omnis nemo magni iure deleniti eveniet expedita consequatur ipsam,
                    obcaecati eum optio blanditiis quibusdam consequuntur quam mollitia dolorum officia corrupti?
                </span>
            </div>
        </div>
    </section>

    <?php include 'inc/footer.php'; ?>
</body>

</html>