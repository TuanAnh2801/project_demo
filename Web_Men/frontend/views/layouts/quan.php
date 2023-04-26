<div id="new-product">
    <h4>Quần</h4>
</div>

<div id="product">
    <div class="rowa">
        <?php if (!empty($quans)): ?>
            <?php foreach ($quans as $quan): ?>
                <div class="product1">

                    <div class="imga">
                        <img id="jacket"
                             src="../backend/assets/uploads/<?php echo $quan['avatar'] ?>" alt="">
                        <div class="over">
                            <a class="bnt-buy" data-id="<?php echo $quan['id'] ?>" href="#">QUICK VIEW</a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <h6 class="product-name">
                            <?php echo $quan['title'] ?>
                        </h6>
                        <div class="product-price">
                            <h6 class="price">
                                <?php echo number_format($quan['discount']) ?> <sub>đ</sub>

                            </h6>
                            <h6 class="price-discount">
                                <?php echo number_format($quan['price']) ?> <sub>đ</sub>
                            </h6>


                        </div>
                    </div>
                </div>


            <?php endforeach ?>

        <?php endif; ?>
    </div>
</div>

