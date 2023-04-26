<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';

class DetailController extends Controller{
public function index(){
   $product_id = $_GET['id'];
   $product_model = new Product();
   $product = $product_model->getById($product_id);
   $detail_model = new Product();
   $details = $detail_model->detail($product_id);
  $this->content = $this->render('views/layouts/detail.php',[
      'product'=>$product,
      'details'=>$details,
   ]);
   require_once 'views/layouts/home1.php';
}

}