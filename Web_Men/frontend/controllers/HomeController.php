<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'helpers/Helper.php';

class HomeController extends Controller {
  public function index() {
      $product_model = new Product();
      $aos = $product_model->ao();
      $category_model = new Category();
      $categories = $category_model->ao();
      $product_model = new Product();
      $quans = $product_model->quan();
      $product_model = new Product();
      $phukiens = $product_model->phukien();
    $this->content = $this->render('views/layouts/product.php', [
        'aos'=> $aos,
        'categories' => $categories,
        'quans'=> $quans,
        'phukiens'=> $phukiens,
    ]);


    require_once 'views/layouts/home.php';
  }
  public function ao1(){
      $product_model = new Product();
      $aos = $product_model->ao1();
      $category_model = new Category();
      $categories = $category_model->ao();
      $this->content = $this->render('views/layouts/ao.php',[
          'aos'=> $aos,
          'categories' => $categories,
      ]);
      require_once 'views/layouts/home1.php';
  }
    public function quan1(){
        $product_model = new Product();
        $quans = $product_model->quan1();
        $this->content = $this->render('views/layouts/quan.php',[
            'quans'=> $quans,
        ]);
        require_once 'views/layouts/home1.php';
    }
    public function phukien1(){
        $product_model = new Product();
        $phukiens = $product_model->phukien1();
        $this->content = $this->render('views/layouts/phukien.php',[
            'phukiens'=> $phukiens,
        ]);
        require_once 'views/layouts/home1.php';
    }
  public function introduce(){
      $this->content= $this->render('views/layouts/introduce.php');
      require_once 'views/layouts/home1.php';
  }
    public function contact(){
        $this->content= $this->render('views/layouts/contact.php');
        require_once 'views/layouts/home1.php';
    }

    public function search(){
      $product_model = new Product();
      $product_searchs = $product_model->getAll();
//      var_dump($product_searchs);
//      die();
      $this->content = $this->render('views/layouts/search.php',[
         'product_searchs'=>$product_searchs,
      ]);
      require_once 'views/layouts/home1.php';
    }
}