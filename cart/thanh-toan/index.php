<!DOCTYPE html>
<html lang="vi-vn">
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
?>

<head>
    <title>Thanh toán</title>
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
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
                        <span itemprop="name">Thanh toán</span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
        </nav>

        <div class="container">
            <div class="p-cart">
                <div class="p-cart-left">
                    <p class="p-cart-left-txt">Mua thêm các sản phẩm tại NMImart <a class="tlink" href="#" title="">Nhận ưu đãi!</a></p>
                    <div class="f-cart">

                        <input type="text" id="name" name="name" placeholder="Họ và tên" required>

                        <input type="tel" id="phone" name="phone" placeholder="Số điện thoại" required>

                        <input type="text" id="address" name="address" placeholder="Nhập địa chỉ" required>

                        <input type="email" id="email" name="email" placeholder="Nhập email">

                        <div class="f-cart-select">
                            <select id="city" name="city" required>
                                <option value="">Thành phố</option>
                                <option value="">TP.HCM</option>
                                <option value="">Bình Dương</option>
                                <option value="">Long An</option>
                            </select>
                        </div>
                        <div class="f-cart-select">
                            <select id="district" name="district" required>
                                <option value="">Chọn Quận/Huyện</option>
                                <option value="">TP.HCM</option>
                                <option value="">Bình Dương</option>
                                <option value="">Long An</option>
                            </select>
                        </div>
                        <div class="f-cart-select">
                            <select id="ward" name="ward" required>
                                <option value="">Chọn Phường/Xã</option>
                                <option value="">TP.HCM</option>
                                <option value="">Bình Dương</option>
                                <option value="">Long An</option>
                            </select>
                        </div>

                        <textarea type="text" name="note" placeholder="Ghi chú"></textarea>

                    </div>
                    <div class="p-cart-ttl">Phương thức thanh toán</div>
                    <div class="p-cart-payment">
                        <label class="payment-item">
                            <input type="radio" name="payment" value="cod" checked>
                            <span class="circle"></span> Thanh toán khi nhận hàng
                        </label>
                        <label class="payment-item">
                            <input type="radio" name="payment" value="vnpay">
                            <span class="circle"></span>
                            Thanh toán qua VNPAY
                        </label>
                        <label class="payment-item">
                            <input type="radio" name="payment" value="momo">
                            <span class="circle"></span>
                            Thanh toán qua MOMO
                        </label>
                        <label class="payment-item">
                            <input type="radio" name="payment" value="visa">
                            <span class="circle --visa"></span>
                            <div class="payment-item-visa"> Online payment by Visa, Master Card, ...
                                <img width="438" height="83" src="<?= BASE_URL ?>assets/images/img_pay_3.png" alt="payment">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="p-cart-right">
                    <div class="p-cart-right-content shadow">
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

                        <div class="payment-details">
                            <div class="payment-details__txt">Tạm tính <span>4.740.000 vnđ</span></div>
                            <div class="payment-details__voucher">
                                <input type="text" name="voucher" placeholder="Nhập mã giảm giá">
                                <span class="btn-voucher">Áp dụng</span>
                            </div>
                            <div class="payment-details__txt">Phí vận chuyển <span>Miễn phí</span></div>
                        </div>
                        <div class="payment-total">
                            <p>Tổng tiền thanh toán</p>
                            <p class="payment-total__end">4.740.000 vnđ</p>
                        </div>
                    </div>
                </div>
                <div class="p-cart-back">
                    <a class="back-to-cart" href="/cart" title="">Trở về giỏ hàng</a>
                    <a class="btn-finish" href="/cart/finish/">Hoàn tất đơn hàng</a>
                </div>
            </div>
        </div>

    </main>

    <?php require_once BASE_PATH . 'inc/footer.php'; ?>
    <!-- <script>
        const checkbox = document.getElementById('check-other');
        const box = document.getElementById('contact-other');

        checkbox.addEventListener('change', function() {
            box.classList.toggle('is-show', this.checked);
        });
        document.addEventListener('DOMContentLoaded', function() {
            const radios = document.querySelectorAll('input[type="radio"][name="payment"]');
            const target = document.getElementById('pay-target');

            function updateContent(radio) {
                const content = radio.parentElement.querySelector('.pay-method').innerHTML;
                target.innerHTML = content;
            }
            const defaultChecked = document.querySelector('input[type="radio"][name="payment"]:checked');
            if (defaultChecked) {
                updateContent(defaultChecked);
            }
            radios.forEach(radio => {
                radio.addEventListener('change', function() {
                    if (radio.checked) {
                        updateContent(radio);
                    }
                });
            });
        });
        const checkAll = document.getElementById("checkAll");
        const items = document.querySelectorAll(".cart-info-item .item");

        checkAll.addEventListener("change", function() {
            items.forEach(cb => cb.checked = this.checked);
        });

        items.forEach(cb => {
            cb.addEventListener("change", function() {
                checkAll.checked = [...items].every(item => item.checked);
            });
        });
    </script> -->
</body>