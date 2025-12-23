<!DOCTYPE html>
<html lang="vi-vn">
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
?>

<head>
    <title>Chi tiết tin tức</title>
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
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href=""><span itemprop="name">Tin tức sự kiện</span></a>
                        <meta itemprop="position" content="2" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
                        <span itemprop="name">NMI MART - Thế giới gia dụng chính hãng tại Việt Nam</span>
                        <meta itemprop="position" content="3" />
                    </li>
                </ol>
            </div>
        </nav>

        <div class="p-news detail">
            <div class="container">
                <div class="p-news-wrap">
                    <div class="sidebar-news pc">
                        <?php require_once BASE_PATH . 'inc/sidebar-new.php'; ?>
                    </div>
                    <div class="news-content">
                        <h1 class="ttl-detail">NMI MART - Thế giới gia dụng chính hãng tại Việt Nam</h1>
                        <div class="c-info">
                            <div class="c-info-left">
                                <div class="c-date">10/03/2020</div> - <div class="c-writer">Đăng bởi Admin</div>
                                <div class="c-view">2000 lượt xem</div>
                            </div>
                            <div class="c-info-right">
                                <label>Cỡ chữ: </label>
                                <span class="c-cuz-font font-plus"></span>
                                <span class="c-cuz-font font-minus"></span>
                            </div>
                        </div>
                        <div class="box-anchor">
                            <div class="box-anchor-content">
                                <div class="box-anchor__ttl">Mục lục <span class="btn-anchor"><img src="<?= BASE_URL ?>assets/images/ic_list.svg" alt="" width="17" height="17"></span></div>
                                <ul class="box-anchor__lst">
                                    <li><a href="#">Đồ gia dụng trong nhà</a>
                                        <ul>
                                            <li><a href="#">1.1 Đồ gia dụng 01</a></li>
                                            <li><a href="#">1.2 Đồ gia dụng 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Lưu ý khi sử dụng nước hoa nam</a></li>
                                    <li><a href="#">Câu hỏi thường gặp</a></li>
                                    <li><a href="#">Lời kết</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="c-description change-font --custome ">
                            <h2><strong>1</strong>Đồ gia dụng trong nhà</h2>
                            <h3>Đồ gia dụng 01:</h3>

                            <p>NMI MART – Thế giới gia dụng chính hãng tại Việt Nam<br>
                                NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục phẩm và nâng cao chất lượng dịch vụ.<br>
                                Sản phẩm đa dạng, chính hãng</p>
                            <p>Tại NMI MART, khách hàng có thể tìm thấy một loạt các sản phẩm gia dụng từ các thương hiệu nổi tiếng, bao gồm:</p>
                            <ul>
                                <li>Thiết bị nhà bếp: nồi chiên không dầu, máy xay sinh tố, máy ép trái cây, lò vi sóng, bếp từ, máy rửa chén.Gia Dụng Minh Việt</li>
                                <li> Thiết bị chăm sóc sức khỏe: máy massage, máy lọc không khí, máy đo huyết áp, cân điện tử.Gia Dụng Minh Việt</li>
                                <li>Thiết bị làm đẹp: máy sấy tóc, máy duỗi tóc, máy rửa mặt, máy triệt lông.</li>
                                <li> Thiết bị gia đình thông minh: robot hút bụi, camera an ninh, khóa cửa thông minh, đèn LED thông minh.Gia Dụng Minh Việt</li>
                            </ul>
                            <img src="<?= BASE_URL ?>assets/images/img_02.jpg" alt="">
                            <h2><strong>2</strong>Đồ gia dụng trong nhà</h2>
                            <h3>Đồ gia dụng 01:</h3>

                            <p>NMI MART – Thế giới gia dụng chính hãng tại Việt Nam<br>
                                NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục phẩm và nâng cao chất lượng dịch vụ.<br>
                                Sản phẩm đa dạng, chính hãng</p>
                            <p>Tại NMI MART, khách hàng có thể tìm thấy một loạt các sản phẩm gia dụng từ các thương hiệu nổi tiếng, bao gồm:</p>
                            <ul>
                                <li>Thiết bị nhà bếp: nồi chiên không dầu, máy xay sinh tố, máy ép trái cây, lò vi sóng, bếp từ, máy rửa chén.Gia Dụng Minh Việt</li>
                                <li> Thiết bị chăm sóc sức khỏe: máy massage, máy lọc không khí, máy đo huyết áp, cân điện tử.Gia Dụng Minh Việt</li>
                                <li>Thiết bị làm đẹp: máy sấy tóc, máy duỗi tóc, máy rửa mặt, máy triệt lông.</li>
                                <li> Thiết bị gia đình thông minh: robot hút bụi, camera an ninh, khóa cửa thông minh, đèn LED thông minh.Gia Dụng Minh Việt</li>
                            </ul>
                            <div class="c-products-more">
                                <div class="c-products-more__img"><img class="img_scale" src="<?= BASE_URL ?>assets/images/product.jpg" alt=""></div>
                                <div class="c-products-more__meta">
                                    <a class="c-products-more__meta__ttl" href="">Quạt điều hòa số một Việt Nam đến từ nhà NMI MART</a>
                                    <div class="product-price">
                                        <span class="new-price">550.000đ</span>
                                        <span class="old-price">500.000đ</span>
                                    </div>
                                    <div class="c-products-more__meta__rates">
                                        <div class="c-stars">
                                            <div class="star-rating" data-rating="4"></div>
                                        </div>
                                        <div class="c-products-more__meta__rates__buyed"><span class="num">582</span> đã bán</div>
                                    </div>
                                    <div class="c-products-more__meta__btn">
                                        Mua nhanh
                                    </div>
                                    <div class="c-products-more__meta__alarm">NMI MART thường xuyên tổ chức các chương trình khuyến mãi, giảm giá lên đến <strong>50%</strong></div>
                                </div>
                            </div>
                            <h2><strong>3</strong>Đồ gia dụng trong nhà</h2>
                            <h3>Đồ gia dụng 01:</h3>

                            <p>NMI MART – Thế giới gia dụng chính hãng tại Việt Nam<br>
                                NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục phẩm và nâng cao chất lượng dịch vụ.<br>
                                Sản phẩm đa dạng, chính hãng</p>
                            <p>Tại NMI MART, khách hàng có thể tìm thấy một loạt các sản phẩm gia dụng từ các thương hiệu nổi tiếng, bao gồm:</p>
                            <ul>
                                <li>Thiết bị nhà bếp: nồi chiên không dầu, máy xay sinh tố, máy ép trái cây, lò vi sóng, bếp từ, máy rửa chén.Gia Dụng Minh Việt</li>
                                <li> Thiết bị chăm sóc sức khỏe: máy massage, máy lọc không khí, máy đo huyết áp, cân điện tử.Gia Dụng Minh Việt</li>
                                <li>Thiết bị làm đẹp: máy sấy tóc, máy duỗi tóc, máy rửa mặt, máy triệt lông.</li>
                                <li> Thiết bị gia đình thông minh: robot hút bụi, camera an ninh, khóa cửa thông minh, đèn LED thông minh.Gia Dụng Minh Việt</li>
                            </ul>
                        </div>
                        <div class="c-info">
                            <div class="c-info-left">
                                <div class="c-date">10/03/2020</div> - <div class="c-writer">Đăng bởi Admin</div>
                                <div class="c-view">2000 lượt xem</div>
                            </div>
                            <div class="c-info-right">
                                <div class="c-social">
                                    <span class="c-social-btn like">Thích 150</span>
                                    <span class="c-social-btn share">Chia sẻ</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-news-related">
                            <div class="p-news-related__ttl">
                                <div class="ttl01 txt-transform">Tin tức liên quan</div>
                                <div class="slick-arrows-custome">
                                    <span class="slick-prev-news ic-new sl-prev"></span>
                                    <span class="slick-next-news ic-new"></span>
                                </div>
                            </div>
                            <div class="p-news-related-wrap">
                                <div class="js-news-related">
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
                                    <a class="news-item" href="">
                                        <div class="news-item__img --related">
                                            <img class="img_scale" src="<?= BASE_URL ?>assets/images/new_5.jpg" alt="" width="280" height="175">
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
        </div>
    </main>
    <?php require_once BASE_PATH . 'inc/footer.php'; ?>
</body>