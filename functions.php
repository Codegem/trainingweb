<?php
//DB Control Object
require ('database/DBController.php');
require ('database/product.php');
$db = new DBController();

//objects
$product = new Product($db);
