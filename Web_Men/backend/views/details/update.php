<?php if (empty($detail)): ?>
    <h2>Không tồn tại product detail</h2>
<?php else:  ?>
    <h2>Chỉnh sửa danh mục <?php echo $detail['id'] ?></h2>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label>Id sản phẩm</label>
            <input type="text" name="product_id"
                   value="<?php echo isset($_POST['product_id']) ? $_POST['product_id'] : $detail['product_id']; ?>"
                   class="form-control"/>
        </div>

        <div class="form-group">
            <label>Ảnh đại diện</label>
            <input type="file" name="avatar" class="form-control"/>
            <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
        </div>
        <?php if (!empty($detail['avatar'])): ?>
            <img src="assets/uploads/<?php echo $detail['avatar']; ?>" height="50"/>
        <?php endif; ?>

        <div class="form-group">
            <label>Mô tả</label>
            <textarea class="form-control"
                      name="description"><?php echo isset($_POST['description']) ? $_POST['description'] : $detail['description']; ?></textarea>
        </div>


        <input type="submit" class="btn btn-primary" name="submit" value="Save"/>
        <input type="reset" class="btn btn-secondary" name="submit" value="Reset"/>
    </form>
<?php endif; ?>