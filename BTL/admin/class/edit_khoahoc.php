<?php
if (!defined("tem") && $_SESSION["user"]["user_lv"] == 2) { ?>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <?php echo "Bạn không có quyền truy cập file này" . "<br/>"; ?>
            <button><a href="index.php">Trở về</a></button>
        </div>
        <!--/.row-->
    </div>
<?php die('');
} ?>
<?php
if (isset($_GET["id"])) {
    $class_id = $_GET["id"];
    $sql = "SELECT*FROM class where id = '$class_id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    $check = $row['name'];
    // sua
    if (isset($_POST['sbm'])) {
        $name = $_POST['name'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $schedule = $_POST['schedule'];
        $about = $_POST['about'];
        // anh
        $sql = "SELECT*FROM class WHERE name = '$name' AND name != '$check'";
        $query = mysqli_query($conn, $sql);
        $num_row = mysqli_num_rows($query);
        if ($num_row > 0) {
            $error = '<div class="alert alert-danger">tên khóa học đã tồn tại !</div>';
        } else {
            if ($_FILES['image']['name'] == "") {
                $class_image = $row['picture'];
            } else {
                $class_image = $_FILES['image']['name'];
                $tmp_name  = $_FILES['image']['tmp_name'];
                move_uploaded_file($tmp_name, "img/" . $prd_image);
            }
             $sql = "UPDATE class SET
                name = '$name',
                picture = '$class_image',
                about ='$about',
                start = '$start',
                end = '$end',
                schedule = '$schedule',
                update_at=now()
                WHERE id = $class_id ";

            mysqli_query($conn, $sql);
            header("location:index.php?page_layout=class");
        }
    }
} else {
    header("location:index.php?page_layout=class");
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="../admin/index.php"><i class="fas fa-home"></i></a></li>
            <li><a href="index.php?page_layout=class">Quản lý khóa học</a></li>
            <li class="active">Sửa khóa học</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
    <div class="col-lg-12">
            <h1 class="page-header">Khóa học: <?php echo $row['name'] ?></h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <?php
                        if (isset($error)) {
                            echo $error;
                        }
                        ?>
                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Tên khóa học</label>
                                <input type="text" name="name" required class="form-control" placeholder="" value="<?php echo $row['name'] ?>">
                            </div>

                            <div class="form-group">
                                <label>ngày bắt đầu</label>
                                <input type="date" name="start" required class="form-control" value="<?php echo $row['start'] ?>">
                            </div>
                            <div class="form-group">
                                <label>ngày bắt đầu</label>
                                <input type="date" name="end" required class="form-control" value="<?php echo $row['end'] ?>">
                            </div>
                            <div class="form-group">
                                <label> lịch học</label>
                                <select name="schedule" class="form-control">
                                    <option <?php if ($row['schedule'] == 1) {
                                                echo 'selected';
                                            } ?>value=1>Từ 18h-20h, Thứ 2,4,6</option>
                                    <option <?php if ($row['schedule'] == 2) {
                                                echo 'selected';
                                            } ?> value=2>Từ 7h-9h, Thứ 2,4,6</option>
                                    <option <?php if ($row['schedule'] == 3) {
                                                echo 'selected';
                                            } ?> value=3>Từ 18h-20h, Thứ 3,5,7</option>
                                    <option <?php if ($row['schedule'] == 4) {
                                                echo 'selected';
                                            } ?> value=4>Từ 7h-9h, Thứ 3,5,7</option>
                                </select>
                            </div>


                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ảnh sản phẩm</label>
                            <input type="file" name="image">
                            <br>
                            <div>
                                <img width="160px" height="215" src="img/<?php echo $row['picture'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nội dung khóa học</label>
                        <textarea name="about" required class="form-control" rows="3"><?php echo $row['about'] ?></textarea>
                        <script>
                            CKEDITOR.replace("about");
                        </script>
                    </div>
                    <button type="submit" name="sbm" class="btn btn-primary">thêm mới</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div>
<!--/.main-->