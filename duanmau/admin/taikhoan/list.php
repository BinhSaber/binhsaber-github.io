<link rel="stylesheet" href="../CSS/listkhachhang.css">
<div class="cot">
    <div class="header-title">
        <h2>Danh sách tài khoản</h2>
    </div>
    <div class="content">
        <div class="dsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã Tài Khoản</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Điện Thoại</th>
                    <th>Vai Trò</th>
                    <th></th>
                </tr>
                <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk = "index.php?act=suatk&id=".$makh;
                        $xoatk = "index.php?act=xoatk&id=".$makh;
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$makh.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$phone.'</td>
                                <td>'.$vaitro.'</td>
                                <td><a href="'.$suatk.'"><input type="button" name="" id="" value="Sửa"><a href="'.$xoatk.'"><input type="button" name="" id="" value="Xóa"></td>
                            </tr>';
                    }

                ?>
            </table>
            <div class="button">
                <input type="button" name="" value="Chọn tất cả">
                <input type="button" name="" value="Bỏ chọn tất cả">
                <input type="button" name="" value="Xóa các mục đã chọn">
                <a href="index.php?act=dskh"><input type="button" value="Nhập thêm"></a>
            </div>
        </div>
    </div>
</div>