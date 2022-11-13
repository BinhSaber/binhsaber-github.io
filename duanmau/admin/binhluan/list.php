<link rel="stylesheet" href="../CSS/listkhachhang.css">
<div class="cot">
    <div class="header-title">
        <h2>Danh sách bình luận</h2>
    </div>
    <div class="content">
        <div class="dsloai">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Nội dung</th>
                    <th>IdUser</th>
                    <th>IdPro</th>
                    <th>Ngày bình luận</th>
                    <th></th>
                </tr>
                <?php
                    foreach ($listbinhluan as $binhluan) {
                        extract($binhluan);
                        $suabl = "index.php?act=suabl&id=".$id;
                        $xoabl = "index.php?act=xoabl&id=".$id;
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$iduser.'</td>
                                <td>'.$idpro.'</td>
                                <td>'.$ngaybinhluan.'</td>
                                <td><a href="'.$suabl.'"><input type="button" name="" id="" value="Sửa"><a href="'.$xoabl.'"><input type="button" name="" id="" value="Xóa"></td>
                            </tr>';
                    }

                ?>
            </table>
            <div class="button">
                <input type="button" name="" value="Chọn tất cả">
                <input type="button" name="" value="Bỏ chọn tất cả">
                <input type="button" name="" value="Xóa các mục đã chọn">
            </div>
        </div>
    </div>
</div>