<?php require_once 'core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="./view/public/css/style.css">
  <link rel="stylesheet" href="./view/public/css/navbar.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <style>
    .to {
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      grid-template-rows: minmax(100px, auto);
      padding-bottom: 40px;
    }

    .form {
      border: 1px solid #80808000;
      grid-column: 6/9;
      grid-row: 3;
      height: 470px;
      width: 292px;
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
      border-radius: 15px;
      box-shadow: 0px 0px 14px 0px grey;
      background-color: white;  
    }

    h2 {
      margin-top: 50px;
      margin-bottom: 30px;
    }

    i.fab.fa-app-store-ios {
      display: block;
      margin-bottom: 50px;
      font-size: 28px;
    }

    label {
      margin-left: -126px;
      display: block;
      font-weight: lighter;

    }

    input {
      display: block;
      border-bottom: 2px solid #00BCD4;
      margin-top: 6px;
      margin-bottom: 10px;
      outline-style: none;
    }

    input[type="text"] {
      padding: 5px;
      width: 70%;
    }

    input#submit {
      padding: 7px;
      width: 50%;
      border-radius: 10px;
      border: none;
      position: absolute;
      bottom: 10px;
      cursor: pointer;

    }
  </style>
  <?php include 'inc/headertop.php'; ?>

  <form action="register.php" method="post">
    <div class="to">
      <div class="form">
        <h2>Đăng kí</h2>
        <label style="margin-left: -150px;">Nhập email</label>
        <input type="email" name="email" placeholder="Nhập email">
        <label>Nhập mật khẩu</label>
        <input type="password" name="password" placeholder="Nhập password">
        <label style="margin-left: -100px;">Nhập lại mật khẩu</label>
        <input type="password" name="password" placeholder="Nhập password">
        <button type="submit">Đăng kí</button>
      </div>
    </div>
  </form>
  <?php include 'inc/footer.php'; ?>
</body>

</html>