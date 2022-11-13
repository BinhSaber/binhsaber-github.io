<?php
    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm) {
        $sql="insert into sanpham(tensp,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }

    function delete_sanpham($id) {
        $sql="delete from sanpham where id=".$id;
        pdo_execute($sql);
    }

    function loadall_sanpham_top4() {
        $sql="select * from sanpham where 1 order by luotxem desc limit 0,4"; 
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham_home() {
        $sql="select * from sanpham where 1 order by id desc limit 0,4"; 
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham($kyw="",$iddm=0) {
        $sql="select * from sanpham where 1"; 
        if($kyw!="") {
            $sql.=" and tensp like '%".$kyw."%'";
        }
        if($iddm>0) {
            $sql.=" and iddm ='".$iddm."'";
        }
        $sql.=" order by id";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function load_ten_dm($iddm) {
        if($iddm>0){
            $sql ="select * from danhmuc where id=".$iddm;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $name;
        } else {
            return "";
        }
    }

    function loadone_sanpham($id) {
        $sql ="select * from sanpham where id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function load_sanpham_cungloai($id,$iddm) {
        $sql ="select * from sanpham where iddm=".$iddm." AND id <> ".$id;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    
    function update_sanpham($id,$iddm,$tensp,$price,$mota,$hinh) {
        $sql = "UPDATE `sanpham` SET `iddm`='".$iddm."',`tensp`='".$tensp."',`price`='".$price."',`mota`='".$mota."', `img`='".$hinh."' WHERE id=".$id;
        pdo_execute($sql);
    }
?>