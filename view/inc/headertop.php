<style>
  .text-gray-200{
    color: white;
  }
</style>
<div class=" gsystem p-2 text-center bg-blue gird-system">
        <div class="row">
            <div class="col">
                <div class="left">
                    <p>Free shipping with order over $65</p>
                </div>
            </div>
            <div class="col">
                <div class="right">
                <div class="login">
                <?php if (isset($_SESSION['user'])) { ?>
                    <a href="logout.php" class="text-gray-200 hover:text-white transition">Logout</a>
                <?php } else { ?>
                    <a href="login.php" class="text-gray-200 hover:text-white transition  ">Login</a>
                    <span class="text-white">/</span>
                    <a href="register.php" class="text-gray-200 hover:text-white transition">Register</a>
                <?php } ?>

          </div>
                </div>
            </div>
        </div>
    </div>
