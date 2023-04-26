<?php
require_once 'models/Model.php';
class Product extends Model {

  public function getProductInHomePage($params = []) {
    $str_filter = '';
    if (isset($params['category'])) {
      $str_category = $params['category'];
      $str_filter .= " AND categories.id IN $str_category";
    }
    if (isset($params['price'])) {
      $str_price = $params['price'];
      $str_filter .= " AND $str_price";
    }
    //do cả 2 bảng products và categories đều có trường name, nên cần phải thay đổi lại tên cột cho 1 trong 2 bảng
    $sql_select = "SELECT products.*, categories.name 
          AS category_name FROM products
          INNER JOIN categories ON products.category_id = categories.id
          WHERE products.status = 1 $str_filter";

    $obj_select = $this->connection->prepare($sql_select);
    $obj_select->execute();

    $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
    return $products;
  }

  /**
   * Lấy thông tin sản phẩm theo id
   * @param $id
   * @return mixed
   */
  public function getById($id)
  {
    $obj_select = $this->connection
      ->prepare("SELECT products.*, categories.name AS category_name FROM products 
          INNER JOIN categories ON products.category_id = categories.id WHERE products.id = $id");

    $obj_select->execute();
    $product =  $obj_select->fetch(PDO::FETCH_ASSOC);
    return $product;
  }
  public function select(){
      $select = $this->connection->prepare("SELECT * FROM products LIMIT 4 ");
      $select->execute();
      return $select->fetchAll(PDO::FETCH_ASSOC);
  }
    public function select1(){
        $select = $this->connection->prepare("SELECT * FROM products LIMIT 10,4 ");
        $select->execute();
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }
    public function select2(){
        $select = $this->connection->prepare("SELECT * FROM products LIMIT 14,4 ");
        $select->execute();
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }
    public function ao(){
      $select = $this->connection->prepare("SELECT * FROM products WHERE products.category_id = 1 LIMIT 4");
      $select ->execute();
      return $select->fetchAll(PDO::FETCH_ASSOC);
    }
    public function ao1(){
        $select = $this->connection->prepare("SELECT * FROM products WHERE products.category_id = 1 ");
        $select ->execute();
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }
    public function quan(){
        $select = $this->connection->prepare("SELECT * FROM products WHERE products.category_id = 2 LIMIT 4");
        $select ->execute();
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }
    public function quan1(){
        $select = $this->connection->prepare("SELECT * FROM products WHERE products.category_id = 2 ");
        $select ->execute();
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }
    public function phukien(){
        $select = $this->connection->prepare("SELECT * FROM products WHERE products.category_id = 3 LIMIT 4");
        $select ->execute();
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }
    public function phukien1(){
        $select = $this->connection->prepare("SELECT * FROM products WHERE products.category_id = 3 ");
        $select ->execute();
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }
    public function detail($id){
      $select = $this->connection->prepare("SELECT * FROM details WHERE product_id = $id LIMIT 3");
      $select->execute();
      return $select->fetchAll(PDO::FETCH_ASSOC);
    }
//    public $str_search = '';

//    public function __construct()
//    {
//        parent::__construct();
//        if (isset($_GET['title']) && !empty($_GET['title'])) {
//            $this->str_search .= " AND products.title LIKE '%{$_GET['title']}%'";
//        }
//
//    }
    public function getAll()
    {
    if (isset($_POST['search'])){
        if (isset($_POST['title']) && $_POST['title'] != ""){
            $tukhoa = $_POST['title'];

        }else $tukhoa = "";
        }

        $obj_select = $this->connection
            ->prepare("SELECT * FROM products WHERE products.title LIKE '%$tukhoa%' ");
        $obj_select->execute();
//        $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $obj_select->fetchAll(PDO::FETCH_ASSOC);
    }
}

