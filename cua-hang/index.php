<!DOCTYPE html>
<html lang="vi-vn">
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
?>

<head>
    <title>Hệ thống cửa hàng</title>
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
                        <span itemprop="name">Hệ thống cửa hàng</span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
        </nav>

        <div class="p-contact">
            <div class="container">
                <h1 class="ttl01 txt-center" style="display: none;">Liên Hệ</h1>
                <div class="store-wrap">
                    <div class="store-list">
                        <div class="store-list__ttl">Hệ thống cửa hàng</div>
                        <div class="store-list__search">
                            <input type="text" placeholder="Nhập địa chỉ, quận, thành phố, ...">
                            <span id="store-search"><img src="<?= BASE_URL ?>assets/images/ic_search.svg" alt=""></span>
                        </div>
                        <div class="store-list-scroll">
                            <div class="store-item">
                                <div class="store-item__ttl">Cửa hàng NMI MART chi nhánh 01</div>
                                <p class="store-item__address">14 Hồ Linh Quang, phường Văn Chương, quận Đống Đa, thành phố Hà Nội</p>
                                <p class="store-item__tel">0356858885</p>
                                <p class="store-item__time">8AM - 5PM</p>
                            </div>
                            <div class="store-item">
                                <div class="store-item__ttl">Cửa hàng NMI MART chi nhánh 02</div>
                                <p class="store-item__address">14 Hồ Linh Quang, phường Văn Chương, quận Đống Đa, thành phố Hà Nội</p>
                                <p class="store-item__tel">0356858885</p>
                                <p class="store-item__time">8AM - 5PM</p>
                            </div>
                            <div class="store-item">
                                <div class="store-item__ttl">Cửa hàng NMI MART chi nhánh 03</div>
                                <p class="store-item__address">14 Hồ Linh Quang, phường Văn Chương, quận Đống Đa, thành phố Hà Nội</p>
                                <p class="store-item__tel">0356858885</p>
                                <p class="store-item__time">8AM - 5PM</p>
                            </div>
                            <div class="store-item">
                                <div class="store-item__ttl">Cửa hàng NMI MART chi nhánh 04</div>
                                <p class="store-item__address">14 Hồ Linh Quang, phường Văn Chương, quận Đống Đa, thành phố Hà Nội</p>
                                <p class="store-item__tel">0356858885</p>
                                <p class="store-item__time">8AM - 5PM</p>
                            </div>
                            <div class="store-item">
                                <div class="store-item__ttl">Cửa hàng NMI MART chi nhánh 05</div>
                                <p class="store-item__address">14 Hồ Linh Quang, phường Văn Chương, quận Đống Đa, thành phố Hà Nội</p>
                                <p class="store-item__tel">0356858885</p>
                                <p class="store-item__time">8AM - 5PM</p>
                            </div>
                        </div>
                    </div>

                    <div id="map">
                        <img src="<?= BASE_URL ?>assets/images/map.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once BASE_PATH . 'inc/footer.php'; ?>
</body>