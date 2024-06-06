<?php require_once "header.php";?>
<?php 
extract($data['detail']);
?>
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product__details__img">
                    <div class="product__details__big__img">
                        <img class="big_img" src="<?=PROURL?>/public/img/shop/<?=$Img?>" alt="">
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="product__details__text">
                    <div class="product__label">Tên Sản Phẩm :<?=$Name?></div>

                    <h5>Giá Sản Phẩm :<?=$Price?> VNĐ</h5>
                    <p> Tiêu Đề:<?=$TieuDe?></p>
                    <ul>
                        <li>Sản xuất năm: <span><?=$NamSX?></span></li>
                        <!-- <li>Danh Mục:<span></span></li> -->

                    </ul>
                    <div class="product__details__option">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input type="text" value="2">
                            </div>
                        </div>
                        <input type="submit" value="Mua Ngay" class="primary-btn">

                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__tab">
            <div class="col-lg-12">

                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <p> Nội Dung<?=$NoiDung?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Details Section End -->

<!-- Related Products Section Begin -->
<section class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Sản Phẩm liên quang</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="related__products__slider owl-carousel">


            </div>
        </div>
    </div>
</section>
<?php require_once "footer.php";?>