<?php
function value($a) {
    return $a;
}

echo value(5). "<br>";


function sum ($score1, $score2, $score3) {
    $total = $score1 + $score2 + $score3;
    $value = ($total > 210) ? "合計点は" . $total . "なので合格です" : "合計点は" . $total . "なので不合格です";
    return $value;
}

echo sum(100, 100, 0);

function triangle_area($bottom, $height) {
    return ($bottom * $height) / 2;
}

function square_area($vertical, $horizontal) {
    return $vertical * $horizontal;
}

function trapezoid_area($top_base, $bottom_base, $height) {
    return ($top_base + $bottom_base) * $height / 2;
}



?>

