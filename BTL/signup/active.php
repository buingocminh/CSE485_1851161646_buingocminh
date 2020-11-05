<?php
    // http://localhost/prac04/active.php?code=4de6314b75c9279e
    if(isset($_GET['code'])){
        $code = $_GET['code'];
        require("includes/config.php");
        // B2: Khai bao truy van:
        $sql = "SELECT * FROM users WHERE activation_code = '$code'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $sql = "UPDATE users SET status = 1 WHERE activation_code = '$code'";
            if(mysqli_query($conn,$sql)){
                header("Location:login-page.php");
                exit();
            }else{
                echo "Lien ket ko ton tai hoac vui long lien he voi Quan tri Web";
            }
        }
    }

?>