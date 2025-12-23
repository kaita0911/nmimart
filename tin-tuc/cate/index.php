<!DOCTYPE html>
<html lang="vi-vn">
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
?>

<head>
    <title>Xu hướng nhà cửa</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/news.css">
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
                        <span itemprop="name">Xu hướng nhà cửa</span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
        </nav>

        <div class="p-news">
            <div class="container">
                <div class="p-news-wrap">
                    <div class="sidebar-news pc">
                        <?php require_once BASE_PATH . 'inc/sidebar-new.php'; ?>
                    </div>
                    <div class="news-content">
                        <h1 class="ttl01 txt-transform">Xu hướng nhà cửa</h1>
                        <div class="news-content-inner">
                            <a class="news-item --sub" href="">
                                <div class="news-item__img">
                                    <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_2.jpg" alt="" width="280" height="175">
                                </div>
                                <div class="news-item__meta">
                                    <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                    <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                    <div class="news-item__bot">
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                        <span class="news-item__btn">Xem thêm</span>
                                    </div>
                                </div>
                            </a>
                            <a class="news-item --sub" href="">
                                <div class="news-item__img">
                                    <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_2.jpg" alt="" width="280" height="175">
                                </div>
                                <div class="news-item__meta">
                                    <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                    <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                    <div class="news-item__bot">
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                        <span class="news-item__btn">Xem thêm</span>
                                    </div>
                                </div>
                            </a>
                            <a class="news-item --sub" href="">
                                <div class="news-item__img">
                                    <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_2.jpg" alt="" width="280" height="175">
                                </div>
                                <div class="news-item__meta">
                                    <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                    <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                    <div class="news-item__bot">
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                        <span class="news-item__btn">Xem thêm</span>
                                    </div>
                                </div>
                            </a>
                            <a class="news-item --sub" href="">
                                <div class="news-item__img">
                                    <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_2.jpg" alt="" width="280" height="175">
                                </div>
                                <div class="news-item__meta">
                                    <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                    <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                    <div class="news-item__bot">
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                        <span class="news-item__btn">Xem thêm</span>
                                    </div>
                                </div>
                            </a>
                            <div class="load-more">
                                <div class="load-more__txt">Bạn đang xem 10/109</div>
                                <div class="progress" data-num="10" data-total="109">
                                    <div class="bar"></div>
                                    <span class="percent"></span>
                                </div>
                                <span class="load-more__btn">Xem thêm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once BASE_PATH . 'inc/footer.php'; ?>
</body>