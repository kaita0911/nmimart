<!DOCTYPE html>
<html lang="vi-vn">
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
?>

<head>
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/product.css">
    <?php require_once BASE_PATH . 'inc/head.php'; ?>
</head>

<body>
    <?php require_once BASE_PATH . 'inc/header.php'; ?>
    <main>

        <nav class="breadcrumb" aria-label="Breadcrumb">
            <div class="container">
                <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="/"><span itemprop="name">Home</span></a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="/shop"><span itemprop="name">Quạt</span></a>
                        <meta itemprop="position" content="2" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
                        <span itemprop="name">Quạt phun sương NMIMART - QCT01</span>
                        <meta itemprop="position" content="3" />
                    </li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <div class="p-product-detail">
                <div class="p-product-detail__top">
                    <div class="product-gallery w-50">
                        <div class="slider-for">
                            <div><a data-fancybox="gallery" href="<?= BASE_URL ?>assets/images/img_dt.png"><img
                                        src="<?= BASE_URL ?>assets/images/img_dt.png" alt=""></a></div>
                            <div><a data-fancybox="gallery" href="<?= BASE_URL ?>assets/images/img_04.png"><img
                                        src="<?= BASE_URL ?>assets/images/img_04.png" alt=""></a></div>
                            <div><a data-fancybox="gallery" href="<?= BASE_URL ?>assets/images/product.jpg"><img
                                        src="<?= BASE_URL ?>assets/images/product.jpg" alt=""></a></div>
                            <div><a data-fancybox="gallery" href="<?= BASE_URL ?>assets/images/img_dt.png"><img
                                        src="<?= BASE_URL ?>assets/images/img_dt.png" alt=""></a></div>
                            <div><a data-fancybox="gallery" href="<?= BASE_URL ?>assets/images/img_04.png"><img
                                        src="<?= BASE_URL ?>assets/images/img_04.png" alt=""></a></div>

                        </div>
                        <div class="slider-nav">
                            <div class="slider-nav__item"><img class="img_scale" src="<?= BASE_URL ?>assets/images/img_dt.png" alt=""></div>
                            <div class="slider-nav__item"><img class="img_scale" src="<?= BASE_URL ?>assets/images/img_04.png" alt=""></div>
                            <div class="slider-nav__item"><img class="img_scale" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""></div>
                            <div class="slider-nav__item"><img class="img_scale" src="<?= BASE_URL ?>assets/images/img_dt.png" alt=""></div>
                            <div class="slider-nav__item"><img class="img_scale" src="<?= BASE_URL ?>assets/images/img_04.png" alt=""></div>

                        </div>
                    </div>
                    <div class="product-meta w-50">
                        <h1 class="ttl-detail-02">Quạt phun sương NMIMART - QCT01</h1>
                        <div class="product-meta__multi">
                            <div class="product-item__rates__star --detail">
                                <i class="ic_rates"></i>5.0
                            </div>
                            <div class="product-meta__multi__views"><span>3.7k Đánh giá</span><span>5k Đã bán</span></div>
                        </div>
                        <div class="product-meta__brand">
                            <label>Thương hiệu:<span>AFC</span></label>
                            <label>Tình trạng:<span>Còn hàng</span></label>
                            <label>Mã SP:<span>SP000038</span></label>
                        </div>
                        <div class="product-meta__sale">
                            <div class="product-meta__sale__ttl">flash deal</div>
                            <div class="product-meta__sale__time"><span class="pc">Kết thúc trong</span>
                                <div class="box-time">
                                    <span class="box-time-num" id="hours"></span>
                                    <span class="box-time-num" id="minutes"></span>
                                    <span class="box-time-num" id="seconds"></span>
                                </div>
                            </div>
                        </div>
                        <div class="product-meta__price">
                            <div class="price-now">1.110.000đ</div>
                            <p>Giá thị trường: <span class="price-old">1.399.000đ</span> - Tiết kiệm 100.000đ (<span class="save-percent">10%</span>)</p>
                        </div>
                        <div class="product-meta__parts">
                            <label>Phân loại</label>
                            <span class="variale-item active">1 cánh</span>
                            <span class="variale-item">2 cánh</span>
                        </div>
                        <div class="product-meta__qty">
                            <label>Số lượng</label>
                            <div class="c-quantity --detail">
                                <span class="ins btn-minus"></span>
                                <input class="qty" type="number" min="1" max="100" value="1">
                                <span class="ins btn-plus"></span>
                            </div>
                        </div>
                        <div class="product-meta__gift">
                            <p class="product-meta__gift__img">
                                <img width="89" height="89" src="<?= BASE_URL ?>assets/images/img_03.png" alt="">
                            </p>
                            <div class="product-meta__gift__meta">
                                <label class="product-meta__gift__meta__label">Quà tặng:</label>
                                <div class="product-meta__gift__meta__ttl">70 gói thảo dược ngâm chân</div>
                                <div class="product-meta__gift__meta__price">Trị giá <span>150.000đ</span></div>
                            </div>
                        </div>
                        <div class="c-btn-cart">
                            <div id="add-to-cart" class="c-btn-cart-btn addtocart"><span>Thêm vào giỏ hàng</span></div>
                            <a class="c-btn-cart-btn buynow" href="<?= BASE_URL ?>cart/thanh-toan/">Đặt mua Ngay</a>
                        </div>
                        <div class="product-meta__short">
                            <ul>
                                <li>Kiểm tra hàng rồi mới thanh toán</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="p-commit --product">
                    <?php require_once BASE_PATH . 'inc/commit.php'; ?>
                </div>
                <div class="box-sale js-sale-code">
                    <?php require_once BASE_PATH . 'inc/sale.php'; ?>
                </div>
                <div class="p-product-detail__body">
                    <div class="p-product-detail__body__left">
                        <div class="p-product-detail__ttl"><span>Thông tin chi tiết</span></div>
                        <div class="c-description --anchor --product" id="product-detail">
                            THÔNG SỐ KỸ THUẬT :<br>
                            • Hệ thống tuần hoàn mạnh mẽ thiết kế mới cải tiến hoàn toàn 20<br>
                            • Phạm vi cung cấp không khí rộng hơn thiết kế chiều dài khe gió 510 mm<br>
                            • Thiết kế 4800 lỗ hút gió xoay 360 độ vì vậy sẽ làm mát nhanh hơn<br>
                            • Động cơ không than chổi DC cải tiến tiếng ồn <= 35db<br>
                                • Tạo độ ẩm nguyên tử siêu âm làm mát hơn giảm khô trong nhà<br>
                                • Màn hình LED cảm ứng<br>
                                • Hút mùi hôi nấm mốc làm sạch khói bụi thanh lọc không khí<br>
                                • Đèn diệt khuẩn tia cực tím UV tiêu diệt lượng vi khuẩn lớn<br>
                                • Hẹn giờ sử dụng 1H - 6H<br>
                                Tổng hợp chức năng : Quạt 6 tốc độ gió + Lọc không khí bụi mịn + Khử trùng khử mùi hôi ẩm mốc UV + Phun sương Tạo ẩm + Thiết kế cải tiến lực gió mát hơn .<br>
                                #Quatcamtay #quatminicamtay #Quatkhongcanh #quatmini #quatminicamtay #quatcamtayminisacdien #quatdienmini #quatdiencamtay #quatdiencamtay #quatminitichdien #quatsacdien #quattichdienminicamtay #quatminisacdien #quatsaccamtay #quattichdiencamtay #mayquatminisacdien #dụngcụ #dogiadung #dotienich #tienich #giare #modeco
                                <img src="<?= BASE_URL ?>assets/images/img_04.png" alt="nmimart">
                                NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.
                                <br>
                                NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.

                                <div class="btn-load-more" id="view-more-detail">
                                    <span class="c-more">Xem thêm </span>
                                </div>
                        </div>
                    </div>
                    <div class="p-product-detail__body__right">
                        <div class="product-specifications">
                            <div class="p-product-detail__ttl"><span>Thông số kĩ thuật</span></div>

                            <table>
                                <tr>
                                    <td>Màu sắc</td>
                                    <td>Đen vàng cam</td>
                                </tr>
                                <tr>
                                    <td>Điện thế</td>
                                    <td>Đen vàng cam</td>
                                </tr>
                                <tr>
                                    <td>Tần số</td>
                                    <td>220V-240V</td>
                                </tr>
                                <tr>
                                    <td>Công suất</td>
                                    <td>50Hz-60Hz</td>
                                </tr>
                                <tr>
                                    <td>Điều khiển</td>
                                    <td>Tự động</td>
                                </tr>
                            </table>
                            <div class="product-specifications__btn" id="btn-open-detail"><span>Xem chi tiết</span></div>
                            <div class="popup-overlay" id="popup-detail">
                                <div class="popup-box">
                                    <button class="popup-close" id="btn-close">×</button>
                                    <div class="popup-box__ttl">Thông số kỹ thuật</div>
                                    <div class="product-specifications__detail">
                                        <table>
                                            <tr>
                                                <td>Màu sắc</td>
                                                <td>Đen vàng cam</td>
                                            </tr>
                                            <tr>
                                                <td>Điện thế</td>
                                                <td>Đen vàng cam</td>
                                            </tr>
                                            <tr>
                                                <td>Tần số</td>
                                                <td>220V-240V</td>
                                            </tr>
                                            <tr>
                                                <td>Công suất</td>
                                                <td>50Hz-60Hz</td>
                                            </tr>
                                            <tr>
                                                <td>Điều khiển</td>
                                                <td>Tự động</td>
                                            </tr>
                                            <tr>
                                                <td>Khung lăn</td>
                                                <td>Massage 4D</td>
                                            </tr>
                                            <tr>
                                                <td>Công nghệ</td>
                                                <td>Lưng – Chân</td>
                                            </tr>
                                            <tr>
                                                <td>Nhiệt hồng ngoại</td>
                                                <td>Toàn thân</td>
                                            </tr>
                                            <tr>
                                                <td>Túi khí</td>
                                                <td>8 bài</td>
                                            </tr>
                                            <tr>
                                                <td>Tự động</td>
                                                <td>Có zero</td>
                                            </tr>
                                            <tr>
                                                <td>Chế độ lùi tường</td>
                                                <td>Có</td>
                                            </tr>
                                            <tr>
                                                <td>Chip AI</td>
                                                <td>Có</td>
                                            </tr>
                                            <tr>
                                                <td>Body Scan</td>
                                                <td>Có</td>
                                            </tr>
                                            <tr>
                                                <td>Âm thanh Hifi</td>
                                                <td>Có</td>
                                            </tr>
                                            <tr>
                                                <td>Hệ thống tạm ngưng</td>
                                                <td>Có</td>
                                            </tr>
                                            <tr>
                                                <td>Công nghệ giảm ồn</td>
                                                <td>ANC < 48dB</td>
                                            </tr>
                                            <tr>
                                                <td>Nhiệt hồng ngoại</td>
                                                <td>Toàn thân</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-product-hot">
                            <div class="p-product-detail__ttl"><span>Thông số kĩ thuật</span></div>
                            <a class="product-item hot" href="">
                                <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                        width="205" height="205">
                                </div>
                                <div class="product-item__meta">

                                    <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                                    <div class="product-price hot">
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
                            <a class="product-item hot" href="">
                                <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                        width="205" height="205">
                                </div>
                                <div class="product-item__meta">

                                    <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                                    <div class="product-price hot">
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
                            <a class="product-item hot" href="">
                                <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                        width="205" height="205">
                                </div>
                                <div class="product-item__meta">

                                    <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                                    <div class="product-price hot">
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
                            <a class="product-item hot" href="">
                                <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                        width="205" height="205">
                                </div>
                                <div class="product-item__meta">

                                    <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                                    <div class="product-price hot">
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
                            <a class="product-item hot" href="">
                                <div class="product-item__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""
                                        width="205" height="205">
                                </div>
                                <div class="product-item__meta">

                                    <h3 class="product-item__ttl">Quạt phun sương NMIMART - QCT01</h3>
                                    <div class="product-price hot">
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
                </div>
                <div class="product-reviews">
                    <div class="product-reviews__ttl">Đánh giá</div>
                    <div class="product-reviews__top">
                        <div class="c-stars product-reviews__top__item">
                            <label class="num">4.8</label>
                            <div class="star-rating" data-rating="4.5"></div>
                        </div>
                        <div class="product-reviews__top__item">
                            <label class="num">50</label> Đánh giá
                        </div>
                        <div class="product-reviews__top__item">
                            <label class="num">50</label> Đã bán
                        </div>
                    </div>
                    <div class="product-reviews__lst">
                        <div class="product-reviews__lst__item">
                            <p class="product-reviews__lst__item__img"><img src="<?= BASE_URL ?>assets/images/logo_2.png" alt="nmimart" width="50" height="50"></p>
                            <div class="product-reviews__lst__item__meta">
                                <div class="product-reviews__lst__item__meta__top">
                                    <h3 class="product-reviews__lst__item__meta__ttl">Nguyễn Quỳnh Anh</h3>
                                    <label class="sticked">Đã mua hàng tại nmimart.com</label>
                                </div>
                                <div class="c-stars">
                                    <div class="star-rating" data-rating="4.8"></div>
                                </div>
                                <div class="product-reviews__lst__item__meta__txt">
                                    Tôi đã sử dụng sản phẩm cảm thấy rất hài lòng, hàng xịn các bạn tư vấn cũng rất nhiệt tình. sẽ ủng hộ và giới thiệu sản phẩm tới bạn bè của mình
                                </div>
                                <div class="product-reviews__lst__item__meta__bot">
                                    <span class="news-item__date --noline"> 2022-09-08</span>
                                    <span class="c-time">11:27</span>
                                    <span class="c-like btn-like"><span id="like-count">14</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="product-reviews__lst__item">
                            <p class="product-reviews__lst__item__img"><img src="<?= BASE_URL ?>assets/images/logo_2.png" alt="nmimart" width="50" height="50"></p>
                            <div class="product-reviews__lst__item__meta">
                                <div class="product-reviews__lst__item__meta__top">
                                    <h3 class="product-reviews__lst__item__meta__ttl">Phạm Thị Lan</h3>
                                    <label class="sticked">Đã mua hàng tại nmimart.com</label>
                                </div>
                                <div class="c-stars">
                                    <div class="star-rating" data-rating="4.8"></div>
                                </div>
                                <div class="product-reviews__lst__item__meta__txt">
                                    Tôi đã sử dụng sản phẩm cảm thấy rất hài lòng, hàng xịn các bạn tư vấn cũng rất nhiệt tình. sẽ ủng hộ và giới thiệu sản phẩm tới bạn bè của mình<br>
                                    <img src="<?= BASE_URL ?>assets/images/img_06.jpg" alt="nmimart">
                                </div>
                                <div class="product-reviews__lst__item__meta__bot">
                                    <span class="news-item__date --noline"> 2022-09-08</span>
                                    <span class="c-time">11:27</span>
                                    <span class="c-like btn-like"><span id="like-count">104</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="product-reviews__more" href="">Xem thêm đánh giá</a>
                    <div class="product-reviews__comment">
                        <div class="c-stars product-reviews__comment__top">Thêm điểm đánh giá
                            <div class="star-rating --comment" data-rating="3"></div>
                        </div>
                        <div class="product-reviews__comment__form">
                            <div class="fr-group">
                                <textarea class="fr-field text --full" id="note" placeholder="Mời bạn để lại đánh giá tại đây. Xin cảm ơn!"></textarea>
                            </div>
                            <div class="fr-group">
                                <input class="fr-field" type="text" placeholder="Họ tên" id="name">
                                <input class="fr-field" type="text" placeholder="Số điện thoại" id="phone">
                                <input class="fr-field" type="text" placeholder="Email" id="email">
                                <button type="submit" class="btn-send">Gửi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-product no-bg">
                <div class="c-title">
                    <div class="ttl01 txt-transform --liked">Có thể bạn cũng thích</div>
                    <div class="slick-arrows-custome">
                        <span class="slick-prev-product ic-new sl-prev"></span>
                        <span class="slick-next-product ic-new"></span>
                    </div>
                </div>
                <div class="js-product-like">
                    <?php require_once BASE_PATH . 'inc/product.php'; ?>
                </div>
            </div>
        </div>
    </main>
    <?php require_once BASE_PATH . 'inc/footer.php'; ?>
    <script>
        $(document).ready(function() {
            // Khởi tạo slider hình to và thumbnail
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                arrows: false,
                dots: false,
                centerMode: false,
                focusOnSelect: true
            });

            // Khởi tạo fancybox cho ảnh phóng to
            Fancybox.bind("[data-fancybox='gallery']", {
                Thumbs: {
                    autoStart: true
                }
            });
        });
    </script>
    <script>
        const btnOpen = document.getElementById("btn-open-detail");
        const btnClose = document.getElementById("btn-close");
        const popup = document.getElementById("popup-detail");

        btnOpen.addEventListener("click", () => {
            popup.classList.add("show");
            document.documentElement.classList.add("noscroll");
        });

        btnClose.addEventListener("click", () => {
            popup.classList.remove("show");
            document.documentElement.classList.remove("noscroll");
        });

        // Click ra ngoài popup thì đóng
        popup.addEventListener("click", (e) => {
            if (e.target === popup) {
                popup.classList.remove("show");
                document.documentElement.classList.remove("noscroll");
            }
        });
    </script>

</body>