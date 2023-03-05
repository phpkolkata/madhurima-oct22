<?php
abstract class connection{

    public $user = "root";
    public $pass = "root";
    public $db = "mobile_store";
    public $server = "localhost";

    // function connect(){
    //     return mysqli_connect($this->server,$this->user,$this->pass,$this->db);
    // }
  abstract function connect();

  function hi(){
    echo "hi";
  }
}