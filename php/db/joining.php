<?php
require("db-connection.php");

// alias can be created for table and column

// equi join
// $sql = "SELECT *,`p`.`id` AS `pid`, `c`.`name` AS `cname`, `p`.`name` As `pname` FROM `product` AS `p`,`category` AS `c` WHERE `p`.`cat_id`=`c`.`id`";

// INNER JOIN
$sql = "SELECT * from `order` AS `o` INNER JOIN `product` AS `p` ON `o`.`pid` =`p`.`id` INNER JOIN `category` AS `c` ON `p`.`cat_id` =`c`.`id`  INNER JOIN `client` AS `cl` ON `o`.`cid` =`cl`.`id`";

// OUTER JOIN (LEFT & RIGHT)
$sql = "SELECT * from `product` AS `p` LEFT JOIN `category` AS `c` ON `p`.`cat_id` =`c`.`id`";
// $sql = "SELECT * from `product` AS `p` RIGHT JOIN `category` AS `c` ON `p`.`cat_id` =`c`.`id`";




$res = mysqli_query($con, $sql);
while($row= mysqli_fetch_assoc($res)){
    print"<pre>";
    print_r($row);
}