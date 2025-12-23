<!DOCTYPE html>
<html lang="vi-vn">
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
?>

<head>
    <title>Liên hệ</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/contact.css">
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
                        <span itemprop="name">Liên hệ</span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
        </nav>

        <div class="p-contact">
            <div class="container">
                <h1 class="ttl01 txt-center" style="display: none;">Liên Hệ</h1>
                <div class="p-contact-info">
                    <div class="p-contact-item">
                        <div class="p-contact-item__icon --address"><img src="<?= BASE_URL ?>assets/images/ic_address_3.svg" alt="" width="35" height="42"></div>
                        <div class="p-contact-item__txt">14 Hồ Linh Quang, Văn Chương, Đống Đa, Hà Nội</div>
                    </div>
                    <div class="p-contact-item">
                        <div class="p-contact-item__icon --tel"><img src="<?= BASE_URL ?>assets/images/ic_phone.svg" alt="" width="37" height="37"></div>
                        <div class="p-contact-item__txt">0356.858.885</div>
                    </div>
                    <div class="p-contact-item">
                        <div class="p-contact-item__icon --email"><img src="<?= BASE_URL ?>assets/images/ic_mail.svg" alt="" width="41" height="28"></div>
                        <div class="p-contact-item__txt">info@nmimart.com</div>
                    </div>
                    <div class="p-contact-item">
                        <div class="p-contact-item__icon --global"><img src="<?= BASE_URL ?>assets/images/ic_global.svg" alt="" width="39" height="41"></div>
                        <div class="p-contact-item__txt">www.nmimart.com</div>
                    </div>
                </div>
                <p class="p-contact__txt">Góp ý với chúng tôi. Các chuyên viên tư vấn của chúng tôi sẽ trả lời bạn trong thời gian sớm nhất.

                <div class="p-contact-form">
                    <div class="fr-field">
                        <input type="text" placeholder="Họ tên" id="name">
                        <input type="text" placeholder="Email" id="email">
                    </div>
                    <div class="fr-field">
                        <input type="text" placeholder="Số điện thoại" id="phone">
                        <input type="text" placeholder="Tiêu đề (Không bắt buộc)" id="title">
                    </div>
                    <div class="fr-field">
                        <textarea id="note" placeholder="Nội dung liên hệ"></textarea>
                        <button type="submit" class="btn-send"><span class="ic-send"></span>Gửi đi</button>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2481436529197!2d105.779269374768!3d20.98268793936033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345333285053ed%3A0xd5623418d2bd0ea3!2zS2h1IMSRw7QgdGjhu4sgTeG7lyBMYW8sIE3hu5kgTGFvLCBIw6AgxJDDtG5nLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1766376897131!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>

    <?php require_once BASE_PATH . 'inc/footer.php'; ?>
</body>