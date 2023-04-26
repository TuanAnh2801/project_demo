<?php
//models/Category
require_once 'models/Model.php';
class Detail extends Model {
    public $id;
    public $avatar;
    public $product_id;
    public $description;


    public function insert() {
        $sql_insert = "INSERT INTO details(`avatar`, `product_id`, `description`)
VALUES (:avatar, :product_id, :description)";
        //cbi đối tượng truy vấn
        $obj_insert = $this->connection->prepare($sql_insert);
        //gán giá trị thật cho các placeholder
        $arr_insert = [
            ':avatar' => $this->avatar,
            ':product_id' => $this->product_id,
            ':description' => $this->description,
        ];
        return $obj_insert->execute($arr_insert);
    }

    /**
     * LẤy thông tin danh mục trên hệ thống
     * @param $params array Mảng các tham số search
     * @return array
     */
    public function getAll($params = []) {

        //tạo 1 chuỗi truy vấn để thêm các điều kiện search
        //dựa vào mảng params truyền vào
        $str_search = 'WHERE TRUE';
        //check mảng param truyền vào để thay đổi lại chuỗi search
        if (isset($params['product_id']) && !empty($params['product_id'])) {
            $product_id = $params['product_id'];
            //nhớ phải có dấu cách ở đầu chuỗi
            $str_search .= " AND `product_id` LIKE '%$product_id%'";
            var_dump($str_search);
            die();
        }

        //tạo câu truy vấn
        //gắn chuỗi search nếu có vào truy vấn ban đầu
        $sql_select_all = "SELECT * FROM details $str_search";
        //cbi đối tượng truy vấn
        $obj_select_all = $this->connection
            ->prepare($sql_select_all);
        $obj_select_all->execute();
        $product_id = $obj_select_all
            ->fetchAll(PDO::FETCH_ASSOC);
        return $product_id;
    }


    public function getById($id)
    {
        $sql_select_one = "SELECT * FROM details WHERE id = $id";
        $obj_select_one = $this->connection
            ->prepare($sql_select_one);
        $obj_select_one->execute();
        $detail = $obj_select_one->fetch(PDO::FETCH_ASSOC);
        return $detail;
    }
    /**
     * Lấy category theo id truyền vào
     * @param $id
     * @return array
     */
    public function getCategoryById($id)
    {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM details WHERE id = $id");
        $obj_select->execute();
        $detail = $obj_select->fetch(PDO::FETCH_ASSOC);

        return $detail;
    }

    /**
     * Update bản ghi theo id truyền vào
     * @param $id
     * @return bool
     */
    public function update($id)
    {
        $obj_update = $this->connection->prepare("UPDATE details SET `product_id` = :product_id, `avatar` = :avatar, `description` = :description
         WHERE id = $id");
        $arr_update = [
            ':product_id' => $this->product_id,
            ':avatar' => $this->avatar,
            ':description' => $this->description,

        ];

        return $obj_update->execute($arr_update);
    }

    /**
     * Xóa bản ghi theo id truyền vào
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $obj_delete = $this->connection
            ->prepare("DELETE FROM details WHERE id = $id");
        $is_delete = $obj_delete->execute();
        //để đảm bảo toàn vẹn dữ liệu, sau khi xóa category thì cần xóa cả các product nào đang thuộc về category này

        return $is_delete;
    }

    /**
     * Lấy tổng số bản ghi trong bảng categories
     * @return mixed
     */
    public function countTotal()
    {
        $obj_select = $this->connection->prepare("SELECT COUNT(product_id) FROM details");
        $obj_select->execute();

        return $obj_select->fetchColumn();
    }

    public function getAllPagination($params = [])
    {
        $limit = $params['limit'];
        $page = $params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection
            ->prepare("SELECT * FROM details LIMIT $start, $limit");

//    do PDO coi tất cả các param luôn là 1 string, nên cần sử dụng bindValue / bindParam cho các tham số start và limit
//        $obj_select->bindParam(':limit', $limit, PDO::PARAM_INT);
//        $obj_select->bindParam(':start', $start, PDO::PARAM_INT);
        $obj_select->execute();
        $deatils = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $deatils;
    }
}
