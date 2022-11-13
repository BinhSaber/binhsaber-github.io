<link rel="stylesheet" href="../CSS/add.css">
<?php 
    if(is_array($sanpham)) {
        extract($sanpham);
    }
    $hinhpath = "../upload/".$img;
        if(is_file($hinhpath)) {
            $hinh = "<img src='".$hinhpath."' height='50'>";
        } else {
            $hinh="no photo";
        }
?>

<div class="row">
    <div>
        <h2>Cập nhật một loại hàng hóa</h2>
    </div>
    <div>
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb9">
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                        foreach ($listdanhmuc as $danhmuc) { 
                           extract($danhmuc);
                           if($iddm==$id) $s="selected"; else $s="";
                           echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                        }
                    ?>    
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" name="tensp" value="<?=$tensp?>">
            </div>
            <div class="row mb10">
                Giá<br>
                <input type="text" name="price" value="<?=$price?>">
            </div>
            <div class="row ">
                Hình<br>
                <input type="file" name="hinh">
                <?=$hinh?>
            </div>
            <div class="row mb10">
                Mô tả<br>
                <textarea name="mota" cols="30"><?=$mota?></textarea>
            </div>
            
            <div class="button">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Update">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
