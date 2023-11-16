<div class="row mb">
            <div class="left-box mr">
                <div class="row mb10">
                    <div class="banner">
                       <!-- Slideshow container -->
                        <div class="slideshow-container">
                            <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="view/img/banner/banner1.png" style="width:100%">
                            </div>
                        
                            <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="view/img/banner/banner2.jpg" style="width:100%">
                            </div>
                        
                            <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="view/img/banner/banner3.png" style="width:100%">
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <?php
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $hinh = $img_path.$img;
                        if ( $id%3==2 )
                            $mr = "mr";
                        else{
                            // if ($id%3==0)
                            //     $mr = "mr";
                            // else
                                $mr = "";
                        }
                        echo '<div class="box-product '.$mr.'">
                        <div class="row img-product">
                            <img src="'.$hinh.'" alt="ảnh sản phẩm">
                        </div>
                        <p>$'.$price.'</p>
                        <a href="index.php?act=sanphamct">'.$name.'</a>
                    </div>';
                        # code...
                    }
                    ?>
                    
                    <!-- <div class="box-product mr">
                        <div class="row img-product">
                            <img src="view/img/products/sp1.png" alt="ảnh sản phẩm">
                        </div>
                        <p>569.000 VND</p>
                        <a href="">Quần Dài Gân Phối Chỉ Slimcrop</a>
                    </div> -->
                    <!-- <div class="box-product mr">
                        <div class="row img-product">
                            <img src="view/img/products/sp2.png" alt="ảnh sản phẩm">
                        </div>
                        <p>449.000 VND</p>
                        <a href="">Quần Âu Nam Ống Đứng Vải Nano</a>
                    </div>
                    <div class="box-product">
                        <div class="row img-product">
                            <img src="view/img/products/sp3.png" alt="ảnh sản phẩm">
                        </div>
                        <p>494.000 VND</p>
                        <a href="">Quần Âu Nam Classic Thêu Yody</a>
                    </div>
                </div>
                <div class="row">
                    <div class="box-product mr">
                        <div class="row img-product">
                            <img src="view/img/products/sp4.png" alt="ảnh sản phẩm">
                        </div>
                        <p>449.000 VND</p>
                        <a href="">Áo Sơ Mi Nam Trắng Dài Tay Nano</a>
                    </div>
                    <div class="box-product mr">
                        <div class="row img-product">
                            <img src="view/img/products/sp5.png" alt="ảnh sản phẩm">
                        </div>
                        <p>413.000 VND</p>
                        <a href="">Áo Sơ Mi Nam Dài Tay Vải Cafe</a>
                    </div>
                    <div class="box-product">
                        <div class="row img-product">
                            <img src="view/img/products/sp6.png" alt="ảnh sản phẩm">
                        </div>
                        <p>323.000 VND</p>
                        <a href="">Áo Sơ Mi Nam Sợi Tre Cộc Tay Quốc Dân</a>
                    </div>
                </div>
                <div class="row">
                    <div class="box-product mr">
                        <div class="row img-product">
                            <img src="view/img/products/sp7.png" alt="ảnh sản phẩm">
                        </div>
                        <p>169.000 VND</p>
                        <a href="">Áo Thun Thể Thao Nam Logo Yody In 2 Vạch</a>
                    </div>
                    <div class="box-product mr">
                        <div class="row img-product">
                            <img src="view/img/products/sp8.png" alt="ảnh sản phẩm">
                        </div>
                        <p>149.000 VND</p>
                        <a href="">Áo Thun Thể Thao Nam Siệu Nhẹ In Limitless</a>
                    </div>
                    <div class="box-product">
                        <div class="row img-product">
                            <img src="view/img/products/sp9.png" alt="ảnh sản phẩm">
                        </div>
                        <p>269.000 VND</p>
                        <a href="">T-Shirt Thể Thao Nam Siêu Nhẹ In Run</a>
                    </div> -->
                </div>
            </div>
            <div class="right-box">
                <?php include "boxright.php"?>
            </div>
</div>