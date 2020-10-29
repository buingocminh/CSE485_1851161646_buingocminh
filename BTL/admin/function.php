<?php
function select($sql){
    global $conn;
    $query=mysqli_query($conn,$sql);
}



?>