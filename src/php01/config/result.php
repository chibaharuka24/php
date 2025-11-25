<?php

$name = htmlspecialchars($_GET['name'],ENT_QUOTES);
print "私の名前は、". $name;
print "<br />";
$radio = $_GET['merchandise'];
print "ご希望の商品は、". $radio;
Print "<br />";
$order = $_GET['order'];
print "注文数は、" . $order;