<?php
    function loadall_taikhoan() {
        $sql="select * from khachhang order by makh desc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }
    function insert_taikhoan($email,$user,$pass) {
        $sql="insert into khachhang(email,user,pass) values('$email','$user','$pass')";
        pdo_execute($sql);
    }
    function delete_taikhoan($makh) {
        $sql="delete from khachhang where id=".$makh;
        pdo_execute($sql);
    }
    function checkuser($user,$pass) {
        $sql ="select * from khachhang where user='".$user."' AND pass='".$pass."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function checkemail($email) {
        $sql ="select * from khachhang where email='".$email."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($makh,$user,$pass,$email,$address,$phone) {
        $sql = "UPDATE `khachhang` SET `user`='".$user."',`pass`='".$pass."',`email`='".$email."',`address`='".$address."',`phone`='".$phone."' WHERE makh=".$makh;
        pdo_execute($sql);
    }
    
?>
