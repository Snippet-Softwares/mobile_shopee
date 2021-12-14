<?php
/**
 * Created by PhpStorm.
 * User: clifford
 * Date: 12/11/2021
 * Time: 12:22 PM
 */

/*Used to fetch product data*/
class product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    //    fetch product data using get_data method
    public function getData($table = 'product') {
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    /*get product using item_id*/
    public function getProduct($item_id = null, $table = 'product'){
        if (isset($item_id)) {
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id = {$item_id}");
            $resultArray = array();
            while ($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }
            return $resultArray;
        }
    }
}