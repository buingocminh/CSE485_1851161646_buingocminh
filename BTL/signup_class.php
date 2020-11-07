<?php
    require('admin/connect.php');
    $email=$_POST['email'];
    $sql="SELECT * FROM students WHERE email=$email";
    $res=mysqli_query($conn,$sql);
    num
    $name=$_POST['name'];
    $birthday=$_POST['birthday'];
    $add=$_POST['add'];
    $phone=$_POST['phone'];
   
    $class=$_POST['class'];
    $num=random_int(0,1000);
    $activate=password_hash($num,PASSWORD_DEFAULT);
    $sql="INSERT INTO students (name,birthday,addres,phone_number,class,email,activate_code)
    VALUE ('$name','$birthday','$add',$phone,$class,'$email','$activate')";
    mysqli_query($conn,$sql);



    echo json_encode("Đăng ký thành công, vui lòng kiểm tra email của bạn để xác nhận đăng ký");
    // 
?>  