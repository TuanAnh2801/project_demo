<?php
require_once 'controllers/Controller.php';
require_once 'models/Order.php';
require_once 'models/OrderDetail.php';
require_once 'libraries/PHPMailer/src/PHPMailer.php';
require_once 'libraries/PHPMailer/src/SMTP.php';
require_once 'libraries/PHPMailer/src/Exception.php';

class PaymentController extends Controller
{
    public function index()
    {
//var_dump($_SESSION['cart']['quantity']);
//die();
        if (isset($_POST['submit'])) {
            $fullname = $_POST['fullname'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $note = $_POST['note'];
            $method = $_POST['method'];
            if (empty($fullname)) {
                $this->error_pay['name'] = "Vui lòng nhập tên";
            }
            if (empty($address)) {
                $this->error_pay['address'] = 'Vui lòng nhập địa chỉ';
            }
            if (empty($mobile)) {
                $this->error_pay['mobile'] = 'Vui lòng nhập số điện thoại';
            }
            $error_pay = $this->error_pay;
            if (!empty($error_pay)) {
                $this->content = $this->render('views/payments/index.php', [
                    'error_pay' => $error_pay,
                ]);
                require_once 'views/layouts/home1.php';
            }
            if (empty($this->error_pay)) {
                $payment_status = 0;
                $price_total = 0;
                foreach ($_SESSION['cart'] as $cart) {
                    $price_item = $cart['price'] * $cart['quantity'];
                    $price_total += $price_item;

                }


                $order_model = new Order();
                $order_id = $order_model->insertData($fullname, $address, $mobile, $email, $note, $price_total, $payment_status);

                foreach ($_SESSION['cart'] as $cart) {
                    $order_detail_model = new OrderDetail();
                    $is_insert = $order_detail_model->insertData($order_id,
                        $cart['name'],
                        $cart['price'],
                        $cart['quantity'],
                        $cart['size'],
                    );

                }

                if ($method == 0) {
                    $_SESSION['payment'] = [
                        'price_total' => $price_total,
                        'fullname' => $fullname,
                        'mobile' => $mobile,
                        'email' => $email,
                    ];


                    header('Location: index.php?controller=payment&action=online');
                    exit();
                }
            }
        }
        $this->page_title = 'Trang thanh toán';
        $this->content = $this->render('views/payments/index.php');

        require_once 'views/layouts/home1.php';
    }

    public function online()
    {
        $this->page_title = 'Thanh toán online';
        $this->content = $this->render('libraries/nganluong/index.php');
        require_once 'views/layouts/home3.php';
    }
}