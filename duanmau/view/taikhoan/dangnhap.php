<link rel="stylesheet" href="../view/CSS/dangky.css">

        <div class="form-dangnhap">
            <h1 style="margin-left: 485px;">ĐĂNG NHẬP</h1>
            <p style="margin-left: 300px;">Đăng nhập ngay tài khoản để nhận được những ưu đãi hấp dẫn khi mua hàng</p>
            
            <form action="index.php?act=dangnhap" id="form1" method="post">
                <input type="text" id="nho" name="user" placeholder="Username"> <br>
                <input type="password" id="nho" name="pass" placeholder="Password"> <br>
                <h4 style="margin-left: 200px;">
                    <?php
                            if(isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                        }
                    ?>
                </h4>
                <input type="submit" id="submit" value="Đăng nhập" name="dangnhap">
                <input type="reset" id="submit" value="Nhập lại">
            </form>
            <p style="margin-left: 410px">Bạn đã có tài khoản, vui lòng đăng ký <a href="index.php?act=dangky">tại đây</a></p>
        </div>
    </div>