<link rel="stylesheet" href="../view/CSS/dangky.css">
<div class="form-dangnhap">
            <h1 style="margin-left: 440px;">CẬP NHẬT TÀI KHOẢN</h1>
            <?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);

                }
            ?>
            <form action="index.php?act=edit_taikhoan" id="form1" method="post">
                <input type="text" id="nho" name="email" value="<?=$email?>"> <br>
                <input type="text" id="nho" name="user" value="<?=$user?>"> <br>
                <input type="text" id="nho" name="pass" value="<?=$pass?>"> <br>
                <input type="text" id="nho" name="address" value="<?=$address?>"> <br>
                <input type="text" id="nho" name="phone" value="<?=$phone?>"> <br>
                
                <div>
                    <input type="hidden" name="makh" value="<?=$makh?>">
                    <input type="submit" id="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" id="submit" value="Nhập lại">
                </div>
            </form>
            
        </div>

        <?php
            if(isset($thongbao)&&($thongbao!="")) {
                echo $thongbao;
            }
        ?>
    </div>