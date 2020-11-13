<?php
    session_start();
    define('Tem',true);
    include_once("../connect.php");
    if(isset($_SESSION["users"]['mail']) && isset($_SESSION["users"]['pass'])){
        $student_id = $_GET['id'];
        $sql = "DELETE FROM students WHERE id= $student_id ";
        $query = mysqli_query($conn,$sql);
        header('location: ../index.php?page_layout=students');
    }else{
        echo "Bạn không có quyền truy cập file này"."<br/>"; ?>
		
		<button><a href="index.php">Trở về</a></button>
	<?php	die('');
    }
?>