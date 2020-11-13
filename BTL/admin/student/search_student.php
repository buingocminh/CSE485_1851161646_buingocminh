<?php
    include_once("../connect.php");
    $email=$_POST['item'];
    $sql="SELECT*FROM students INNER JOIN class ON students.class = class.id WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    $arr=array();
    while($row = mysqli_fetch_array($result)){
        if($row[8]==1) $stat='Đã xác minh'; else $stat='Chưa xác minh';

        $arr[] = array("id" => $row[0], "name" => $row[1],"birthday"=> $row[2],"addres"=>$row['addres'],"phone"=>$row['phone_number'],"class"=>$row['name'],"email"=>$row['email'],"status"=>$stat );
    }
    echo json_encode($arr);
?>