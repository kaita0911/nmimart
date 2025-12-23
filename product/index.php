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
        <nav class="breadcrumb has-bnr" aria-label="Breadcrumb">
            <div class="container">
                <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="/"><span itemprop="name">Home</span></a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
                        <span itemprop="name">Quạt</span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <div class="p-product">
                <h1 class="ttl-cate txt-center">Quạt điều hòa hot nhất năm 2025</h1>
                <div class="c-images"><img src="<?= BASE_URL ?>assets/images/img_01.png" alt="nmimart"></div>
                <div class="c-short">
                    NMI MART – Thế giới gia dụng chính hãng tại Việt Nam<br>
                    NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao chất lượng dịch vụ.
                </div>
                <div class="p-product-wrap">
                    <div class="c-sidebar" id="sidebar-popup">
                        <div class="c-sidebar-pop sp">Bộ lọc <span class="filter-close"></span></div>
                        <div class="c-sidebar__block">
                            <div class="c-sidebar__ttl">Quạt</div>
                            <div class="c-sidebar__grid">
                                <a href="#" class="c-sidebar__item">Quạt điều hòa</a>
                                <a href="#" class="c-sidebar__item">Quạt cầm tay</a>
                                <a href="#" class="c-sidebar__item">Quạt đeo cổ</a>
                                <a href="#" class="c-sidebar__item">Quạt dã ngoại</a>
                                <a href="#" class="c-sidebar__item">Quạt để bàn</a>
                            </div>
                        </div>
                        <div class="c-sidebar__block">
                            <div class="c-sidebar__ttl">Lọc giá</div>
                            <div class="c-sidebar__grid --price">
                                <input type="text" class="c-sidebar__item num-price no-hover" placeholder="Giá tối thiểu">
                                <input type="text" class="c-sidebar__item num-price no-hover" placeholder="Giá tối đa">
                            </div>
                            <button class="btn-submit">Áp dụng</button>
                        </div>
                        <div class="c-sidebar__block">
                            <div class="c-sidebar__ttl">Thương hiệu</div>
                            <div class="c-sidebar__lst">
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    NMIMART.com
                                </label>
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    Delax
                                </label>
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    NMIMART.com
                                </label>
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    Delax
                                </label>
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    NMIMART.com
                                </label>
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    Delax
                                </label>
                            </div>
                        </div>
                        <div class="c-sidebar__block">
                            <div class="c-sidebar__ttl">Loại sản phẩm</div>
                            <div class="c-sidebar__lst">
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    NMIMART.com
                                </label>
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    Delax
                                </label>
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    NMIMART.com
                                </label>
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    Delax
                                </label>
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    NMIMART.com
                                </label>
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    Delax
                                </label>
                            </div>
                        </div>
                        <div class="c-sidebar__block">
                            <div class="c-sidebar__ttl">Công dụng</div>
                            <div class="c-sidebar__lst">
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    NMIMART.com
                                </label>
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    Delax
                                </label>
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    NMIMART.com
                                </label>
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    Delax
                                </label>
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    NMIMART.com
                                </label>
                                <label class="c-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    Delax
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="p-product-content">
                        <div class="p-product-filter">
                            <span class="p-product-filter__ttl">Sắp xếp: </span>
                            <span class="p-product-filter__item active">Mới nhất</span>
                            <span class="p-product-filter__item">Bán chạy</span>
                            <span class="p-product-filter__item">Giá tăng dần</span>
                            <span class="p-product-filter__item">Giá giảm dần</span>
                        </div>
                        <div class="p-products-wrap c-product">
                            <?php require_once BASE_PATH . 'inc/product.php'; ?>
                        </div>
                        <div class="c-pagination">
                            <ul class="pagination">
                                <li class="active"><span>1</span></li>
                                <li><span>2</span></li>
                                <li><span>3</span></li>
                                <li><span>4</span></li>
                                <li><span>5</span></li>
                                <li>...</li>
                                <li><span class="last">Trang cuối</span></li>
                            </ul>
                            <div class="c-pagination-total">Trang 1/200</div>
                        </div>
                        <div class="c-description --anchor" id="product-detail">
                            NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.
                            <img src="<?= BASE_URL ?>assets/images/img_02.jpg" alt="nmimart">
                            NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.
                            <br>
                            NMI MART là một trong những tổng kho gia dụng uy tín tại Việt Nam, chuyên cung cấp các sản phẩm gia dụng chính hãng với chất lượng đảm bảo và giá cả cạnh tranh. Với sứ mệnh mang đến cho người tiêu dùng những giải pháp tiện ích cho cuộc sống hiện đại, NMI MART không ngừng đa dạng hóa danh mục sản phẩm và nâng cao.

                            <div class="btn-load-more" id="view-more-detail">
                                <span class="c-more">Xem thêm </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-sticky" id="open-filter">Bộ lọc</div>
    </main>
    <?php require_once BASE_PATH . 'inc/footer.php'; ?>
</body>