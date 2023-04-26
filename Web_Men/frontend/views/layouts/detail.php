<?php

if (!empty($product))
//    var_dump($product['avatar']);
//die();
 ?>

    <?php

if (!empty($details))
//    var_dump($detail);
//    die();
//if (isset($_SESSION['detail']))
//        var_dump($_SESSION['detail']);
//    die();
?>

<div class="product ">
    <div class="product-top ">
        <a href="trang-chu.html">Trang chủ</a>
        <span class="divider">/</span>
        <a href="ao.html"><?php echo $product['category_name']?></a>

    </div>
    <div class="product-content row12">
        <div class="product-content-left row12">
            <div class="product-content-left-big-img">
                <img src="../backend/assets/uploads/<?php echo $product['avatar'] ?>" alt="">
            </div>
            <div class="product-content-left-small-img">
                <?php foreach ($details as $detail):?>
                <img src="../backend/assets/uploads/<?php echo $detail['avatar'] ?>" alt="">

                <?php endforeach; ?>
            </div>

        </div>
        <div class="product-content-right">
            <div class="product-content-right-producct-name">
                <h3>Áo Khoác Dạ thời trang nam type lót lông</h3>
                <hr>
                <br>

            </div>
            <div class="product-content-right-producct-price">

                <h3><?php echo number_format($product['discount'])?> <sub>đ</sub></h3>
            </div>
            <form action="" method="post" enctype="multipart/form-data">

            <div class="product-content-right-producct-size">
                <span>Size:</span>
                <select name="size-clothes" id="size">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="2XL">2XL</option>


                </select>
            </div>
            <div class="quantity row12">
                <p style="font-weight: bold;">Số lượng:</p>
                <div class="number">
                    <input type="number" min="0" name="soluong" id="mount" required value="0">
                </div>
            </div>
            </form>




            <div class="product-content-right-producct-button row12"  data-id="<?php echo $product['id'] ?>">
                <div class="button1">
                    <button>
                        <i class="fa-solid fa-cart-plus"></i>
                </div>
               <input type="submit" value="Mua">
                </button>

            </div>


            <div class="product-content-right-bottom">

                <div class="product-content-right-bottom-content-big">
                    <div class="product-content-right-bottom-content-title">
                        <div class="product-content-right-bottom-content-title-item chitiet">
                            <p>Chi tiết</p>
                        </div>
                        <div class="product-content-right-bottom-content-title-item baoquan">
                            <p>Bảo quản</p>
                        </div>
                        <div class="product-content-right-bottom-content-title-item">
                            Tham khảo size
                        </div>
                    </div>
                    <div class="product-content-right-bottom-content">
                        <div class="product-content-right-bottom-content-chitiet">
                            <p>Hôm nay Men xin giới thiệu 1 siêu phẩm mới "Áo khoác măng tô dạ nam đen"
                                mã số ATD-448, đây là mẫu áo khoác măng tô dạ dáng lửng nam cao cấp và mới
                                dành
                                cho thu đông năm nay. Áo thiết kế vô cùng trẻ trung, sang trọng, lịch lãm và
                                hiện đại với dáng áo măng tô cổ bẻ, form áo gọn gàng dài gần đến đùi. <br>

                                Bên ngoài áo làm từ chất liệu vải len dạ dày dặn cao cấp giữ ấm tốt, bên
                                trong
                                lót vải mềm giúp thoáng mồ hôi cho người mặc cảm giác thoải mái. Sản phẩm
                                với
                                đường may tỉ mỉ làm lên chất lượng cho sản phẩm. Sản phẩm được sản xuất trên
                                dây
                                chuyền nhập khẩu hiện đại, chất liệu cao cấp chuẩn đầu vào, cùng nhân viên
                                lành
                                nghề làm nên chất lượng sản phẩm. Áo có màu đen chấm tiêu nam tính kết hợp
                                các
                                chi tiết tinh xảo làm tăng thêm sự tinh tế. Sản phẩm rất hợp với các hoạt
                                động
                                đi chơi, sự kiện, hội nghị. </p>
                        </div>
                        <div class="product-content-right-bottom-content-baoquan">
                            <p> Mặc áo cổ lọ bên trong áo dạ sẽ giúp ngăn bớt mồ hôi từ cơ thể bám vào phần
                                cổ áo dạ khó giặt sạch. Treo áo vào tủ khi không sử dụng đến, dùng thêm túi
                                hút ẩm hoặc than hoạt tính để ngăn ẩm mốc và mùi hôi. Khi mới mua về, cho áo
                                dạ vào túi nilon kín, giữ trong ngăn đá qua đêm rồi hẵng mặc </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
