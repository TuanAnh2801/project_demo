<?php
require_once 'models/Model.php';
class Category extends Model {

  public function getAll() {
    $sql_select_all = "SELECT * FROM categories WHERE `status` = 1";
    $obj_select_all = $this->connection->prepare($sql_select_all);
    $obj_select_all->execute();
    $categories = $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
    return $categories;
  }
    public function ao(){
        $select = $this->connection->prepare("SELECT * FROM categories WHERE categories.id = 1 ");
        $select ->execute();
        return $select->fetch(PDO::FETCH_ASSOC);
    }
}