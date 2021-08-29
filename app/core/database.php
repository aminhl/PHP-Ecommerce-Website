<?php

class Database{
    /*
     * This Is The Database Class
     */
    public static $con;
    public function __construct(){
        try {
            $string = DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME;
            self::$con = new PDO($string,DB_USER,DB_PASS);
        }
        catch (PDOException $e){
            die($e->getMessage());
        }
    }
    public static function getInstance(){
        if (self::$con){
            return self::$con;
        }
        return $instance = new self();
    }
    /*
    * Read From Database
    */
    public function read($query,$data = array()){
        $stmt = self::$con->prepare($query);
        $result = $stmt->execute($data);
        if ($result){
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            if (is_array($data)){
                return $data;
            }
        }
        return false;
    }
    /*
    * Write In Database
    */
    public function write($query,$data = array()){
        $stmt = self::$con->prepare($query);
        $result = $stmt->execute($data);
        if ($result){
            return true;
        }
        return false;
    }
}