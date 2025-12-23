<header>
    <div class="top-mb d-md-none">
        <span class="top-mb__ic"></span>
    </div>
    <div class="p-header">
        <div class="container">
            <div class="p-header__content">
                <a class="p-header__logo" href="/">
                    <picture>
                        <source media="(max-width: 767px)" srcset="<?= BASE_URL ?>assets/images/logo_sp.png" alt="">
                        <img src="<?= BASE_URL ?>assets/images/logo.png" alt="nmimart">
                    </picture>
                </a>
                <div class="p-header__right">
                    <span class="ic_menu sp"></span>
                    <span class="ic_search sp"></span>
                    <div class="p-header__search">
                        <div class="p-header__search__select"><select name="category">
                                <option value="">Tất cả</option>
                                <option value="1">Nội thất</option>
                                <option value="2">Biệt thự</option>
                                <option value="3">Chung cư</option>
                            </select>
                        </div>
                        <input type="text" placeholder="Gõ thông tin tìm kiếm ...">
                        <span class="btn-search"><img src="<?= BASE_URL ?>assets/images/ic_search.svg" alt="search" width="19"
                                height="19"></span>
                    </div>
                    <div class="p-header__hotline">
                        <span class="p-header__hotline__label">Hotline tư vấn miễn phí</span>
                        <span class="p-header__hotline__call">0356858885</span>
                    </div>
                    <div class="p-header__cart">
                        <a href="cart/">
                            <span class="ic_cart"></span>
                            <span class="ic_num">0</span>
                        </a>
                        <div class="add-to-cart radius-20" id="box-add-cart">
                            <div class="add-to-cart__ttl">
                                Thêm vào giỏ hàng thành công
                                <span class="ic_close_2" id="btn-close-cart"></span>
                            </div>
                            <a class="add-to-cart__item" href="">
                                <div class="add-to-cart__item__img radius-20">
                                    <img src="<?= BASE_URL ?>assets/images/product.jpg" alt="" width="99" height="99">
                                </div>
                                <div class="add-to-cart__item__meta">
                                    <h3 class="add-to-cart__item__ttl">Ghế Massage Treeboss Supreme – S568</h3>
                                    <div class="add-to-cart__item__price">
                                        <span class="new-price">175.000.000 <sup>₫</sup></span>
                                        <span class="old-price"></span>
                                    </div>
                                </div>
                            </a>
                            <a class="btn-view-cart" href="cart/">Xem giỏ hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="menu">
        <div class="container">
            <div class="menu-wrap">
                <div class="block-categories">
                    <div class="block-categories__ttl">Tất cả sản phẩm</div>
                    <ul class="block-categories__lst">
                        <li>
                            <a href="#" title="">Quạt</a>
                            <ul class="block-categories__sub">
                                <li><a href="">Quạt điều hòa</a></li>
                                <li><a href="">Quạt cầm tay</a></li>
                                <li><a href="">Quạt đeo cổ</a></li>
                                <li><a href="">Quạt dã ngoại</a></li>
                                <li><a href="">Quạt để bàn</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="">Máy massage</a>
                        </li>
                        <li>
                            <a href="#" title="">Đồ gia dụng</a>
                        </li>
                        <li>
                            <a href="#" title="">Thiết bị làm mát</a>
                        </li>
                        <li>
                            <a href="#" title="">Thiết bị nhà bếp</a>
                        </li>
                        <li>
                            <a href="#" title="">Khuyến mãi</a>
                        </li>
                        <li>
                            <a href="#" title="">Top bán chạy</a>
                        </li>
                    </ul>
                </div>
                <ul class="lst">
                    <li class="menu-item"><a href="/gioi-thieu/" title="">Giới thiệu</a></li>
                    <li class="menu-item has-sub"><a href="/tin-tuc/" title="">Tin tức - Sự kiện</a>
                        <div class="menu-sub">
                            <ul>
                                <li><a href="#" title="">Xu hướng nhà cửa</a></li>
                                <li><a href="#" title="">Xu hướng làm đẹp</a></li>
                                <li><a href="#" title="">Review</a></li>
                                <li><a href="#" title="">Tin trong nước</a></li>
                                <li><a href="#" title="">Tin thế giới</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item"><a href="#" title="">Chính sách</a></li>
                    <li class="menu-item"><a href="/cua-hang/" title="">Hệ thống cửa hàng</a></li>
                    <li class="menu-item"><a href="/lien-he/" title="">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bg-close-menu"></div>
    <div class="menu-sp">
        <ul>
            <li><a href="" title="">Giới thiệu</a></li>
            <li class="product"><a href="#" title="">Sản phẩm</a>
                <ul>
                    <li class="has-bub">
                        <a href="#" title="">Quạt</a>
                        <ul class="sub-menu">
                            <li><a href="">Quạt điều hòa</a></li>
                            <li><a href="">Quạt cầm tay</a></li>
                            <li><a href="">Quạt đeo cổ</a></li>
                            <li><a href="">Quạt dã ngoại</a></li>
                            <li><a href="">Quạt để bàn</a></li>
                        </ul>
                        <i class="ic-sub"></i>
                    </li>
                    <li>
                        <a href="#" title="">Máy massage</a>
                    </li>
                    <li>
                        <a href="#" title="">Đồ gia dụng</a>
                    </li>
                    <li>
                        <a href="#" title="">Thiết bị làm mát</a>
                    </li>
                    <li>
                        <a href="#" title="">Thiết bị nhà bếp</a>
                    </li>
                    <li>
                        <a href="#" title="">Khuyến mãi</a>
                    </li>
                    <li>
                        <a href="#" title="">Top bán chạy</a>
                    </li>
                </ul>
            </li>
            <li class="has-sub"><a href="#" title="">Tin tức - Sự kiện</a>
                <ul class="sub-menu">
                    <li><a href="#" title="">Tin trong nước</a></li>
                    <li><a href="#" title="">Tin thế giới</a></li>
                </ul>
                <i class="ic-sub"></i>
            </li>
            <li><a href="#" title="">Chính sách</a></li>
            <li><a href="#" title="">Hệ thống cửa hàng</a></li>
            <li><a href="#" title="">Liên hệ</a></li>
        </ul>
    </div>
</header>