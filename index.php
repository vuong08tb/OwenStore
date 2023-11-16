<?php
    include "view/header.php";
    include "model/pdo.php";
    include "model/sanpham.php";
    include "global.php";
    include "model/danhmuc.php";
    
    $spnew = loadall_sanpham_home();
    $dmnew = loadall_danhmuc_home();

    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch($act){
            case 'sanpham':
                if(isset($_POST['kyw']) && ($_POST['kyw']!="")){ $kyw=$_POST['kyw'];
                }else{
                $kyw="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                $iddm-$_GET['id'];
                $dssp-loadall_sanpham("",$iddm);
                $tendm-load_ten_dm($iddm);
                include "view/sanpham.php";
                }else{
                include "view/home.php";
                }
                break;
            case 'gioithieu';
                include "view/gioithieu.php";
                break;
            case 'lienhe';
                include "view/lienhe.php";
                break;
            default:
                include "view/home.php";
                break;
        }




    }else{
        include "view/home.php";
        
    }



   
    include "view/footer.php";


?>
