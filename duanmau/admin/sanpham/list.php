<link rel="stylesheet" href="../CSS/listsanpham.css">
<div class="cot">
    <div class="header-title">
        <h2>Danh sách hàng hóa</h2>
    </div>
    <div class="content">
        <div class="dsloai">
            <form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw">
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                        foreach ($listdanhmuc as $danhmuc) { 
                           extract($danhmuc);
                           echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>    
                </select>
                <input type="submit" name="listok" value="OK">
            </form>
            <table>
                <tr>
                    <th></th>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Lượt Xem</th>
                    <th></th>
                </tr>
                <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id=".$id;
                        $xoasp = "index.php?act=xoasp&id=".$id;
                        $hinhpath = "../upload/".$img;
                        if(is_file($hinhpath)) {
                            $hinh = "<img src='".$hinhpath."' height='80'>";
                        } else {
                            $hinh="no photo";
                        }
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$tensp.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$price.'đ</td>
                                <td>'.$luotxem.'</td>
                                <td><a href="'.$suasp.'"><input type="button" name="" id="" value="Sửa"><a href="'.$xoasp.'"><input type="button" name="" id="" value="Xóa"></td>
                            </tr>';
                    }

                ?>
            </table>
            <div class="button">
                <input type="button" name="" value="Chọn tất cả">
                <input type="button" name="" value="Bỏ chọn tất cả">
                <input type="button" name="" value="Xóa các mục đã chọn">
                <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
            </div>
        </div>
    </div>
</div>