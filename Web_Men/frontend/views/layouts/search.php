<div id="product">
    <div class="rowa">
        <?php if (!empty($product_searchs)): ?>
            <?php foreach ($product_searchs as $product_search): ?>
                <div class="product1">

                    <div class="imga">
                        <img id="jacket"
                             src="../backend/assets/uploads/<?php echo $product_search['avatar'] ?>" alt="">
                        <div class="over">
                            <a class="bnt-buy" data-id="<?php echo $product_search['id'] ?>" href="#">QUICK VIEW</a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <h6 class="product-name">
                            <?php echo $product_search['title'] ?>
                        </h6>
                        <div class="product-price">
                            <h6 class="price">
                                <?php echo $product_search['discount'] ?> <sub>đ</sub>

                            </h6>
                            <h6 class="price-discount">
                                <?php echo $product_search  ['price'] ?> <sub>đ</sub>
                            </h6>


                        </div>
                    </div>
                </div>


            <?php endforeach ?>

        <?php endif; ?>
    </div>
</div>
