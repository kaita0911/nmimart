<!DOCTYPE html>
<html lang="vi-vn">
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
?>

<head>
    <title>Trang chủ</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/home.css">
    <?php require_once BASE_PATH . 'inc/head.php'; ?>
</head>

<body>

    <?php require_once BASE_PATH . 'inc/header.php'; ?>
    <main>
        <div class="mv-js">
            <a href="">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?= BASE_URL ?>assets/images/mv_sp.jpg" alt="">
                    <img class="img_scale" src="<?= BASE_URL ?>assets/images/mv.jpg">
                </picture>
            </a>
            <a href="">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?= BASE_URL ?>assets/images/mv_sp.jpg" alt="">
                    <img class="img_scale" src="<?= BASE_URL ?>assets/images/mv.jpg">
                </picture>
            </a>
            <a href="">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?= BASE_URL ?>assets/images/mv_sp.jpg" alt="">
                    <img class="img_scale" src="<?= BASE_URL ?>assets/images/mv.jpg">
                </picture>
            </a>

        </div>
        <div class="container">
            <div class="box-sale js-sale-code">
                <?php require_once BASE_PATH . 'inc/sale.php'; ?>
            </div>
            <div class="p-sale">
                <div class="p-sale__head">
                    <div class="p-sale__head__ttl">FLASH SALE<br class="sp"> GIỜ VÀNG</div>
                    <div class="p-sale__head__notice"><strong>NMI MART</strong> - Hỗ trợ thanh toán trực tuyến giảm ngay <strong> 20k </strong> cho đơn hàng 299k</div>
                    <div class="p-sale__head__time">
                        <!-- <div class="box-count"><span class="sale-num" id="days">00</span> ngày</div> -->
                        <div class="box-count"> <span class="sale-num" id="hours">00</span> giờ</div>
                        <div class="box-count"><span class="sale-num" id="minutes">00</span> phút</div>
                        <div class="box-count"><span class="sale-num" id="seconds">00</span> giây</div>
                    </div>
                </div>
                <div class="p-sale__content sale-js">
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                            <div class="product-item__remaining">
                                <div class="product-item__remaining__bar" style="width: 80%;">Còn 10 sản phẩm</div>
                            </div>
                        </div>
                    </a>
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                            <div class="product-item__remaining">
                                <div class="product-item__remaining__bar" style="width: 80%;">Còn 10 sản phẩm</div>
                            </div>
                        </div>
                    </a>
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                            <div class="product-item__remaining">
                                <div class="product-item__remaining__bar" style="width: 80%;">Còn 10 sản phẩm</div>
                            </div>
                        </div>
                    </a>
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                            <div class="product-item__remaining">
                                <div class="product-item__remaining__bar" style="width: 80%;">Còn 10 sản phẩm</div>
                            </div>
                        </div>
                    </a>
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                            <div class="product-item__remaining">
                                <div class="product-item__remaining__bar" style="width: 80%;">Còn 10 sản phẩm</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="p-commit">
                <?php require_once BASE_PATH . 'inc/commit.php'; ?>
            </div>
            <div class="p-cate">
                <div class="ttl01 txt-transform">Danh mục nổi bật</div>
                <div class="p-cate-wrap cate-js">
                    <a class="cate-item" href="">
                        <img class="img_cover" width="80" height="80" src="<?= BASE_URL ?>assets/images/img_cate.png">
                        <div class="cate-item__ttl">Đồ gia dụng</div>
                    </a>
                    <a class="cate-item" href="">
                        <img class="img_cover" width="80" height="80" src="<?= BASE_URL ?>assets/images/img_cate.png">
                        <div class="cate-item__ttl">Thiết bị nhà bếp</div>
                    </a>
                    <a class="cate-item" href="">
                        <img class="img_cover" width="80" height="80" src="<?= BASE_URL ?>assets/images/img_cate.png">
                        <div class="cate-item__ttl">Thiết bị làm mát</div>
                    </a>
                    <a class="cate-item" href="">
                        <img class="img_cover" width="80" height="80" src="<?= BASE_URL ?>assets/images/img_cate.png">
                        <div class="cate-item__ttl">Đồ gia dụng</div>
                    </a>
                    <a class="cate-item" href="">
                        <img class="img_cover" width="80" height="80" src="<?= BASE_URL ?>assets/images/img_cate.png">
                        <div class="cate-item__ttl">Thiết bị nhà bếp</div>
                    </a>
                    <a class="cate-item" href="">
                        <img class="img_cover" width="80" height="80" src="<?= BASE_URL ?>assets/images/img_cate.png">
                        <div class="cate-item__ttl">Thiết bị làm mát</div>
                    </a>
                </div>
            </div>
            <div class="p-bnr">
                <img class="img_cover" width="1200" height="344" src="<?= BASE_URL ?>assets/images/banner.jpg">
            </div>
            <div class="product-home">
                <div class="c-title">
                    <div class="ttl01 txt-transform">Quạt</div>
                    <a class="view-more" href="#">Xem thêm</a>
                </div>
                <div class="product-home-wrap js-product-home">
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                        </div>
                    </a>
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                        </div>
                    </a>
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                        </div>
                    </a>
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="p-bnr">
                <img class="img_cover" src="<?= BASE_URL ?>assets/images/banner.jpg">
            </div>
            <div class="product-home">
                <div class="c-title">
                    <div class="ttl01 txt-transform">Đồ gia dụng</div>
                    <a class="view-more" href="#">Xem thêm</a>
                </div>
                <div class="product-home-wrap js-product-home">
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                        </div>
                    </a>
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                        </div>
                    </a>
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                        </div>
                    </a>
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="p-bnr">
                <img class="img_cover" src="<?= BASE_URL ?>assets/images/banner.jpg">
            </div>
            <div class="product-home">
                <div class="c-title">
                    <div class="ttl01 txt-transform">Thiết bị làm mát</div>
                    <a class="view-more" href="#">Xem thêm</a>
                </div>
                <div class="product-home-wrap js-product-home">
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                        </div>
                    </a>
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                        </div>
                    </a>
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                        </div>
                    </a>
                    <a class="product-item" href="">
                        <span class="product-item__sale">-58%</span>
                        <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                width="274" height="274">
                        </div>
                        <div class="product-item__meta">
                            <div class="product-item__label">NMIMART</div>
                            <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                            <div class="product-price">
                                <span class="new-price">1.045.000đ</span>
                                <span class="old-price">2.500.000đ</span>
                            </div>
                            <div class="product-item__rates">
                                <div class="product-item__rates__star">
                                    <i class="ic_rates"></i>5.0
                                </div>
                                <div class="product-item__buyed"><span class="product-item__buyed__ttl">Đã bán: </span>40000</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="p-bnr">
                <img class="img_cover" src="<?= BASE_URL ?>assets/images/banner.jpg">
            </div>
            <div class="p-news">
                <div class="c-title">
                    <div class="ttl01 txt-transform">Tin tức nổi bật</div>
                    <a class="view-more" href="#">Xem thêm</a>
                </div>

                <div class="p-news-home">
                    <div class="main-news">
                        <a class="main-news__img" href="">
                            <img class="main-news__img img_scale" src="<?= BASE_URL ?>assets/images/main-new.jpg" alt="" width="676"
                                height="403">
                        </a>
                        <div class="main-news__meta">
                            <h3><a class="main-news__ttl" href="#">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm
                                </a></h3>
                            <div class="main-news__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc cho gia đình một năm mới đầy bình an, thịnh vượng và thành công. Năm 2025, với sự chuyển giao năng lượng từ năm Quý Mão sang năm Ất Tỵ ...</div>
                            <div class="main-news__bot">
                                <div class="news-item__date --noline">19 Tháng 4 năm 2025</div>
                                <a href="#" title="" class="view-more-new">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="second-news">
                        <a class="news-item" href="">
                            <div class="news-item__img">
                                <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_2.jpg" alt="" width="244" height="153">
                            </div>
                            <div class="news-item__meta">
                                <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                <div class="news-item__date">19 Tháng 4 năm 2025</div>
                            </div>
                        </a>
                        <a class="news-item" href="">
                            <div class="news-item__img">
                                <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_3.jpg" alt="" width="244" height="153">
                            </div>
                            <div class="news-item__meta">
                                <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                <div class="news-item__date">19 Tháng 4 năm 2025</div>
                            </div>
                        </a>
                        <a class="news-item" href="">
                            <div class="news-item__img">
                                <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_4.jpg" alt="" width="244" height="153">
                            </div>
                            <div class="news-item__meta">
                                <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                <div class="news-item__date">19 Tháng 4 năm 2025</div>
                            </div>
                        </a>
                        <a class="news-item" href="">
                            <div class="news-item__img">
                                <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_5.jpg" alt="" width="244" height="153">
                            </div>
                            <div class="news-item__meta">
                                <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                <div class="news-item__date">19 Tháng 4 năm 2025</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="c-description justify">
                <h2>NMIMART Tiện ích thông minh</h2>
                NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.
            </div>
        </div>
    </main>
    <?php require_once BASE_PATH . 'inc/footer.php'; ?>
</body>