<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trường dạy lái xe Thống Nhất</title>
    <link rel="icon" href="../image/favicon.ico" type="image/icon">
    <!-- css -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/css_menu.css">
    <link rel="stylesheet" href="../css/css_main.css">
    <link rel="stylesheet" href="../css/reponsive.css">
    <!-- script -->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/owl.carousel.js"></script>
    <script src="https://kit.fontawesome.com/99f845d262.js" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/main-script.js"></script>
</head>

<body>
<?php
    require_once('../admin/connect.php');
    include('../include/header.php');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8  col-sm-12">
                <div class="pagecurrent">
                    <p><a href="../index.php">Trang chủ</a> <i class="fa fa-angle-double-right"></i>Bản tin</p>
                </div>

    <?php
        if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="SELECT * FROM post WHERE id=$id";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
    ?> 
    <div class="bx-detail">
                    <div class="title-detail"><?php echo $row['title'] ?></div>
                    <div class="info-below">
                        <div class="boxshare">
                            <div class="social-links">
                                <a href="#" target="_blank"><i class="fa fa-facebook"> <span>share</span></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"> <span>share</span></i></a>
                                <a href="#" target="_blank"><i class="fa fa-google-plus"><span> share</span></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail-main">
                    <i><?php echo $row['short_description'] ?></i>
                    <br>
                    <?php echo $row['content']?>
    </div>
   
   
   <?php       
        }
        else{
    ?>
                <div id="service">
                    <div class="list-service">
                                <div class="item">
                                    <a href="#"><img
                                    src="../image/dichvuchothuexetaplai.jpg" ><span
                                    class="title">Cho thuê xe ô tô tập lái</span></a>
                                </div>
                        <?php 
                            $sql="SELECT id from topic WHERE  name='bản tin'";
                            $row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
                            $topic_id=$row['id'];
                            $sql="SELECT * FROM post WHERE topic_id=$topic_id AND status=0";
                            $result=mysqli_query($conn,$sql);
                            While($row=mysqli_fetch_assoc($result)){
                        ?>
                            <div class="item"><a href="ban_tin.php?id=<?php echo $row['id']; ?>"><img
                                    src="../admin/img/<?php echo $row['image'] ?>" ><span
                                    class="title"><?php echo $row['title'] ?></span></a></div>
                        <?php
                            }
                        ?>
                        
                    </div>
                </div>
                <?php
                        }
                        ?>   
            </div>
        
            <div class="col-lg-4  col-sm-12">
            <?php include('../include/signup_form.php')  ?>
                </div>

            </div>
        </div>
                                        
    </div>
    <!-- footer -->
    <?php include('../include/footer.php')  ?>
    <!-- go top buton -->
    <button id="btn-gotop"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>

</body>

</html>