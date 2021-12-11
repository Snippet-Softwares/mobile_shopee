<?php
/**
 * Created by PhpStorm.
 * User: clifford
 * Date: 12/11/2021
 * Time: 11:40 AM
 */

class DBController {
    //    database connection properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'shopee';

    // connection property
    public $con = null;

    // call constructor
    public function __construct() {
        $this -> con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if ($this->con->connect_error){
            echo "Connection failed: ".$this->con->connect_error;
        }
    }

    // this function will close connection if connection is not in use
    public function __destruct()
    {
        $this->closeConnection();
    }

    // for MySQL closing connection
    protected function closeConnection() {
        if ($this->con!=null){
            $this->con->close();
            $this->con=null;
        }
    }
}