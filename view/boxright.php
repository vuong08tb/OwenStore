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
                            <li><a href="index.php?act=dangky">Đăng ký</a></li>
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