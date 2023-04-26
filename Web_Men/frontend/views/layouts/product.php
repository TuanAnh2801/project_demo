<div id="new-product">
    <h4>
        <?php if (!empty($categories)):?>
            <?php echo $categories['name']; ?>
        <?php endif; ?>
    </h4>
</div>
<div id="product">
    <div class="rowa">
        <?php if (!empty($aos)): ?>
            <?php foreach ($aos as $ao): ?>
                <div class="product1">

                    <div class="imga">
                        <img id="jacket"
                             src="../backend/assets/uploads/<?php echo $ao['avatar'] ?>" alt="">
                        <div class="over">
                            <a class="bnt-buy"  href="index.php?controller=detail&action=index&id=<?php echo $ao['id'] ?>" >QUICK VIEW</a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <h6 class="product-name">
                            <?php echo $ao['title'] ?>
                        </h6>
                        <div class="product-price">
                            <h6 class="price">
                                <?php echo number_format($ao['discount']) ?> <sub>đ</sub>

                            </h6>
                            <h6 class="price-discount">
                                <?php echo number_format($ao['price']) ?> <sub>đ</sub>
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
        <?php if (!empty($quans)): ?>
            <?php foreach ($quans as $quan): ?>
                <div class="product1">

                    <div class="imga">
                        <img id="jacket"
                             src="../backend/assets/uploads/<?php echo $quan['avatar'] ?>" alt="">
                        <div class="over">
                            <a class="bnt-buy" href="index.php?controller=detail&action=index&id=<?php echo $quan['id'] ?>">QUICK VIEW</a>
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
                            <a class="bnt-buy" href="index.php?controller=detail&action=index&id=<?php echo $phukien['id'] ?>">QUICK VIEW</a>
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



