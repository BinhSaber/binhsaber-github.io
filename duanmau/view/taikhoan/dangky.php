<link rel="stylesheet" href="../view/CSS/dangky.css">
<div class="form-dangnhap">
            <h1 style="margin-left: 440px;">ĐĂNG KÝ THÀNH VIÊN</h1>
            <p style="margin-left: 320px;">Đăng ký ngay tài khoản để nhận được những ưu đãi hấp dẫn khi mua hàng</p>
            <form action="index.php?act=dangky" id="form1" method="post">
                <input type="text" id="nho" name="email" placeholder="Email"> <br>
                <input type="text" id="nho" name="user" placeholder="User"> <br>
                <input type="password" id="nho" name="pass" placeholder="Pass"> <br>
                <h4 style="margin-left: 200px;">
                    <?php
                            if(isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                        }
                    ?>
                </h4>
                <input type="submit" id="submit" value="Đăng ký" name="dangky">
                <input type="reset" id="submit" value="Nhập lại">
            </form>
            <p style="margin-left: 410px">Bạn đã có tài khoản, vui lòng đăng nhập <a href="index.php?act=dangnhap">tại đây</a></p>
        </div>

        
    </div>