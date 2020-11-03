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
<?php
$user_id = $_GET['id'];
$sql = "SELECT*FROM post WHERE id = '$user_id'";
$row = mysqli_fetch_array(mysqli_query($conn, $sql));
$check = $row['title'];
if (isset($_POST['sbm'])) {
    $title = $_POST['title'];
    $about = $_POST['about'];
    $content = $_POST['content'];
    $pic = $_POST['pic'];
    $sql = "SELECT*FROM users WHERE title = '$title' AND title != '$check' ";
    $query = mysqli_query($conn, $sql);
    $num_row = mysqli_num_rows($query);
    if ($num_row > 0) {
        $error = '<div class="alert alert-danger">Tên bài viết đã tồn tại!</div>';
    } 
    else {
            $sql = "UPDATE post SET 
            title='$title', 
            short_description='$about', 
            content='$content', 
            image='$pic', 
            update_at=NOW()
          WHERE id = '$user_id'";

            mysqli_query($conn, $sql);
            header("location: index.php?page_layout=post    ");
    }
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-12 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="../admin/index.php"><i class="fas fa-home"></i></a></li>
            <li><a href="index.php?page_layout=user">Quản lý bài viết</a></li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Bài viết: <?php echo $row['title'] ?></h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">
                        <?php
                        if (isset($error)) {
                            echo $error;
                        }
                        ?>
                        <form role="form" method="post">
                            <div class="form-group">
                                <label>Tên bài viết</label>
                                <input type="text" name="title" required class="form-control" value="<?php echo $row['title'] ?>" placeholder="">
                            </div>
                            <label>Giới thiệu</label>
                            <div class="form-group">
                                
                                <textarea name="about" id="about" cols="92" rows="5"><?php echo $row['short_description'] ?></textarea>
                            </div>
                            <label>Nội dung</label>
                            <div class="form-group">
                                <textarea name="content" id="content" cols="92" rows="10"><?php echo $row['content'] ?></textarea>
                                <script>
                                    CKEDITOR.replace('content');
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" name="pic">
                                    <br>
                                    <div>
                                        <img width="500px" height="300" src="../image/<?php echo $row['image'] ?>">
                                    </div>
                            </div>
                            <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div>