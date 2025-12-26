<!DOCTYPE html>
<html lang="vi-vn">
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
?>

<head>
    <title>Tin tức sự kiện</title>
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
                        <span itemprop="name">Tin tức - sự kiện</span>
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
                        <h1 class="ttl01 txt-transform" style="display: none;">Xu hướng nhà cửa</h1>
                        <div class="news-content-grid">
                            <a class="new-grid-item item-main" href="" title="">
                                <img class="img_scale" width="584" height="413" src="<?= BASE_URL ?>assets/images/new_6.jpg" alt="">
                                <div class="new-grid-item__meta">
                                    <h3 class="new-grid-item__meta__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                    <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                </div>
                            </a>
                            <a class="new-grid-item" href="" title="">
                                <img class="img_scale" width="284" height="201" src="<?= BASE_URL ?>assets/images/new_7.jpg" alt="">
                                <div class="new-grid-item__meta">
                                    <h3 class="new-grid-item__meta__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                    <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                </div>
                            </a>
                            <a class="new-grid-item" href="" title="">
                                <img class="img_scale" width="284" height="201" src="<?= BASE_URL ?>assets/images/new_6.jpg" alt="">
                                <div class="new-grid-item__meta">
                                    <h3 class="new-grid-item__meta__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                    <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                </div>
                            </a>
                        </div>
                        <div class="news-content-section">
                            <div class="c-title">
                                <h2 class="ttl01 txt-transform">Xu hướng nhà cửa</h2>
                                <a class="view-more" href="#">Xem thêm</a>
                            </div>
                            <div class="news-content-section-content">
                                <a class="news-item" href="">
                                    <div class="news-item__img --related">
                                        <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_2.jpg" alt="" width="280" height="175">
                                    </div>
                                    <div class="news-item__meta">
                                        <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                        <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                    </div>
                                </a>
                                <a class="news-item" href="">
                                    <div class="news-item__img --related">
                                        <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_3.jpg" alt="" width="280" height="175">
                                    </div>
                                    <div class="news-item__meta">
                                        <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                        <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                    </div>
                                </a>
                                <a class="news-item" href="">
                                    <div class="news-item__img --related">
                                        <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_4.jpg" alt="" width="280" height="175">
                                    </div>
                                    <div class="news-item__meta">
                                        <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                        <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="news-content-section">
                            <div class="c-title">
                                <h2 class="ttl01 txt-transform">Xu hướng làm đẹp</h2>
                                <a class="view-more" href="#">Xem thêm</a>
                            </div>
                            <div class="news-content-section-content">
                                <a class="news-item" href="">
                                    <div class="news-item__img --related">
                                        <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_2.jpg" alt="" width="280" height="175">
                                    </div>
                                    <div class="news-item__meta">
                                        <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                        <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                    </div>
                                </a>
                                <a class="news-item" href="">
                                    <div class="news-item__img --related">
                                        <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_3.jpg" alt="" width="280" height="175">
                                    </div>
                                    <div class="news-item__meta">
                                        <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                        <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                    </div>
                                </a>
                                <a class="news-item" href="">
                                    <div class="news-item__img --related">
                                        <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_4.jpg" alt="" width="280" height="175">
                                    </div>
                                    <div class="news-item__meta">
                                        <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                        <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="block-product">
                            <div class="c-title">
                                <h2 class="ttl01 txt-transform --liked">Sản phẩm được yêu thích</h2>
                                <div class="slick-arrows-custome">
                                    <span class="slick-prev-product ic-new sl-prev"></span>
                                    <span class="slick-next-product ic-new"></span>
                                </div>
                            </div>
                            <div class="js-product-like c-product --liked">
                                <?php require_once BASE_PATH . 'inc/product.php'; ?>
                            </div>
                        </div>
                        <div class="news-content-section">
                            <div class="c-title">
                                <h2 class="ttl01 txt-transform">Review</h2>
                                <a class="view-more" href="#">Xem thêm</a>
                            </div>
                            <div class="news-content-section-content">
                                <a class="news-item" href="">
                                    <div class="news-item__img --related">
                                        <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_2.jpg" alt="" width="280" height="175">
                                    </div>
                                    <div class="news-item__meta">
                                        <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                        <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                    </div>
                                </a>
                                <a class="news-item" href="">
                                    <div class="news-item__img --related">
                                        <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_3.jpg" alt="" width="280" height="175">
                                    </div>
                                    <div class="news-item__meta">
                                        <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                        <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                    </div>
                                </a>
                                <a class="news-item" href="">
                                    <div class="news-item__img --related">
                                        <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_4.jpg" alt="" width="280" height="175">
                                    </div>
                                    <div class="news-item__meta">
                                        <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                        <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="news-content-section">
                            <div class="c-title">
                                <h2 class="ttl01 txt-transform">Tin thế giới</h2>
                                <a class="view-more" href="#">Xem thêm</a>
                            </div>
                            <div class="news-content-section-content">
                                <a class="news-item" href="">
                                    <div class="news-item__img --related">
                                        <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_2.jpg" alt="" width="280" height="175">
                                    </div>
                                    <div class="news-item__meta">
                                        <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                        <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                    </div>
                                </a>
                                <a class="news-item" href="">
                                    <div class="news-item__img --related">
                                        <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_3.jpg" alt="" width="280" height="175">
                                    </div>
                                    <div class="news-item__meta">
                                        <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                        <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                    </div>
                                </a>
                                <a class="news-item" href="">
                                    <div class="news-item__img --related">
                                        <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_4.jpg" alt="" width="280" height="175">
                                    </div>
                                    <div class="news-item__meta">
                                        <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                        <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="news-content-section">
                            <div class="c-title">
                                <h2 class="ttl01 txt-transform">Tin trong nước</h2>
                                <a class="view-more" href="#">Xem thêm</a>
                            </div>
                            <div class="news-content-section-content">
                                <a class="news-item" href="">
                                    <div class="news-item__img --related">
                                        <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_2.jpg" alt="" width="280" height="175">
                                    </div>
                                    <div class="news-item__meta">
                                        <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                        <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                    </div>
                                </a>
                                <a class="news-item" href="">
                                    <div class="news-item__img --related">
                                        <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_3.jpg" alt="" width="280" height="175">
                                    </div>
                                    <div class="news-item__meta">
                                        <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                        <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                    </div>
                                </a>
                                <a class="news-item" href="">
                                    <div class="news-item__img --related">
                                        <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_4.jpg" alt="" width="280" height="175">
                                    </div>
                                    <div class="news-item__meta">
                                        <h3 class="news-item__ttl">Bảng Tra Tuổi Đẹp Xông Đất Đầu Năm 2025 - Bí Quyết Đón Lộc Đầu Năm</h3>
                                        <div class="news-item__txt">Chọn người xông đất đầu năm là một phong tục truyền thống đẹp của người Việt, mang ý nghĩa cầu chúc ...</div>
                                        <div class="news-item__date">19 Tháng 4 năm 2025</div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once BASE_PATH . 'inc/footer.php'; ?>
</body>