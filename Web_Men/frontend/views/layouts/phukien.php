<div id="new-product">
    <h4>Phụ kiện</h4>
</div>
<div id="product">
    <div class="rowa">
        <?php if (!empty($phukiens)): ?>
            <?php foreach ($phukiens as $phukien): ?>
                <div class="product1">

                    <div class="imga">
                        <img id="jacket"
                             src="../backend/assets/uploads/<?php echo $phukien['avatar'] ?>" alt="">
                        <div class="over">
                            <a class="bnt-buy" data-id="<?php echo $phukien['id'] ?>" href="#">QUICK VIEW</a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <h6 class="product-name">
                            <?php echo $phukien['title'] ?>
                        </h6>
                        <div class="product-price">
                            <h6 class="price">
                                <?php echo number_format($phukien['discount']) ?> <sub>đ</sub>

                            </h6>
                            <h6 class="price-discount">
                                <?php echo number_format($phukien['price']) ?> <sub>đ</sub>
                            </h6>


                        </div>
                    </div>
                </div>


            <?php endforeach ?>

        <?php endif; ?>
    </div>
</div>

