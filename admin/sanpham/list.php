<div class="row"> 
        <div class="row frmtitle mb">
            <h1> Danh sách  sản phẩm </h1>
        </div>
        <form action="#" method="post">
                <input type="text" name="kyw" >
                            <select name="iddanhmuc" >
                            <option value ="0" selected> Tất cả </option>
                            <?php 
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'"> '.$name.'</option>';
                            }
                            
                            
                            ?>

                            </select>
                            <input type="submit" name="listok" value="OK">
        </form>
        <div class="row frmcontent">
                        
                
                     
                    <div class="row mb10 frmdsloai">
                        
                    <table>
                        <tr>
                            <th></th>
                            <th> Mã loại</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình </th>
                           
                            <th>Gía</th>
                            <th> Lượt xem</th>
                            <th> </th>
                        </tr>
                        <?php
                        foreach ($listsanpham as $sanpham){
                            extract($sanpham);
                            $suasp = "index.php?act=suasp&id=".$id;
                            $xoasp = "index.php?act=xoasp&id=".$id;
                            $hinhanhpath ="../upload/".$img;
                            if(is_file($hinhanhpath)){
                                $hinh = "<img src= '".$hinhanhpath."' height ='80'>";
                            }else{
                                $hinh="no photo";
                            }
                            echo '<tr>
                            <td> <input type="checkbox" name="" id=""> </td>
                            <td> '.$id.'</td>
                            <td> '.$name.' </td>
                            <td> '.$hinh.' </td>
                            <td> '.$price.' </td>
                            <td> '.$luotxem.' </td>
                            <td><a href= "'.$suasp.'"><input type="button" value="Sửa"></a>  <a href = "'.$xoasp.'"> <input type="button" value="Xóa"> </a></td>
                            <tr>';
                        }
                        ?>
                       
                    </table>
     
                    </div>
                    <div class="row mb10">
                             <input type="button" value=" Chọn tất cả">
                             <input type="button" value="Bỏ chọn tất cả ">
                             <input type="button" value="Xóa các mục đã chọn ">
                             <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
     
                    </div>
     
     
                </form>
           
       </div>


    </div>