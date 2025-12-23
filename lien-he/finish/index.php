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
                <div class="p-contact-finish">
                    <img width="110" height="110" src="<?= BASE_URL ?>assets/images/ic_success.svg">
                    <div class="p-contact-finish__ttl">Gửi liên hệ thành công</div>
                    <p class="p-contact-finish__txt">Cảm ơn Quý khách đã gửi liên hệ tới NMI MART<br>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất<br>
                        Tổng đài tư vấn: <span class="tel">0356858885</span></p>
                    <a href="../" class="btn-back">Trở về trang chủ</a>
                </div>
            </div>

        </div>
    </main>

    <?php require_once BASE_PATH . 'inc/footer.php'; ?>
</body>