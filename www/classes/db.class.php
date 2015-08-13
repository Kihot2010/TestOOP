<?php
class Db {
    public $host;
    public $login;
    public $password;
    public $dbName;
    public $db;
}

class DbConnect extends Db {
    function __constract ($h, $l, $p='', $b='') {
        $this->db = mysql_connect($h, $l, $p, $b);
        if (!$this->db) {
            die("Соединение не удалось!");
        }
        mysql_select_db($this->dbName, $this->db);
    }
}

class DbQuery extends Db {
    public $querry;

    function __construct($q) {

    }
}

//class DbInfo extends Db {
//    echo parent::$host;
//}