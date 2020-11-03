<?php
if (!defined("tem") && $_SESSION["user"]["user_lv"] == 2) { ?>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <?php  echo "Bạn không có quyền truy cập file này" . "<br/>";?>
            <button><a href="index.php">Trở về</a></button>
        </div>
        <!--/.row-->



    </div>
<?php die('');
} ?>