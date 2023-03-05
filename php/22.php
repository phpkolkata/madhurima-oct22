<?php
print "POST - ";
print_r($_POST);

print "<br>GET - ";
print_r($_GET);

print "<br>REQUEST - ";
print_r($_REQUEST);

print "<hr>";

extract($_REQUEST);
print "Hello $nm";