<?php
$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
$product = htmlspecialchars($_POST["product"], ENT_QUOTES);
$quantity = htmlspecialchars($_POST['quantity'], ENT_QUOTES);
print "会社名は、" . $company ."<br>";
print "ご希望の商品は、" . $product . "<br>";
print "注文数は、" . $quantity;


