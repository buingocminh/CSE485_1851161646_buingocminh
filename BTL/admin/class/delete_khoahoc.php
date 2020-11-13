<?php
    session_start();
    define('Tem',true);
    include_once("../connect.php");
    if(isset($_SESSION["users"]['mail']) && isset($_SESSION["users"]['pass'])){
        $class_id = $_GET['id'];
        $sql = "DELETE FROM class WHERE id= $class_id ";
        $query = mysqli_query($conn,$sql);
        header('location: ../index.php?page_layout=class');
    }else{
        echo "Bạn không có quyền truy cập file này"."<br/>"; ?>
		
		<button><a href="index.php">Trở về</a></button>
	<?php	die('');
    }
?>