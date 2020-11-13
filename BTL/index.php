<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trường dạy lái xe Thống Nhất</title>
    <link rel="icon" href="image/favicon.ico" type="image/icon">
    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/css_menu.css">
    <link rel="stylesheet" href="css/css_main.css">
    <link rel="stylesheet" href="css/reponsive.css">
    <!-- script -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="https://kit.fontawesome.com/99f845d262.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="js/main-script.js"></script>

</head>

<body>
    <?php
    require_once('admin/connect.php');
    include('include/header.php');
    ?>
    <!-- slide -->
    <div class="container">
        <div class="slide">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/banner02.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/banner03.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8  col-sm-12">
                <!-- Intro -->
                <div class="block" id="intro">
                    <h3 class="widget-title"><a href="listdanhmuc.html"><span>Giới thiệu</span></a></h3>
                    <div class="clearfix row">
                        <div class="info-text col-lg-6 col-sm-12 col-12">
                            Trường Dạy Lái Xe Thống Nhất thành lập năm 1997 trực thuộc sở Giao thông vận tải Thành
                            phố Hồ Chí Minh.<br />
                            Trường là một trong những Trường dạy lái xe đầu tiên của TP HCM.<br />
                            Trường đào tạo các hạng xe A1, B2, C, D, E, ...<br />
                            Trường đào tạo các hạng xe A1, B2, C, D, E, ...
                            Với đội ngũ giáo viên chuyên môn cao, dày dạn kinh nghiệm, hàng năm trường đào tạo lái
                            xe cho khoảng hơn 3.000 học viên, tỷ lệ đậu bình quân của trường luôn trên 90% do quá
                            trình đào tạo và tổ chức ôn luyện tốt.<br /> <a href="gioi-thieu.html" class="viewmore">
                                Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
                        </div>
                        <div class="info-video col-lg-6 col-sm-12 col-12">
                            <div class="videoWrapper">
                                <iframe width="" height="" src="https://www.youtube.com/embed/x5yj2OShU8Q" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- slide no2 -->
                <div id="slide-no2">
                    <div id="slide-no2-header">
                        <h3 class="widget-title ">
                            <span>Khóa đào tạo</span>
                            <div class="btn">
                                <button class="btn-slide" id="btn-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                                <button class="btn-slide" id="btn-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                            </div>
                        </h3>

                    </div>
                    <?php
                        include "include/slide.php";
                    ?>
                    
                </div>
                <!-- news -->
                <div class="block" id="news">
                    <h3 class="widget-title"><span>Bản tin nổi bật</span></h3>
                    <ul class="list-post">
                        <li>
                            <figure><a href="http://www.truongdaylaixethongnhat.com/ban-tin/cho-thue-xe-o-to-tap-lai-16.html"><img src="image/dichvuchothuexetaplai.jpg"></a></figure>
                            <div class="post-content">
                                <h3 class="entry-title"><a href="http://www.truongdaylaixethongnhat.com/ban-tin/cho-thue-xe-o-to-tap-lai-16.html">Cho thuê
                                        xe ô tô tập lái</a></h3>
                                <div class="below-entry"><span><i class="fa fa-clock-o" aria-hidden="true">
                                            2017-07-12 19:59:30</i></span> </div>
                                <div class="script-post">Nhằm mục đích giúp tất cả anh chị đã có GPLX hoặc chưa có
                                    GPLX được rèn luyện thêm những kỹ năng lái xe an toàn nhất trên 2 dòng xe: số
                                    sàn và số tự động, trường dạy lái xe Thống Nhất có nhận dạy kèm bổ túc lái xe số
                                    tự độn ...</div>
                            </div>
                        </li>
                        <li>
                            <figure><a href="http://www.truongdaylaixethongnhat.com/ban-tin/kien-thuc-co-ban-cau-tao-o-to-tu-az-4.html"><img src="image/post8.jpg"></a></figure>
                            <div class="post-content">
                                <h3 class="entry-title"><a href="http://www.truongdaylaixethongnhat.com/ban-tin/kien-thuc-co-ban-cau-tao-o-to-tu-az-4.html">Kiến thức cơ bản
                                        cấu tạo ô tô từ A-Z</a></h3>
                                <div class="below-entry"><span><i class="fa fa-clock-o" aria-hidden="true">
                                            2017-07-03 22:59:18</i></span> </div>
                                <div class="script-post">Chào các anh chị em - những người mà khi mở nắp capo (hay
                                    thậm chí còn ko biết nắp capo là cái gì) thấy một mớ hỗn độn các máy móc chi
                                    tiết trong đó mà ko phân biệt được cái gì ra cái gì, thì đây c ...</div>
                            </div>
                        </li>
                        <li>
                            <figure><a href="http://www.truongdaylaixethongnhat.com/ban-tin/hoc-lai-xe-o-to-qua-tu-dien-cac-ky-hieu-viet-tat-cua-xe-o-to-7.html"><img src="image/post6.jpg"></a></figure>
                            <div class="post-content">
                                <h3 class="entry-title"><a href="http://www.truongdaylaixethongnhat.com/ban-tin/hoc-lai-xe-o-to-qua-tu-dien-cac-ky-hieu-viet-tat-cua-xe-o-to-7.html">Học
                                        lái xe ô tô qua từ điển các ký hiệu viết tắt của xe ô tô</a></h3>
                                <div class="below-entry"><span><i class="fa fa-clock-o" aria-hidden="true">
                                            2017-07-03 22:58:56</i></span> </div>
                                <div class="script-post">Từ điển các kí hiệu viết tắt của ô tô có thể bạn chưa biết
                                    Thuật ngữ ôtô là từ viết tắt để diễn tả những tính năng luôn đổi mới và ngày
                                    càng hiện đại của ôtô thời nay. Bài viết sau giới thiệu một số thuật ngữ ôtô m
                                    ...</div>
                            </div>
                        </li>
                        <li>
                            <figure><a href="http://www.truongdaylaixethongnhat.com/ban-tin/cach-hoc-lai-xe-o-to-b2-than-toc-13.html"><img src="image/dichvuchothuexetaplai.jpg"></a></figure>
                            <div class="post-content">
                                <h3 class="entry-title"><a href="http://www.truongdaylaixethongnhat.com/ban-tin/cach-hoc-lai-xe-o-to-b2-than-toc-13.html">Cách
                                        học lái xe ô tô
                                        B2 “thần tốc”</a></h3>
                                <div class="below-entry"><span><i class="fa fa-clock-o" aria-hidden="true">
                                            2017-07-03 22:58:40</i></span> </div>
                                <div class="script-post">Một phương pháp tốt sẽ mang đến cho người thực hiện những
                                    thành công ngoài mong đợi. Nếu bạn muốn có được tấm bằng lái xe nhanh nhất thì
                                    việc nắm vững cách học lái xe ô tô B2 “thần tốc” là con đường ngắn nhất dẫn bạn
                                    đ� ...</div>
                            </div>
                        </li>
                        <?php 
                            $sql="SELECT id from topic WHERE  name='bản tin'";
                            $row=mysqli_fetch_assoc(mysqli_query($conn,$sql));
                            $topic_id=$row['id'];
                            $sql="SELECT * FROM post WHERE topic_id=$topic_id AND status=0 LIMIT 2";
                            $result=mysqli_query($conn,$sql);
                            While($row=mysqli_fetch_assoc($result)){
                        ?>
                        <li>
                            <figure><a href="file/ban_tin.php?id=<?php echo $row['id'] ?>"><img src="admin/img/<?php echo $row['image'] ?>"></a></figure>
                            <div class="post-content">
                                <h3 class="entry-title"><a href="file/ban_tin.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h3>
                                <div class="below-entry"><span><i class="fa fa-clock-o" aria-hidden="true"> <?php echo $row['update_at'] ?></i></span> </div>
                                <div class="script-post"><?php echo $row['short_description'] ?></div>
                            </div>
                        </li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>



            </div>
            <div class="col-lg-4  col-sm-12">
            <?php include('include/signup_form.php')  ?>
                <div id="map-addr">
                    <h3 class="widget-title"><a href="listdanhmuc.html"><span>CHI NHÁNH 1</span></a></h3>
                    <div id="addr">
                        <div>91L cư xá Lý Thường Kiệt, phường 7, quận 5, TPHCM.</div>
                        <div>Điện thoại: 0939.047.376 - 0909.605.608</div>

                    </div>
                    <div class="map" id="map1"></div>

                    <h3 class="widget-title"><a href="listdanhmuc.html"><span>CHI NHÁNH 2</span></a></h3>
                    <div id="addr">
                        <div>17 Nguyễn Kim, phường 12, quận 5, TPHCM.</div>
                        <div>Điện thoại: 0939.047.376 - 0909.605.608</div>

                    </div>
                    <div class="map" id="map2"></div>
                </div>
            </div>
        </div>

    </div>
    <!-- show map 1 -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlW8XkW9JreAYZsBHOpVtLeFGvA4lAMk4&callback=Map1">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlW8XkW9JreAYZsBHOpVtLeFGvA4lAMk4&callback=Map2">
    </script>
    <!-- footer -->
    <?php include('include/footer.php')  ?>
</body>

</html>