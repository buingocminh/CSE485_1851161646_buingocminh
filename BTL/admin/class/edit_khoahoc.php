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
    if(isset($_GET["id"])){
        $class_id = $_GET["id"];
        $sql = "SELECT*FROM class where id = '$class_id'";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($query);

        // sua
        if(isset($_POST['sbm'])){
            $prd_name = $_POST['prd_name'];
            $prd_price = $_POST['prd_price'];
            $prd_warranty = $_POST['prd_warranty'];
            $prd_accessories = $_POST['prd_accessories'];
            $prd_promotion = $_POST['prd_promotion'];
            $prd_new = $_POST['prd_new'];

            // anh
            if($_FILES['prd_image']['name'] == ""){
                $prd_image = $row['prd_image'];
            }else{
                $prd_image = $_FILES['prd_image']['name'];
                $tmp_name  = $_FILES['prd_image']['tmp_name'];
                move_uploaded_file($tmp_name,"img/product/".$prd_image);
            }

            $cat_id = $_POST['cat_id'];
            $prd_status = $_POST['prd_status'];
            if(isset($_POST['prd_featured'])){
                $prd_featured = $_POST['prd_featured'];
            }else{
                $prd_featured = 0;
            }
            $prd_details = $_POST['prd_details'];

            $sql = "UPDATE product SET
                prd_name = '$prd_name',
                prd_price = '$prd_price',
                prd_warranty ='$prd_warranty',
                prd_accessories = '$prd_accessories',
                prd_promotion = '$prd_promotion',
                prd_new = '$prd_new',
                prd_image ='$prd_image',
                cat_id = '$cat_id',
                prd_status = '$prd_status',
                prd_featured = '$prd_featured',
                prd_details = '$prd_details'
                WHERE prd_id = '$prd_id' ";

            mysqli_query($conn,$sql);
            header("location:index.php?page_layout=product");
        }
    }else{
        header("location:index.php?page_layout=class");
    }

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="index.php?page_layout=product">Quản lý sản phẩm</a></li>
				<li class="active"><?php echo $row['prd_name']; ?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm: <?php echo $row['prd_name']; ?></h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <form role="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Tên khóa học</label>
                                    <input type="text" name="prd_name" required class="form-control" value="<?php echo $row['prd_name']; ?>"  placeholder="">
                                </div>
                                                                
                                <div class="form-group">
                                    <label>ngày bắt đầu</label>
                                    <input type="date" name="prd_price" required value="<?php echo $row['prd_price']; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>ngày bắt đầu</label>
                                    <input type="date" name="prd_warranty" required value="<?php echo $row['prd_warranty']; ?>" class="form-control">
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
                                    <input type="file" name="prd_image">
                                    <br>
                                    <div>
                                        <img width="160px" height="215" src="img/product/<?php echo $row['prd_image']; ?>">
                                    </div>
                                </div>

                                
                                
                               
                            </div>
                            <div class="form-group">
                                        <label>Mô tả sản phẩm</label>
                                        <textarea name="prd_details" required class="form-control" rows="3"><?php echo $row['prd_details']; ?></textarea>
                                        <script>
                                            CKEDITOR.replace("prd_details");
                                        </script>
                            </div>
                            <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
		
	</div>	<!--/.main-->	

    
    <!--/.main-->