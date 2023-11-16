<div class="row mb">
            <div class="left-box mr">
            <div class="row mb">
                <?php  extract($onesp); ?>
    <div class="box-title">CHI TIẾT SẢN PHẨM</div>
    <div class="row box-content">
            <?php
               
                $img = $img_path.$img;
                echo '<img src = "'.$img.'"<br>';
                echo $mota;
            ?>    
    </div>
</div>
<div class="row mb">
    <div class="box-title">BÌNH LUẬN</div>
    <div class="row box-content">
                      
    </div>
</div>
<div class="row mb">
    <div class="box-title">SẢN PHẨM LIÊN QUAN</div>
    <div class="row box-content">
                      
    </div>
</div>
            </div>
            <div class="right-box">
                <?php include "boxright.php"?>
            </div>
</div>