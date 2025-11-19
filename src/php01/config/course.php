<?php
// if (isset($_GET['company'])) {
//     $company = htmlspecialchars($_GET['company'], ENT_QUOTES);
//     echo "会社名は " . $company . " ですね";
// }

$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";

echo "<br>";
var_dump($company);
?>

