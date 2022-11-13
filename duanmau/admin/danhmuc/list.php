<link rel="stylesheet" href="../CSS/list.css">
<div class="cot">
    <div class="header-title">
        <h2>Danh sách loại hàng</h2>
    </div>
    <div class="content">
        <div class="dsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã Loại</th>
                    <th>Tên Loại</th>
                    <th></th>
                </tr>
                <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&id=".$id;
                        $xoadm = "index.php?act=xoadm&id=".$id;
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td><a href="'.$suadm.'"><input type="button" name="" id="" value="Sửa"><a href="'.$xoadm.'"><input type="button" name="" id="" value="Xóa"></td>
                            </tr>';
                    }

                ?>
            </table>
            <div class="button">
                <input type="button" name="" value="Chọn tất cả">
                <input type="button" name="" value="Bỏ chọn tất cả">
                <input type="button" name="" value="Xóa các mục đã chọn">
                <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
            </div>
        </div>
    </div>
</div>