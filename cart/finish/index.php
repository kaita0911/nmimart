<!DOCTYPE html>
<html lang="vi-vn">
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
?>

<head>
    <title>Đặt hàng thành công</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/contact.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/cart.css">
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
                    <!-- <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="/shop"><span itemprop="name">Liên hệ</span></a>
                        <meta itemprop="position" content="2" />
                    </li> -->
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
                        <span itemprop="name">Đặt hàng thành công</span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <div class="p-contact">
                <h1 class="ttl01 txt-center" style="display: none;">Liên Hệ</h1>
                <div class="p-contact-finish">
                    <img width="110" height="110" src="<?= BASE_URL ?>assets/images/ic_success.svg">
                    <div class="p-contact-finish__ttl">Đặt hàng thành công</div>
                    <p class="p-contact-finish__txt">Cảm ơn <strong>Quý khách</strong> đã quan tâm và đặt sản phẩm tại NMI MART</p>
                    <p class="p-contact-finish__txt"> Đơn hàng số <span class="order-code">NMI1586</span> đã được tạo thành công.<br>
                        Chúng tôi sẽ liên hệ với bạn trong vòng 30 phút và cam kết giao hàng miễn phí các sản phẩm tại NMI MART.</p>
                    <p class="p-contact-finish__txt">Tổng đài tư vấn: <span class="tel">0356858885</span>
                    </p>
                    <a href="<?= BASE_URL ?>" class="btn-back">Trở về trang chủ</a>
                </div>
            </div>
            <div class="p-cart --finish shadow">
                <div class="p-cart-left">
                    <div class="cart-sumary">
                        <div class="cart-sumary__ttl"><span>Thông tin đơn hàng</span></div>
                        <div class="cart-sumary__lst">
                            <div class="cart-sumary__lst__item">
                                <div class="cart-sumary__lst__item__ttl">Họ tên khách hàng</div>
                                <div class="cart-sumary__lst__item__txt">Đỗ Tuấn Anh</div>
                            </div>
                            <div class="cart-sumary__lst__item">
                                <div class="cart-sumary__lst__item__ttl">Số điện thoại</div>
                                <div class="cart-sumary__lst__item__txt">0838288879</div>
                            </div>
                            <div class="cart-sumary__lst__item">
                                <div class="cart-sumary__lst__item__ttl">Địa chỉ nhận hàng</div>
                                <div class="cart-sumary__lst__item__txt">60 Đường Yên Phu, phường Nguyễn Trung Trực, Ba Đình, Hà Nội</div>
                            </div>
                            <div class="cart-sumary__lst__item">
                                <div class="cart-sumary__lst__item__ttl">Email</div>
                                <div class="cart-sumary__lst__item__txt">tfreedesigner@gmail.com</div>
                            </div>
                            <div class="cart-sumary__lst__item">
                                <div class="cart-sumary__lst__item__ttl"> Ghi chú</div>
                                <div class="cart-sumary__lst__item__txt">Giao hàng cho tôi giờ hành chính trước 5h30 chiều và nhớ gọi trước</div>
                            </div>
                        </div>
                        <div class="cart-sumary__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/mv.jpg" alt="" width="547" height="169"></div>
                    </div>
                </div>
                <div class="p-cart-right ">
                    <div class="p-cart-right-content none-bg">
                        <div class="cart-item-end">
                            <div class="cart-item-end__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt="" width="85" height="85"></div>
                            <div class="cart-item-end__meta">
                                <div class="cart-item-end__ttl">82X Shiharu Collagen - Hộp 10 lon</div>
                                <div class="cart-item-end__qty">Số lượng: 2</div>
                                <div class="cart-item-end__price">175.000.000 vnđ</div>
                            </div>
                        </div>

                        <div class="cart-item-end">
                            <div class="cart-item-end__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt="" width="85" height="85"></div>
                            <div class="cart-item-end__meta">
                                <div class="cart-item-end__ttl">82X Shiharu Collagen - Hộp 10 lon</div>
                                <div class="cart-item-end__qty">Số lượng: 2</div>
                                <div class="cart-item-end__price">175.000.000 vnđ</div>
                            </div>
                        </div>

                        <div class="cart-item-end">
                            <div class="cart-item-end__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt="" width="85" height="85"></div>
                            <div class="cart-item-end__meta">
                                <div class="cart-item-end__ttl">82X Shiharu Collagen - Hộp 10 lon</div>
                                <div class="cart-item-end__qty">Số lượng: 2</div>
                                <div class="cart-item-end__price">175.000.000 vnđ</div>
                            </div>
                        </div>

                        <div class="payment-details --finish">
                            <div class="payment-details__txt">Tạm tính <span>4.740.000 vnđ</span></div>
                            <div class="payment-details__txt">Phí vận chuyển <span>Miễn phí</span></div>
                        </div>
                        <div class="payment-total">
                            <p>Tổng tiền thanh toán</p>
                            <p class="payment-total__end">4.740.000 vnđ</p>
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
</body>