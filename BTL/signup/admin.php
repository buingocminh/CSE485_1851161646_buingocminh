<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location:login-page.php");
        exit();
    }

    include("includes/header.php");
?>
      <main class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Chào mừng bạn đã đăng nhập thành công ....</h3>
            </div>
        </div>
      </main>
<?php
    include("includes/footer.php");
?>