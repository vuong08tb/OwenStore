<?php
function insert_taikhoan($email,$user,$pass){
    $sql = "insert into taikhoan(email,user,pass) values ('$email','$user','$pass')";
    pdo_execute($sql);
}

 ?>