<?php
class db {

var $host = "localhost";
var $user = "asif";
var $pass = "asif";
var $db = "mobile_store";

function connect(){
    $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    return $con;
}


}