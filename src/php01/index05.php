<?php
$a = 7;

if ($a == 5){
    echo "\$aは5です";
}elseif($a === 7){
    echo "\$aは7です。";
}
else{
    echo "\$aは以外";
}

$people = "Saburo";
switch($people){
    case $people === "Saburo":
        echo "三郎です";
        break;
}

$a = 7;
$result = ($a === 7) ? "TRUE" : "FALSE";

echo $result;