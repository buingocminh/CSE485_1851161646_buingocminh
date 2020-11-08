<?php
    require_once "../admin/connect.php";
    $pas=$_GET['pas'];
    $sql="SELECT * FROM students WHERE activate_code='$pas'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0) {
        $sql ="UPDATE students
        SET status=1
        WHERE activate_code='$pas'";
        mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<body>
       <p>Bạn đã xác minh thành công</p>
       <button><a href="../index.php">Quay lại</a></button>
</body>
</html>
<?php      
    }
?>