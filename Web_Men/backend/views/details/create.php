<h2>Thêm mới chi tiết sản phẩm</h2>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label>Id sản phẩm</label>
        <input type="text" name="product_id" value="<?php echo isset($_POST['product_id']) ? $_POST['product_id'] : ''; ?>"
               class="form-control"/>
    </div>

    <div class="form-group">
        <label>Ảnh đại diện</label>
        <input type="file" name="avatar" class="form-control" id="category-avatar"/>
        <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
    </div>

    <div class="form-group">
        <label>Mô tả</label>
        <textarea class="form-control"
                  name="description"><?php echo isset($_POST['description']) ? $_POST['description'] : ''; ?></textarea>
    </div>


    <input type="submit" class="btn btn-primary" name="submit" value="Save"/>
    <input type="reset" class="btn btn-secondary" name="submit" value="Reset"/>
</form>