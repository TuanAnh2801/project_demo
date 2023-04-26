<?php
require_once 'models/Model.php';
class OrderDetail extends Model {
    public function insertData($order_id,$product_name,$product_price,$quantity,$size){
        $sql_insert = "INSERT INTO order_details(`order_id`, `product_name`,`product_price`,`quantity`,`size` ) VALUES (:order_id,
    :product_name,:product_price,:quantity,:size )";
        $obj_insert = $this->connection->prepare($sql_insert);
        $inset =[
            ':order_id'=>$order_id,
            ':product_name'=>$product_name,
            ':product_price'=>$product_price,
            ':quantity'=>$quantity,
            ':size' =>$size,

        ];
        return $obj_insert->execute($inset);
    }
}