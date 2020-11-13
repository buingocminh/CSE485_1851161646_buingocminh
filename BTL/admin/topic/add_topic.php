<?php
if (!defined("Tem") ) { ?>

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
if (isset($_POST['sbm'])) {
    $name = $_POST['name'];
    $sql = "SELECT*FROM topic WHERE name = '$name' ";
    $query = mysqli_query($conn, $sql);
    $num_row = mysqli_num_rows($query);
    if ($num_row > 0) {
        $error = '<div class="alert alert-danger">Tên bài chủ đề đã tồn tại!</div>';
    } 
    else {
            $sql = "INSERT INTO topic (name)
            VALUES ('$name')";
            mysqli_query($conn, $sql);
            header("location: index.php?page_layout=topic");
    }
}
?>

<!-- máhgdasmnd -->
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="../admin/index.php"><i class="fas fa-home"></i></a></li>
                <li><a href="index.php?page_layout=class">Quản lý chủ đề</a></li>
                <li class="active">Thêm chủ đề</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
            <h1 class="page-header">Thêm chủ đề</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <?php
								if(isset($error)){
									echo $error;
								}
							?>  
                            <form role="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                <label>Tên chủ đề</label>
                                <input type="text" name="name" required class="form-control" value="" placeholder="">
                                </div>
                       
                        <button type="submit" name="sbm" class="btn btn-primary">Thêm mới</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

    </div>
    <!--/.main-->


    <!--/.main-->