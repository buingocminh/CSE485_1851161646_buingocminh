<?php
	if(!defined("Tem")){
		echo "Bạn không có quyền truy cập file này"."<br/>";?>		
		<button><a href="index.php">Trở về</a></button>
	<?php	die('');
}?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trường dạy lái xe Thống Nhất - Administrator</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--Icons-->
	<script src="https://kit.fontawesome.com/99f845d262.js" crossorigin="anonymous"></script>

	<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Trường dạy lái xe </span>Thống Nhất</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> Admin <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user">
										<use xlink:href="#stroked-male-user"></use>
									</svg> Hồ sơ</a></li>
							<li><a href="logout.php"><svg class="glyph stroked cancel">
										<use xlink:href="#stroked-cancel"></use>
									</svg> Đăng xuất</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="<?php if(!isset($_GET['page_layout'])) {echo 'active';} ?>"><a href="admin.html"><i class="fas fa-columns"></i> Dashboard</a></li>
			<li class="<?php if($_GET['page_layout'] == 'hoc_vien') {echo 'active';} ?>"><a href=""><i class="fas fa-user-graduate"></i>Quản lý học viên</a></li>
			<li class="<?php if($_GET['page_layout'] == 'khoa_hoc') {echo 'active';} ?>"><a href="<?php if($_GET['page_layout'] == 'khoa_hoc') {echo 'active';} ?>"><i class="fas fa-book-open"></i>Quản lý khóa hoc</a></li>
			<li class="<?php if($_GET['page_layout'] == 'topic') {echo 'active';} ?>"><a href="<?php if($_GET['page_layout'] == 'topic'||'edit_topic'||'add_topic') {echo 'active';} ?>"><i class="far fa-file-alt fas"></i>Quản chủ đề </a></li>
			<li class="<?php if($_GET['page_layout'] == 'post') {echo 'active';} ?>"><a href=""><i class=" fas  fa-address-card"></i> Quản lý bài đăng</a></li>
			<li class="<?php if($_GET['page_layout'] == 'user') {echo 'active';} ?>"><a href=""><i class="fas fa-users"></i> Quản lý người dùng </a></li>
			<!-- <li><a href="setting.html"><i class="fas fa-cogs"></i> Cấu hình</a></li> -->
		</ul>

	</div>
	<!--/.sidebar-->
    <!-- main -->
    <?php
		if(isset($_GET["page_layout"])){
			echo 'geth get';
			switch($_GET["page_layout"]){

				// User
				case 'user':include_once('user.php'); break;
				case 'add_user':include_once('add_user.php'); break;
				case 'edit_user':include_once('edit_user.php'); break;
				//
				

				default: include_once("dashboard.php");
			}
		}else{
			include_once("dashboard.php");
		}
	?>



    


</body>

</html>