<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DB
 *
 * @author walid
 */
class DB {
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "extractoils";
    public $conn = NULL;

    public function getCon() {
        if (is_null($this->conn)) {
            $this->init();
//            die("connection successful");
        }
        return $this->conn;
    }

    public function init() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $this->conn->set_charset("utf8");
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

}

$con=new DB();
$conn=$con->getCon();

