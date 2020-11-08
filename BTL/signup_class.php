<?php
    require('admin/connect.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require_once "admin/PHPMailer-master/src/PHPMailer.php";      
    require_once "admin/PHPMailer-master/src/SMTP.php";      
    require_once "admin/PHPMailer-master/src/Exception.php";
    $mesage="Đăng ký thành công, vui lòng kiểm tra email của bạn để xác nhận đăng ký";
    $email=$_POST['email'];
    $sql="SELECT * FROM students WHERE email=$email";
    $res=mysqli_query($conn,$sql);
    $sql="SELECT * FROM students WHERE email='$email'";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0) $mesage='email đã tồn tại vui lòng nhập email khác';
    else{
    $name=$_POST['name'];
    $birthday=$_POST['birthday'];
    $add=$_POST['add'];
    $phone=$_POST['phone'];
    $class=$_POST['class'];
    $num=random_int(0,1000);
    $activate=password_hash($num,PASSWORD_DEFAULT);
    $mail_body="Xin chào $name, cảm ơn bạn đã đăng ký khoá học tại trường dạy lái xe Thống Nhất. Vui lòng nhấp vào <a href='http://localhost/CSE485_1851161646_buingocminh/BTL/include/vetyfi.php?pas=$activate'>đây</a> để xác nhận đăng ký";
         $mail = new PHPMailer();  
         $mail -> IsSMTP(); 
         $mail -> SMTPDebug = 0;  //  1=errors and messages, 2=messages only
         $mail -> SMTPAuth = true;  
         $mail -> SMTPSecure = 'tls'; 
         $mail -> Host = 'smtp.gmail.com';
         $mail -> Port = 587; 
         $mail -> Username = 'htminhk@gmail.com';
         $mail -> Password = 'Minh6465@@';           
         $mail -> SetFrom('htminhk@gmail.com', 'Trường học lái xe thống nhất');
         $mail -> Subject = 'htminhk@gmail.com';
         $mail -> MsgHTML($mail_body);// noi dung chinh cua mail
         $mail -> AddAddress($email);
         $mail -> CharSet="utf-8";
         $mail -> IsHTML(true);
        if( $mail->Send()) 
        $sql="INSERT INTO students (name,birthday,addres,phone_number,class,email,activate_code)
        VALUE ('$name','$birthday','$add',$phone,$class,'$email','$activate')";
        mysqli_query($conn,$sql);

    }
    echo json_encode($mesage);
    // 
?>  