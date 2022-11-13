<link rel="stylesheet" href="../view/CSS/cart.css">
<div class="boxtitle">GIỎ HÀNG</div>
<div class="cart-content">
    <table>
        <tr>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Thao tác</th>
        </tr>

        <?php
            $tong=0;
            $i=0;
            foreach ($_SESSION['mycart'] as $cart) {
                $hinh=$img_path.$cart[2];
                $ttien=$cart[3]*$cart[4];
                $tong+=$ttien;
                $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa">';
                echo '<tr>
                        <td><img src="'.$hinh.'" alt=""></td>
                        <td>'.$cart[1].'</td>
                        <td>'.$cart[3].'</td>
                        <td>'.$cart[4].'</td>
                        <td>'.$ttien.'</td>
                        <td>'.$xoasp.'</td>
                    </tr>';
                $i+=1;
            }
                echo '<tr>
                        <td colspan="4">Tổng đơn hàng</td>

                        <td>'.$tong.'</td>
                        <td></td>
                    </tr>';


        ?>

    </table>
</div>

<div class="bill">
    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG"> <a href="index.php?act=delcart"> <input type="button" value="XÓA GIỎ HÀNG"></a>
</div>
