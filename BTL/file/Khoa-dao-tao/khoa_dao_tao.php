<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trường dạy lái xe Thống Nhất</title>
    <link rel="icon" href="../image/favicon.ico" type="image/icon">
    <!-- css -->
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/css_menu.css">
    <link rel="stylesheet" href="../../css/css_main.css">
    <link rel="stylesheet" href="../../css/reponsive.css">
    <!-- script -->
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/owl.carousel.js"></script>
    <script src="https://kit.fontawesome.com/99f845d262.js" crossorigin="anonymous"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/main-script.js"></script>
</head>

<body>
<?php
    require_once('../../admin/connect.php');
    include('../../include/header.php');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8  col-sm-12">
                <div class="pagecurrent">
                    <p><a href="../../index.php">Trang chủ</a> <i class="fa fa-angle-double-right"></i>Khóa đào tạo</p>
                </div>

    <?php
        if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="SELECT * FROM class WHERE id=$id";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
    ?> 
    <div class="bx-detail">
                    <div class="title-detail"><?php echo $row['name'] ?></div>
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
                    <?php echo $row['about']?>
    </div>
   
   
   <?php       
        }
        else{
    ?>
                <div id="service">
                    <div class="list-service">
                        <div class="item"><a href="bang-lai-xe-hang-b1-4.html"><img
                                    src="../../admin/img/banglaiotoB1.jpg" alt="Bằng lái xe hạng B1"><span class="title">Bằng
                                    lái
                                    xe hạng B1</span></a></div>
                        <div class="item"><a href="bang-lai-xe-hang-b2-5.html"><img
                                    src="../../admin/img/banglaiotoB2.jpg" alt="Bằng lái xe hạng B2"><span class="title">Bằng
                                    lái
                                    xe hạng B2</span></a></div>
                        <div class="item"><a href="bang-lai-xe-o-to-hang-c-6.html"><img
                                    src="../../admin/img/banglaiotoC.jpg" alt="Bằng lái xe ô tô hạng C"><span
                                    class="title">Bằng
                                    lái xe ô tô hạng C</span></a></div>
                        <div class="item"><a href="bang-lai-xe-o-to-hang-d-7.html"><img
                                    src="../../admin/img/banglaiotoD.jpg" alt="Bằng lái xe ô tô hạng D"><span
                                    class="title">Bằng
                                    lái xe ô tô hạng D</span></a></div>
                        <div class="item"><a href="bang-lai-xe-o-to-hang-e-8.html"><img
                                    src="../../admin/img/banglaiotoE.jpg" alt="Bằng lái xe ô tô hạng E"><span
                                    class="title">Bằng
                                    lái xe ô tô hạng E</span></a></div>
                        <div class="item"><a href="bang-lai-xe-romoc-hang-f-9.html"><img
                                    src="../../admin/img/banglaiotoF.jpg" alt="Bằng lái xe rơ-móc hạng F"><span
                                    class="title">Bằng
                                    lái xe rơ-móc hạng F</span></a></div>
                        <div class="item"><a href="bang-lai-xe-gan-may-hang-a1-2.html"><img
                                    src="../../admin/img/banglaihangA1.jpg" alt="Bằng lái xe gắn máy hạng A1"><span
                                    class="title">Bằng lái xe gắn máy hạng A1</span></a></div>
                        <div class="item"><a href="bang-lai-xe-mo-to-hang-a2-3.html"><img
                                    src="../../admin/img/banglaihangA2.jpg" alt="Bằng lái xe mô tô hạng A2"><span
                                    class="title">Bằng lái xe mô tô hạng A2</span></a></div>

                        <?php 
                            $sql="SELECT * FROM class WHERE status=0 ORDER BY id";
                            $result=mysqli_query($conn,$sql);
                            While($row=mysqli_fetch_assoc($result)){
                        ?>
                            <div class="item"><a href="khoa_dao_tao.php?id=<?php echo $row['id']; ?>"><img
                                    src="../../admin/img/<?php echo $row['picture'] ?>" alt="Bằng lái xe mô tô hạng A2"><span
                                    class="title"><?php echo $row['name'] ?></span></a></div>
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
            <?php include('../../include/signup_form.php')  ?>
                <!-- button list -->
                <div id="bt-list">
                    <a href="dang-ky-hoc-lai-xe.html" class="bt-row"><img src="../../image/icon1.jpg">Hồ sơ đăng ký</a>
                    <a href="lich-thi/" class="bt-row"><img src="../../image/icon2.jpg">Lịch thi</a>
                    <a href="huong-dan-quy-trinh-thi.html" class="bt-row"><img src="../../image/icon4.jpg">Hướng dẫn quy
                        trình
                        thi</a>
                </div>
                <!-- list-ducument -->
                <div id="bx-document">
                    <h3 class="widget-title"><span>Tài liệu ôn thi</span></h3>
                    <ul class="list-document">
                        <li>
                            <figure><a href=""><img src="../../image/450cauhoitracnghiem.jpg"></a></figure>
                            <a href="">450 câu hỏi trắc nghiệm hạng B, C – Phần 10</a>
                        </li>
                        <li>
                            <figure><a href=""><img src="../../image/450cauhoitracnghiem.jpg"></a></figure>
                            <a href="">450 câu hỏi trắc nghiệm hạng B, C – Phần 9</a>
                        </li>
                        <li>
                            <figure><a href=""><img src="../../image/450cauhoitracnghiem.jpg"></a></figure>
                            <a href="">450 câu hỏi trắc nghiệm hạng B, C – Phần 8</a>
                        </li>
                        <li>
                            <figure><a href=""><img src="../../image/450cauhoitracnghiem.jpg"></a></figure>
                            <a href="">450 câu hỏi trắc nghiệm hạng B, C – Phần 7</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
                                        
    </div>
    <!-- footer -->
    <?php include('../../include/footer.php')  ?>
    <!-- go top buton -->
    <button id="btn-gotop"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>

</body>

</html>