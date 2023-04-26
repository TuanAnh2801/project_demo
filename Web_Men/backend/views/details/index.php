
<h1>Tìm kiếm</h1>
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="detail" value="detail"/>
    <input type="hidden" name="action" value="index"/>
    <div class="form-group">
        <label>Nhập tên id sản phẩm</label>
        <input type="text" name="product_id" value="<?php echo isset($_GET['product_id']) ? $_GET['product_id'] : '' ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Tìm kiếm" class="btn btn-success"/>
        <a href="index.php?controller=category" class="btn btn-secondary">Xóa filter</a>
    </div>
</form>

<h1>Danh sách product detail</h1>
<a href="index.php?controller=detail&action=create" class="btn btn-primary">
    <i class="fa fa-plus"></i> Thêm mới
</a>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Product_id</th>
        <th>Avatar</th>
        <th>Description</th>

    </tr>
  <?php if (!empty($details)): ?>
    <?php foreach ($details as $detail): ?>
          <tr>
              <td>
                  <?php echo $detail['id']; ?>
              </td>
              <td>
                <?php echo $detail['product_id']; ?>
              </td>

              <td>
                <?php if (!empty($detail['avatar'])): ?>
                    <img src="assets/uploads/<?php echo $detail['avatar'] ?>" width="60"/>
                <?php endif; ?>
              </td>
              <td>
                <?php echo $detail['description']; ?>
              </td>

              <td>

                  <a href="index.php?controller=detail&action=update&id=<?php echo $detail['id'] ?>" title="Sửa">
                      <i class="fa fa-pencil-alt"></i>
                  </a>
                  <a href="index.php?controller=detail&action=delete&id=<?php echo $detail['id'] ?>" title="Xóa"
                     onclick="return confirm('Bạn có chắc chắn muốn xóa bản ghi này')">
                      <i class="fa fa-trash"></i>
                  </a>
              </td>
          </tr>
    <?php endforeach ?>
      <tr>
          <td colspan="7"><?php echo $pages; ?></td>
      </tr>

  <?php else: ?>
      <tr>
          <td colspan="7">Không có bản ghi nào</td>
      </tr>
  <?php endif; ?>
</table>
<!--  hiển thị phân trang-->

