<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';

class CartController extends Controller
{
    public function add()
    {

        $product_id = $_GET['product_id'];
        $mount = $_GET['mount'];
        $size = $_GET['size'];

//        $product_id = $_POST['product_id'];

        $product_model = new Product();
        $product = $product_model->getById($product_id);
        $product_cart = [
            'name' => $product['title'],
            'price' => $product['price'],
            'avatar' => $product['avatar'],
            'quantity' => $mount,
            'size' => $size,
        ];
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]['quantity']++;
        } else {
            $_SESSION['cart'][$product_id] = $product_cart;

        }
//        session_unset();
//        var_dump(json_encode(($_SESSION['cart'])));
//        die();
//        $this->render('views/layouts/.php');

    }


    public function index()
    {
//        $product_id = $_POST['product_id'];

//        echo '<pre>';
////        print_r($_POST);
//	    print_r($_SESSION['cart']);
//        echo '</pre>';

        if (isset($_POST['submit'])) {

            foreach ($_SESSION['cart'] as $product_id => $cart_item) {

//            Validate số lượng phải > 0
                if ($_POST[$product_id] < 0) {
                    $_SESSION['error'] = 'Số lượng phải > 0';
                    header('Location: gio-hang-cua-ban.html');
                    exit();
                }
                $_SESSION['cart'][$product_id]['quantity'] = $_POST[$product_id];
            }
            $_SESSION['success'] = 'Cập nhật thành công';
        }
        $this->page_title = 'Giỏ hàng của bạn';
        $this->content = $this->render('views/carts/index.php');
        require_once 'views/layouts/home1.php';
    }

    public function delete()
    {
//        var_dump($_GET['id']);
//        die();
        $product_id = $_GET['product_id'];
        unset($_SESSION['cart'][$product_id]);
        $_SESSION['success'] = 'Xoá thành công';
        if (empty($_SESSION['cart'])){
            unset($_SESSION['cart']);
        }
        header('Location: gio-hang-cua-ban.html');
        exit();
    }
}