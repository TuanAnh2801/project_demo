<?php
require_once 'controllers/Controller.php';
require_once 'models/Detail.php';
require_once 'models/Pagination.php';

class DetailController extends Controller
{

    public function index()
    {

        //hiển thị danh sách category
        $category_model = new Detail();
        //do có sử dụng phân trang nên sẽ khai báo mảng các params
        $params = [
            'limit' => 5, //giới hạn 5 bản ghi 1 trang
            'query_string' => 'page',
            'controller' => 'detail',
            'action' => 'index',
            'full_mode' => FALSE,
        ];
//    mặc đinh page hiện tại là 1
        $page = 1;
        //nếu có truyền tham số page lên trình duyêt - tương đương đang ở tại trang nào, thì gán giá trị đó cho biến $page
        if (isset($_POST['page'])) {
            $page = $_POST['page'];
        }
        //xử lý form tìm kiếm
        if (isset($_POST['product_id'])) {
            $params['query_additional'] = '&product_id=' . $_POST['product_id'];
        }

        //lấy tổng số bản ghi dựa theo các điều kiện có được từ mảng params truyền vào
        $count_total = $category_model->countTotal();
        $params['total'] = $count_total;

        //gán biến name cho mảng params với key là name
        $params['page'] = $page;
        $pagination = new Pagination($params);
        //lấy ra html phân trang
        $pages = $pagination->getPagination();

        //lấy danh sách category sử dụng phân trang
        $details = $category_model->getAllPagination($params);

        $this->content = $this->render('views/details/index.php', [
            //truyền biến $categories ra vew
            'details' => $details,
            //truyền biến phân trang ra view
            'pages' => $pages,
        ]);

        //gọi layout để nhúng thuộc tính $this->content
        require_once 'views/layouts/main.php';
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            $product_id = $_POST['product_id'];
            $description = $_POST['description'];
            $avatar_files = $_FILES['avatar'];

            //check validate //trường hợp có ảnh upload lên, thì cần kiểm tra điều kiện là file ảnh
             if ($avatar_files['error'] == 0) {
                $extension_arr = ['jpg', 'jpeg', 'gif', 'png'];
                $extension = pathinfo($avatar_files['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $file_size_mb = $avatar_files['size'] / 1024 / 1024;
                //làm tròn theo đơn vị thập phân
                $file_size_mb = round($file_size_mb, 2);

                if (!in_array($extension, $extension_arr)) {
                    $this->error = 'Cần upload file định dạng ảnh';
                } else if ($file_size_mb >= 2) {
                    $this->error = 'File upload không được lớn hơn 2Mb';
                }
            }

            //nếu ko có lỗi thì tiến hành lưu dữ liệu và upload ảnh nếu có
            $avatar = '';
            if (empty($this->error)) {
                //xử lý upload ảnh nếu có
                if ($avatar_files['error'] == 0) {
                    $dir_uploads = 'assets/uploads';
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }
                    $avatar = time() . '-' . $avatar_files['name'];
                    move_uploaded_file($avatar_files['tmp_name'], $dir_uploads . '/' . $avatar);
                }
                //lưu vào csdl
                //gọi model để thực  hiện lưu
                $category_model = new Detail();
                //gán các giá trị từ form cho các thuộc tính của category
                $category_model->product_id = $product_id;
                $category_model->avatar = $avatar;
                $category_model->description = $description;
                //gọi phương thức insert
                $is_insert = $category_model->insert();
                if ($is_insert) {
                    $_SESSION['success'] = 'Thêm mới thành công';
                } else {
                    $_SESSION['error'] = 'Thêm mới thất bại';
                }
                header('Location: index.php?controller=detail&action=index');
                exit();
            }

        }

        //lấy nội dung view create.php
        $this->content = $this->render('views/details/create.php');
        //gọi layout để nhúng nội dung view create vừa lấy đc
        require_once 'views/layouts/main.php';
    }

    public function update()
    {

        //về cơ bản update sẽ khá giống create
        //lấy category theo id bắt đươc
        //check validate nếu id không tồn tại thì báo lỗi
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID detail không hợp lệ';
            header('Location: index.php?controller=detail&action=index');
            exit();
        }
        $id = $_GET['id'];
        $category_model = new Detail();
        $detail = $category_model->getCategoryById($id);
        //submit form
        if (isset($_POST['submit'])) {
            $product_id = $_POST['product_id'];
            $description = $_POST['description'];
            $avatar_files = $_FILES['avatar'];

          //trường hợp có ảnh upload lên, thì cần kiểm tra điều kiện là file ảnh
             if ($avatar_files['error'] == 0) {
                $extension_arr = ['jpg', 'jpeg', 'gif', 'png'];
                $extension = pathinfo($avatar_files['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $file_size_mb = $avatar_files['size'] / 1024 / 1024;
                //làm tròn theo đơn vị thập phân
                $file_size_mb = round($file_size_mb, 2);

                if (!in_array($extension, $extension_arr)) {
                    $this->error = 'Cần upload file định dạng ảnh';
                } else if ($file_size_mb >= 2) {
                    $this->error = 'File upload không được lớn hơn 2Mb';
                }
            }

            //nếu ko có lỗi thì tiến hành lưu dữ liệu và upload ảnh nếu có
            $avatar = $detail['avatar'];
            if (empty($this->error)) {
                //xử lý upload ảnh nếu có
                if ($avatar_files['error'] == 0) {
                    //xóa file ảnh cũ đi

                    $dir_uploads = 'assets/uploads';
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }
                    //xóa file ảnh cũ đi
                    @unlink($dir_uploads . '/' . $avatar);
                    //tạo tên file mới và save
                    $avatar = time() . '-' . $avatar_files['name'];

                    move_uploaded_file($avatar_files['tmp_name'], $dir_uploads . '/' . $avatar);
                }
                //lưu vào csdl
                //gọi model để thực  hiện lưu
                $category_model = new Detail();
                //gán các giá trị từ form cho các thuộc tính của category
                $category_model->product_id = $product_id;
                $category_model->avatar = $avatar;
                $category_model->description = $description;
                $category_model->updated_at = date('Y-m-d H:i:s');
                //gọi phương thức update theo id
                $is_update = $category_model->update($id);
                if ($is_update) {
                    $_SESSION['success'] = 'Update thành công';
                } else {
                    $_SESSION['error'] = 'Update thất bại';
                }
                header('Location: index.php?controller=detail&action=index');
                exit();
            }

        }

        //lấy nội dung view create.php
        $this->content = $this->render('views/details/update.php', ['detail' => $detail]);
        //gọi layout để nhúng nội dung view create vừa lấy đc
        require_once 'views/layouts/main.php';
    }

    public function delete()
    {

//        var_dump($_GET['product_id']);
//        die();
        if (!isset($_GET['id']  ) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=detail&action=index');
            exit();
        }
        $id = $_GET['id'];
        $category_model = new Detail();
        $is_delete = $category_model->delete($id);
        if ($is_delete) {
            $_SESSION['success'] = 'Xóa thành công';
        } else {
            $_SESSION['error'] = 'Xóa thất bại';
        }
        header('Location: index.php?controller=detail&action=index');
        exit();
    }


}
