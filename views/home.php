<?php
require_once 'layout/header.php';
require_once 'layout/menu.php';

?>
<section id="billboard">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <button class="prev slick-arrow">
                    <i class="icon icon-arrow-left"></i>
                </button>

                <div class="main-slider pattern-overlay">
                    <div class="slider-item">
                        <div class="banner-content">
                            <h2 class="banner-title">Life of the Wild</h2>
                            <p>"Life of the Wild" là cuốn sách truyền cảm hứng về vẻ đẹp và sự kỳ diệu của thiên nhiên hoang dã, nơi sự sống hiện lên một cách sống động và đầy tinh thần kết nối với con người.</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn btn-outline-accent btn-accent-arrow">Tìm hiểu thêm<i
                                        class="icon icon-ns-arrow-right"></i></a>
                            </div>
                        </div><!--banner-content-->
                        <img src="./assets/images/main-banner1.jpg" alt="banner" class="banner-image">
                    </div><!--slider-item-->

                    <div class="slider-item">
                        <div class="banner-content">
                            <h2 class="banner-title">Birds gonna be Happy</h2>
                            <p>Một cuốn sách dịu dàng như chính tựa đề của nó – Birds gonna be happy là hành trình nhẹ nhàng qua những mảng sống hoang dã, nơi thiên nhiên thì thầm bằng đôi cánh và thanh âm.</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn btn-outline-accent btn-accent-arrow">Tìm hiểu thêm<i
                                        class="icon icon-ns-arrow-right"></i></a>
                            </div>
                        </div><!--banner-content-->
                        <img src="./assets/images/main-banner2.jpg" alt="banner" class="banner-image">
                    </div><!--slider-item-->

                </div><!--slider-->

                <button class="next slick-arrow">
                    <i class="icon icon-arrow-right"></i>
                </button>

            </div>
        </div>
    </div>

</section>

<section id="client-holder" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="inner-content">
                <div class="logo-wrap">
                    <div class="grid">
                        <a href="#"><img src="./assets/images/client-image1.png" alt="client"></a>
                        <a href="#"><img src="./assets/images/client-image2.png" alt="client"></a>
                        <a href="#"><img src="./assets/images/client-image3.png" alt="client"></a>
                        <a href="#"><img src="./assets/images/client-image4.png" alt="client"></a>
                        <a href="#"><img src="./assets/images/client-image5.png" alt="client"></a>
                    </div>
                </div><!--image-holder-->
            </div>
        </div>
    </div>
</section>

<section id="featured-books" class="py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header align-center">
                    <div class="title">
                        <span>Một số sản phẩm chất lượng</span>
                    </div>
                    <h2 class="section-title">Sách hot</h2>
                </div>

                <div class="product-list" data-aos="fade-up">
                    <div class="row">

                        <?php foreach ($listSanPham as $key => $sanPham): ?>

                            <div class="col-md-3">

                                <div class="product-item">
                                    <?php if($sanPham['luot_xem']>10){ ?>
                                    <figure class="product-style">
                                        <img src="<?= BASE_URL . $sanPham['hinh_anh'] ?>" alt="Books" class="product-item img-fluid">
                                        <button type="button" class="add-to-cart btn" data-product-tile="add-to-cart">Xem chi tiết</button>
                                    </figure>
                                    <div class="product-badge">
                                        <?php
                                        $ngayNhap = new DateTime($sanPham['ngay_nhap']);
                                        $ngayHienTai = new DateTime();
                                        $tinhNgay = $ngayHienTai->diff($ngayNhap);

                                        if ($tinhNgay->days <= 7) {
                                        ?>

                                            <div class="badge bg-primary position-absolute top-0 start-0">
                                                <span>Mới</span>
                                            </div>

                                        <?php } ?>


                                    </div>
                                    <figcaption>
                                        <h3><?= $sanPham['ten_san_pham'] ?></h3>
                                        <span><?= $sanPham['ten_danh_muc'] ?></span>
                                        <div class="item-price"><?= number_format($sanPham['gia_san_pham'], 0, '', '.') ?> VNĐ</div>
                                    </figcaption>
                                    <?php } ?>
                                </div>

                            </div>
                        <?php endforeach; ?>


                    </div><!--ft-books-slider-->
                </div><!--grid-->


            </div><!--inner-content-->
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="btn-wrap align-right">
                    <a href="#" class="btn-accent-arrow">Tất cả sản phẩm <i
                            class="icon icon-ns-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="best-selling" class="leaf-pattern-overlay">
    <div class="corner-pattern-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="row">

                    <div class="col-md-6">
                        <figure class="products-thumb">
                            <img src="./assets/images/single-image.jpg" alt="book" class="single-image">
                        </figure>
                    </div>

                    <div class="col-md-6">
                        <div class="product-entry">
                            <h2 class="section-title divider">Deal hời hôm nay</h2>
                            <?php foreach ($listSanPham as $sanPham) : ?>
                                <div class="col-md-03">
                                    <div class="products-content">
                                        <div class="author-name">By Timbur Hood</div>
                                        <h3 class="item-title">Birds gonna be happy</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet,
                                            libero ipsum enim pharetra hac.</p>
                                        <?php
                                        if ($sanPham['gia_khuyen_mai']) { ?>

                                            <div class="badge bg-danger position-absolute top-0 start-0"><span>Giảm giá</span></div>
                                        <?php

                                        }
                                        ?>
                                        <div class="text-decoration-line-through me-2"><?= number_format($sanPham['gia_san_pham'], 0, '', '.') ?> VNĐ</div>
                                        <div class="item-price text-danger fw-bold"><?= number_format($sanPham['gia_khuyen_mai'], 0, '', '.') ?> VNĐ</div>
                                        <div class="btn-wrap">
                                            <a href="#" class="btn-accent-arrow">Xem chi tiết<i
                                                    class="icon icon-ns-arrow-right"></i></a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                </div>

                        </div>
                    </div>

                </div>
                <!-- / row -->

            </div>

        </div>
    </div>
</section>

<section id="popular-books" class="bookshelf py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header align-center">
                    <div class="title">
                        <span>Các sản phẩm chất lượng</span>
                    </div>
                    <h2 class="section-title">những tựa sách mới</h2>
                </div>

                <ul class="tabs">
                    <li data-tab-target="#all-genre" class="active tab">Tất cả</li>
                    <?php foreach ($listSanPham as $danhMuc): ?>
                        <li data-tab-target="#<?= strtolower($danhMuc['ten_danh_muc']) ?>" class="tab"><?= $danhMuc['ten_danh_muc'] ?></li>
                    <?php endforeach; ?>
                </ul>

                <div class="tab-content">
                    <div id="all-genre" data-tab-content class="active">
                        <div class="row">
                            <?php foreach ($listSanPham as $sanPham): ?>
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <figure class="product-style">
                                            <img src="<?= $sanPham['hinh_anh'] ?>" alt="Books" class="product-item">
                                            <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Xem chi tiết</button>
                                        </figure>
                                        <figcaption>
                                            <h3><?= $sanPham['ten_san_pham'] ?></h3>
                                            <span><?= $sanPham['ten_danh_muc'] ?></span>
                                            <div class="item-price"><?= number_format($sanPham['gia_san_pham'], 0, '', '.') ?> VNĐ</div>
                                        </figcaption>
                                    </div>
                                <?php endforeach; ?>
                                </div>



                        </div>


                    </div>


                </div>

            </div><!--inner-tabs-->

        </div>
    </div>
</section>

<section id="quotation" class="align-center pb-5 mb-5">
    <div class="inner-content">
        <h2 class="section-title divider">Mỗi ngày một câu nói</h2>
        <blockquote data-aos="fade-up">
            <q>"Thời gian của bạn có hạn, đừng lãng phí nó để sống cuộc đời của người khác"</q>
            <div class="author-name">Steve Jobs</div>
        </blockquote>
    </div>
</section>

<section id="special-offer" class="bookshelf pb-5 mb-5">

    <div class="section-header align-center">
        <div class="title">
            <span>Nắm bắt cơ hội</span>
        </div>
        <h2 class="section-title">Những tựa sách đang giảm giá</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="inner-content">
                <div class="product-list" data-aos="fade-up">
                    <div class="grid product-grid">
                        <?php foreach ($listSanPham as $sanPham): ?>
                            <div class="col-md-3">
                                <div class="product-item">
                                    <figure class="product-style">
                                        <img src="<?= $sanPham['hinh_anh'] ?>" alt="Books" class="product-item">
                                        <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Xem chi tiết</button>
                                    </figure>
                                    <figcaption>
                                        <h3><?= $sanPham['ten_san_pham'] ?></h3>
                                        <span><?= $sanPham['ten_danh_muc'] ?></span>
                                        <div class="item-price">
                                            <span class="prev-price"><?= number_format($sanPham['gia_san_pham'], 0, '', '.') ?> VNĐ</span><?= number_format($sanPham['gia_khuyen_mai'], 0, '', '.') ?> VNĐ
                                        </div>
                                </div>
                                </figcaption>
                            </div>
                        <?php endforeach; ?>


                    </div><!--grid-->
                </div>
            </div><!--inner-content-->
        </div>
    </div>
</section>

<section id="subscribe">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="row">

                    <div class="col-md-6">

                        <div class="title-element">
                            <h2 class="section-title divider">Subscribe to our newsletter</h2>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="subscribe-content" data-aos="fade-up">
                            <p>Sed eu feugiat amet, libero ipsum enim pharetra hac dolor sit amet, consectetur. Elit
                                adipiscing enim pharetra hac.</p>
                            <form id="form">
                                <input type="text" name="email" placeholder="Enter your email addresss here">
                                <button class="btn-subscribe">
                                    <span>send</span>
                                    <i class="icon icon-send"></i>
                                </button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>



<?php
require_once 'layout/footer.php';
?>