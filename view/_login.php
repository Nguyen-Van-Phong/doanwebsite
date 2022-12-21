<?php require_once 'core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="./view/public/css/navbar.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./view/public/css/style.css">
    <link rel="stylesheet" href="./view/public/css/login.css">
    <link rel="stylesheet" href="./view/public/css/bootstrap.min.css">
</head>

<body>
    <style>
        .a {
            margin-bottom: 100px;
        }
    </style>
    <?php include 'inc/navbar.php'; ?>


    <div class="login">
        <form action="login.php" method="POST">
            <i style="color: red;"><?php if (isset($_SESSION['flash_message'])) echo  $_SESSION['flash_message'];
                                    unset($_SESSION['flash_message']); ?></i>
            <input type="hidden" name="id">
            <h2>Member login</h2>
            <br>
            <p>Email address</p>
            <br>
            <input type="email" name="email" placeholder="Enter email" required>
            <input type="hidden" name="id">
            <br>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter password" required>
            <br>
            <div class="check">
                <input type="checkbox">
                Remember me
            </div>
            <br>
            <button type="submit">Login</button>
            <a href="register.php">
                Đăng kí
            </a>
    </div>
    </form>
    <?php include 'inc/footer.php'; ?>




</body>

</html>