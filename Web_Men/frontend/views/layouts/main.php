<div id="new-product">
    <h4>Hàng mới về</h4>
</div>
<div id="product">
    <div class="rowa">
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <div class="product1">

                    <div class="imga">
                        <img id="jacket"
                             src="../backend/assets/uploads/<?php echo $product['avatar'] ?>" alt="">
                        <div class="over">
                            <a class="bnt-buy" data-id="<?php echo $product['id'] ?>" href="#">QUICK VIEW</a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <h6 class="product-name">
                            <?php echo $product['title'] ?>
                        </h6>
                        <div class="product-price">
                            <h6 class="price">
                                <?php echo $product['discount'] ?> <sub>đ</sub>

                            </h6>
                            <h6 class="price-discount">
                                <?php echo $product['price'] ?> <sub>đ</sub>
                            </h6>


                        </div>
                    </div>
                </div>


            <?php endforeach ?>

        <?php endif; ?>
    </div>
</div>
<div id="new-product">
    <h4>Quần</h4>
</div>
<div id="product">
    <div class="rowa">
        <?php if (!empty($product1)): ?>
            <?php foreach ($product1 as $product): ?>

                <div class="product1">

                    <div class="imga">
                        <img id="jacket"
                             src="../backend/assets/uploads/<?php echo $product['avatar'] ?>" alt="">
                        <div class="over">
                            <a class="bnt-buy" data-id="<?php echo $product['id'] ?>" href="#">QUICK VIEW</a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <h6 class="product-name">
                            <?php echo $product['title'] ?>
                        </h6>
                        <div class="product-price">
                            <h6 class="price">
                                <?php echo $product['discount'] ?> <sub>đ</sub>

                            </h6>
                            <h6 class="price-discount">
                                <?php echo $product['price'] ?> <sub>đ</sub>
                            </h6>


                        </div>
                    </div>
                </div>


            <?php endforeach ?>

        <?php endif; ?>
    </div>
</div>
<div id="new-product">
    <h4>Phụ kiện</h4>
</div>
<div id="product">
    <div class="rowa">
        <?php if (!empty($product2)): ?>
            <?php foreach ($product2 as $product): ?>

                <div class="product1">

                    <div class="imga">
                        <img id="jacket"
                             src="../backend/assets/uploads/<?php echo $product['avatar'] ?>" alt="">
                        <div class="over">
                            <a class="bnt-buy" data-id="<?php echo $product['id'] ?>" href="#">QUICK VIEW</a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <h6 class="product-name">
                            <?php echo $product['title'] ?>
                        </h6>
                        <div class="product-price">
                            <h6 class="price">
                                <?php echo $product['discount'] ?> <sub>đ</sub>

                            </h6>
                            <h6 class="price-discount">
                                <?php echo $product['price'] ?> <sub>đ</sub>
                            </h6>


                        </div>
                    </div>
                </div>


            <?php endforeach ?>

        <?php endif; ?>
    </div>
</div>


