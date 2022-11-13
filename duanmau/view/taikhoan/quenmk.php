<link rel="stylesheet" href="../view/CSS/dangky.css">
<div class="form-dangnhap">
            <h1 style="margin-left: 460px;">QUÊN MẬT KHẨU</h1>
            <p style="margin-left: 310px;">Đăng ký ngay tài khoản để nhận được những ưu đãi hấp dẫn khi mua hàng</p>
            <form action="index.php?act=quenmk" id="form1" method="post">
                <input type="text" id="nho" name="email" placeholder="Email"> <br>
                <h4 style="margin-left: 200px;">
                    <?php
                            if(isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                        }
                    ?>
                </h4>
                <input type="submit" id="submit" value="Gửi" name="guiemail">
                <input type="reset" id="submit" value="Nhập lại">
            </form>
        </div>
    </div>