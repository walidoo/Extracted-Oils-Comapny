<?php require_once '../includes/DB.php'; ?>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of enter
 *
 * @author walid
 */
class enter {

    public $name;
    public $email;
    public $phone;
    public $product_name;
    public $message;
    public $attachfile;

    public function enter_order() {

        global $conn;
        $sql = "insert into orders (client_name , email , phone , product_name , message ) values ('$this->name' , '$this->email' , '$this->phone' , '$this->product_name' , '$this->message')";
        $sql_stmt = $conn->query($sql);
        if ($sql_stmt === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    public function enter_supplier() {

        global $conn;
        $sql = "insert into suppliers (supplier_name , email , phone , attach_file  ) values ('$this->name' , '$this->email' , '$this->phone' , '$this->attachfile' )";
        $sql_stmt = $conn->query($sql);
        if ($sql_stmt === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    public function selectdb($varid) {

        global $conn;
        $sql = "select * from data where id=" . $varid;
        $sql_stmt = $conn->query($sql);
        $row = $sql_stmt->fetch_assoc();
        return $row["id"];
    }

}
