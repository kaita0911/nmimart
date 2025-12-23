<!DOCTYPE html>
<html lang="vi-vn">
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
?>

<head>
    <title>Giỏ hàng</title>
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
                        <span itemprop="name">Giỏ hàng</span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <div class="p-cart --view">
                <div class="p-cart-tbl">
                    <table class="pc">
                        <tr>
                            <th class="w-check">
                                <label class="c-checkbox">
                                    <input id="checkAll" type="checkbox" class="item">
                                    <span class="checkmark --cuz"></span>
                                </label>
                            </th>
                            <th class="w-ttl">Thông tin sản phẩm</th>
                            <th class="w-price">Đơn giá</th>
                            <th class="w-qty">Số lượng</th>
                            <th class="w-qty">Thành tiền</th>
                            <th class="w-check">Xoá</th>
                        </tr>
                        <tr class="cart-info-item">
                            <td class="txt-center">
                                <label class="c-checkbox">
                                    <input type="checkbox" class="item">
                                    <span class="checkmark center border"></span>
                                </label>
                            </td>
                            <td>
                                <div class="p-cart-tbl__img-ttl">
                                    <div class="p-cart-tbl__img-ttl__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt="" width="85" height="85"></div>
                                    <div class="p-cart-tbl__img-ttl__ttl">82X Shiharu Collagen - Hộp 10 lon</div>
                                </div>
                            </td>
                            <td class="txt-center">
                                <div class="p-cart-tbl__price">
                                    <span class="new-price">790.000 vnđ</span>
                                    <span class="old-price">1.100.000 vnđ</span>
                                </div>
                            </td>
                            <td>
                                <div class="c-quantity">
                                    <span class="ins btn-minus">-</span>
                                    <input class="qty" type="number" min="1" max="100" value="1">
                                    <span class="ins btn-plus">+</span>
                                </div>
                            </td>
                            <td>
                                <div class="p-cart-tbl__total">1.580.000 vnđ</div>
                            </td>
                            <td class="txt-center">
                                <div class="p-cart-tbl__del">
                                    <img class="img_cover" src="<?= BASE_URL ?>assets/images/ic_close.svg" alt="" width="15" height="15">
                                </div>
                            </td>
                        </tr>
                        <tr class="cart-info-item">
                            <td class="txt-center">
                                <label class="c-checkbox">
                                    <input type="checkbox" class="item">
                                    <span class="checkmark center border"></span>
                                </label>
                            </td>
                            <td>
                                <div class="p-cart-tbl__img-ttl">
                                    <div class="p-cart-tbl__img-ttl__img"><img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt="" width="85" height="85"></div>
                                    <div class="p-cart-tbl__img-ttl__ttl">82X Shiharu Collagen - Hộp 10 lon</div>
                                </div>
                            </td>
                            <td class="txt-center">
                                <div class="p-cart-tbl__price">
                                    <span class="new-price">790.000 vnđ</span>
                                    <span class="old-price">1.100.000 vnđ</span>
                                </div>
                            </td>
                            <td>
                                <div class="c-quantity">
                                    <span class="ins btn-minus">-</span>
                                    <input class="qty" type="number" min="1" max="100" value="1">
                                    <span class="ins btn-plus">+</span>
                                </div>
                            </td>
                            <td>
                                <div class="p-cart-tbl__total">1.580.000 vnđ</div>
                            </td>
                            <td class="txt-center">
                                <div class="p-cart-tbl__del">
                                    <img class="img_cover" src="<?= BASE_URL ?>assets/images/ic_close.svg" alt="" width="15" height="15">
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="sp p-cart-lst">
                        <label class="c-checkbox">
                            <input id="checkAllSp" type="checkbox" class="item">
                            <span class="checkmark border"></span> Chọn tất cả
                        </label>
                        <div class="p-cart-lst__item">
                            <label class="c-checkbox">
                                <input type="checkbox" class="item">
                                <span class="checkmark border"></span>
                            </label>
                            <div class="p-cart-lst__item__img">
                                <img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt="" width="85" height="85">
                            </div>
                            <div class="p-cart-lst__item__meta">
                                <div class="p-cart-lst__item__meta__head">
                                    <div class="p-cart-lst__item__meta__head__ttl">82X Shiharu Collagen - Hộp 10 lon</div>
                                    <div class="p-cart-tbl__del">
                                        <img class="img_cover" src="<?= BASE_URL ?>assets/images/ic_close.svg" alt="" width="15" height="15">
                                    </div>
                                </div>
                                <div class="p-cart-lst__item__meta__bot">
                                    <div class="c-quantity">
                                        <span class="ins btn-minus">-</span>
                                        <input class="qty" type="number" min="1" max="100" value="1">
                                        <span class="ins btn-plus">+</span>
                                    </div>
                                    <div class="p-cart-tbl__price">
                                        <span class="new-price">790.000 vnđ</span>
                                        <span class="old-price">1.100.000 vnđ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-cart-lst__item">
                            <label class="c-checkbox">
                                <input type="checkbox" class="item">
                                <span class="checkmark border"></span>
                            </label>
                            <div class="p-cart-lst__item__img">
                                <img class="img_cover" src="<?= BASE_URL ?>assets/images/product.jpg" alt="" width="85" height="85">
                            </div>
                            <div class="p-cart-lst__item__meta">
                                <div class="p-cart-lst__item__meta__head">
                                    <div class="p-cart-lst__item__meta__head__ttl">82X Shiharu Collagen - Hộp 10 lon</div>
                                    <div class="p-cart-tbl__del">
                                        <img class="img_cover" src="<?= BASE_URL ?>assets/images/ic_close.svg" alt="" width="15" height="15">
                                    </div>
                                </div>
                                <div class="p-cart-lst__item__meta__bot">
                                    <div class="c-quantity">
                                        <span class="ins btn-minus">-</span>
                                        <input class="qty" type="number" min="1" max="100" value="1">
                                        <span class="ins btn-plus">+</span>
                                    </div>
                                    <div class="p-cart-tbl__price">
                                        <span class="new-price">790.000 vnđ</span>
                                        <span class="old-price">1.100.000 vnđ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-cart-tbl-bot pc">
                        <div class="p-cart-tbl-bot__tel">
                            Hotline <strong>0356858885</strong> để được giải đáp<br>
                            Xin trân trọng cảm ơn !
                        </div>
                        <div class="p-cart-tbl-bot__btn">
                            <a href="/product/" class="p-cart-tbl-bot__btn__back bot-btn">Quay lại cửa hàng</a>
                            <a href="/cart/thanh-toan/" class="p-cart-tbl-bot__btn__pay bot-btn">Thanh toán</a>
                        </div>
                    </div>
                </div>
                <div class="p-cart-info">
                    <div class="p-cart-info-box shadow">
                        <div class="p-cart-info__ttl">Tóm tắt đơn hàng</div>
                        <div class="payment-details">
                            <div class="payment-details__txt">Tạm tính <span>4.740.000 vnđ</span></div>
                            <div class="payment-details__txt">Phí vận chuyển <span>Miễn phí</span></div>
                        </div>
                        <div class="payment-total">
                            <p>Tổng tiền thanh toán</p>
                            <p class="payment-total__end">4.740.000 vnđ</p>
                        </div>
                    </div>
                    <div class="payment-recept">
                        <p>Chúng tôi chấp nhận</p>
                        <img src="<?= BASE_URL ?>assets/images/img_pay_2.png" alt="" width="276" height="38">
                    </div>
                </div>
                <div class="p-cart-tbl sp">
                    <div class="p-cart-tbl-bot">
                        <div class="p-cart-tbl-bot__tel">
                            Hotline <strong>0356858885</strong> để được giải đáp<br>
                            Xin trân trọng cảm ơn !
                        </div>
                        <div class="p-cart-tbl-bot__btn">
                            <a href="/product/" class="p-cart-tbl-bot__btn__back bot-btn">Quay lại cửa hàng</a>
                            <a href="/cart/thanh-toan/" class="p-cart-tbl-bot__btn__pay bot-btn">Thanh toán</a>
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