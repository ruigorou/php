<?php

for ($i = 0; $i <= 4; $i++) {
    echo $i;
}
echo "<br>";

for($i = 2; $i < 11; $i++){
    $a = ($i % 2 == 0) ? $i : "";
    echo $a;
    echo "<br>";
}

$i = 0;
while ($i < 20) {
    $i++;
    echo $i . "<br>";
}

$count = 0;

while ($count <= 100) {
  
  if ($count === 20) {
        break;
  }elseif ($count % 3 === 0) {
        $count++;
        continue;
  }
  else{
        echo $count . '<br />';
        $count++;
  }
  
}

$num = 0;
do {
    echo "num = ". $num . "<br>";
    $num++;
}while($num < 3);

for($num = 1; $num < 50; $num++) {
    if ($num % 3 === 0 && $num % 5 === 0) {
        echo "FizzBuzz" . "<br>";
    }elseif ($num % 5 === 0) {
        echo "Buzz" . "<br>";
    }elseif($num % 3 === 0){
        echo "Fizz" . "<br>";
    }else{
        echo $num . "<br>";
    }
}

for($i = 0; $i < 5; $i++){
    for($s = 0; $s < 5; $s++){
        echo "〇";
    }
    echo "<br>";
}