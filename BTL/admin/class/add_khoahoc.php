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
if (isset($_POST['sbm'])) {
    $name = $_POST['name'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $schedule = $_POST['schedule'];
    $about = $_POST['about'];

    // anh

    //kiểm tra tên khóa học tồn tại hay ko 
    $sql = "SELECT*FROM class WHERE name = '$name'";
    $query = mysqli_query($conn, $sql);
    $num_row = mysqli_num_rows($query);
    if ($num_row > 0) {
        $error = '<div class="alert alert-danger">tên khóa học đã tồn tại !</div>';
    } else {
        $class_image = $_FILES['image']['name'];
        $tmp_name  = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name, "img/" . $class_image);
        $sql = "INSERT INTO class(
        name,
        picture,
        about,
        start,
        end,
        schedule
        )
    VALUES('$name',
    '$class_image',
    '$about',
    '$start',
    '$end',
    '$schedule')";
        mysqli_query($conn, $sql);
        header("location:index.php?page_layout=product");
    }
}
?>


    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="../admin/index.php"><i class="fas fa-home"></i></a></li>
                <li><a href="index.php?page_layout=class">Quản lý khóa học</a></li>
                <li class="active">Thêm thành viên</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm khóa học</h1>
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
                                    <input type="text" name="name" required class="form-control" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label>ngày bắt đầu</label>
                                    <input type="date" name="start" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>ngày bắt đầu</label>
                                    <input type="date" name="end" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label> lịch học</label>
                                    <select name="schedule" class="form-control">
                                        <option selected value=1>Từ 18h-20h, Thứ 2,4,6</option>
                                        <option value=2>Từ 7h-9h, Thứ 2,4,6</option>
                                        <option value=3>Từ 18h-20h, Thứ 3,5,7</option>
                                        <option value=4>Từ 7h-9h, Thứ 3,5,7</option>
                                    </select>
                                </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ảnh sản phẩm</label>
                                <input type="file" required name="image">
                                <br>
                                <div>
                                    <img width="160px" height="215" src="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nội dung khóa học</label>
                            <textarea name="about" required class="form-control" rows="3"></textarea>
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


    <!--/.main-->