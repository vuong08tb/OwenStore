<?php

function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddanhmuc){
    $sql = "insert into sanpham(name,price,img,mota,iddanhmuc) values ('$tensp','$giasp','$hinh','$mota','$iddanhmuc')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql= "delete from sanpham where id =".$id;
    pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw,$iddanhmuc){
    $sql = "select * from sanpham where 1 ";
    if($kyw!="")
    {
        $sql.= " and name like '%".$kyw."%'";
    }
    if($iddanhmuc>0)
    {
        $sql.= " and iddanhmuc ='".$iddanhmuc."'";
    }
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id){
    $sql = "select * from sanpham where id =".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_sanpham($id,$iddanhmuc,$tensp,$giasp,$mota,$hinh){
    if($hinh!="")
        $sql ="update sanpham set iddanhmuc='".$iddanhmuc."',name ='".$tensp."',price='".$giasp."',mota='".$mota."',img ='".$hinh."' where id =".$id;
    else
        $sql ="update sanpham set iddanhmuc='".$iddanhmuc."',name ='".$tensp."',price='".$giasp."',mota='".$mota."' where id =".$id;
    pdo_execute($sql);
}
?>