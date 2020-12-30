<?php

$connect = mysqli_connect('localhost','root','','bseb');



function redirect($page){
    echo "<script>window.open('$page.php','_self')</script>";
}

?>