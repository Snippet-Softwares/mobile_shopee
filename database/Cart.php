<?php
/**
 * Created by PhpStorm.
 * User: clifford
 * Date: 12/14/2021
 * Time: 10:27 AM
 */

/*PHP cart class*/
class Cart
{

    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    /*Insert into cart table*/
    public function insertIntoCart($params = null, $table = "cart")
    {
        if ($this->db->con != null) {
            if ($params != null) {

                /*get table column names*/
                $columns = implode(',',array_keys($params));
                $values = implode(',',array_values($params));

                /*create SQL query*/
                $query_string = sprintf("INSERT INTO %s(%s) VALUES (%s)",$table,$columns,$values);

                /*execute query*/
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    /*get user & item IDs and insert into cart table*/
    public function addToCart($userid,$itemid)
    {
        if (isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            /*insert into cart table*/
            $result = $this->insertIntoCart($params);
            if ($result) {
                /*Reload page*/
                header("Location:".$_SERVER['PHP_SELF']);
            }
        }
    }

    /*calculate total cost*/
    public function getSum($arr){
        if (isset($arr)) {
            $sum = 0;
            foreach ($arr as $item) {
                $sum += floatval($item[0]);
            }
            return sprintf('%2f',$sum);
        }
    }

    /*delete cart item using cart_item_id*/
    public function deleteCart($item_id = null, $table = 'cart') {
        if ($item_id != null) {
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id = {$item_id}");
            if ($result) {
                header("Location:".$_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }
}