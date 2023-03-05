<?php
require ("db.class.php");

class sql extends db{

    var $con = null;
    var $tbl = null;

    function __construct($tbl)
    {
        $this->con = $this->connect();
        $this->tbl = $tbl;
    }

    function select(){
        return mysqli_query($this->con, "select * from `$this->tbl`");
    }
}