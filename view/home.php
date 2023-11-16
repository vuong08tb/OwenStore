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
                        <a href="">'.$name.'</a>
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
                <div class="row mb">
                    <div class="box-title">TÀI KHOẢN</div>
                    <div class="box-content login-form">
                        <form action="" method="post">
                            <div class="row mb10">
                                Tên đăng nhập
                                <input type="text" name="user" id=""><br>
                            </div>
                            <div class="row mb10">
                                Mật khẩu <br>
                                <input type="password" name="" id=""><br>
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="" id="">Ghi nhớ đăng nhập <br>
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập">
                            </div>
                        </form>
                        <ul>
                            <li><a href="">Quên mật khẩu</a></li>
                            <li><a href="">Đăng ký</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mb">
                    <div class="box-title">DANH MỤC</div>
                    <div class="box-content-2 menu-column">
                        <ul>
                            <?php
                                
                                foreach ($dmnew as $dm) {
                                    extract($dm);
                                    echo '<li><a href="">'.$name.'</a></li>';
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="box-search">
                        <form action="index.php?act=sanpham" method="post">
                            <input placeholder="Nhập sản phẩm cần tìm" name="kyw">
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="box-title">TOP SẢN PHẨM</div>
                    <div class="row box-content">
                        <div class="row mb10 top10">
                            <img src="view/img/top/top1.png" alt="ảnh sản phẩm">
                            <a href="">Áo Len Nam Thu Đông Cổ 3 Cm</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/top/top2.png" alt="ảnh sản phẩm">
                            <a href="">Áo Thun Đông Nam Rip Cổ 4cm</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/top/top3.png" alt="ảnh sản phẩm">
                            <a href="">Áo Phông Thể Thao Nam Tanktop</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/top/top4.png" alt="ảnh sản phẩm">
                            <a href="">Áo Ba Lỗ Nam 100% Cotton </a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/top/top5.png" alt="ảnh sản phẩm">
                            <a href="">Giày Lười Nam Moccasin</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/top/top6.png" alt="ảnh sản phẩm">
                            <a href="">Giày Thể Thao Nam YODY</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/top/top7.png" alt="ảnh sản phẩm">
                            <a href="">Mũ Lưỡi Trai Phối Màu Thêu Chữ</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/top/top8.png" alt="ảnh sản phẩm">
                            <a href="">Thắt Lưng Nam Da Bò</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/top/top9.png" alt="ảnh sản phẩm">
                            <a href="">Thắt Lưng Nam Mặt Da Cá Sấu</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/top/top10.png" alt="ảnh sản phẩm">
                            <a href="">Túi Unisex Đeo Chéo Phối Nắp Túi</a>
                        </div>
                    </div>
                </div>
            </div>
</div>