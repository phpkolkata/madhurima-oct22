<?php
require("connection.class.php");

class mysql extends connection{

    function connect(){
        return mysqli_connect($this->server,$this->user,$this->pass,$this->db);
    }
}