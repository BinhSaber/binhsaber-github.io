<?php
    $dsdm=loadall_danhmuc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hương Xưa Shop</title>
    <link rel="stylesheet" href="../view/CSS/trangchu.css">
</head>
<body>
    <div class="container">
        <div class="menu-dautien">
        <header>
            <span><img src="../view/img/email.png">binhmai@gmail.com</span>
            <span><img src="../view/img/dienthoai.png">+84-7052-101-786</span>
        </header>
        <nav>
            <div id="menu">
                <a href="index.php" id="logo">
                    <img src="../view/img/logo.png">
                </a>
            <ul id="main-menu">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                <li><a href="index.php?act=danhmuc">Danh Mục</a>
                    <ul class="sub-menu">
                        <?php
                            foreach($dsdm as $dm) {
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo '<li>
                                        <a href="'.$linkdm.'">'.$name.'</a>
                                </li>';
                            }
                        ?>
                    </ul>
                </li>
                <li><a href="index.php?act=chinhsach">Chính sách</a></li>
                <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                <?php
                    if(isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                ?>  
                
                    <li><a href="#">Xin chào :
                    <?=$user?></a>
                
                    <ul class="sub-menu">
                        <li>
                            <a href="index.php?act=quenmk">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=edit_taikhoan">Cập nhật</a>
                        </li>
                        <?php if($vaitro==1) { ?>
                        <li>
                            <a href="../admin/index.php">Đăng nhập Admin</a>
                        </li>
                        <?php } ?>
                        <li>
                            <a href="index.php?act=thoat">Thoát</a>
                        </li>
                    </ul>
                <li>
                <?php
                    }else{
                ?>
                <li style="margin-left:220px;"><a href="index.php?act=dangky">Đăng ký</a></li>
                <li><a>-</a></li>
                <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                <?php }?>
            </ul>
            </div>