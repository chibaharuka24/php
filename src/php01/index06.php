<?php
$i = 1;

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i  % 5 == 0) {
        echo 'FizzBuzz'.'<br />';
    }elseif ($i % 3 == 0) {
        echo 'Fizz'.'<br />';
    }elseif ($i % 5 == 0) {
        echo 'Buzz'.'<br />';
    }else {
        echo $i.'<br />';
    }
}


for ($i = 1;$i < 6; $i++) {
    for ($j =1; $j < 6; $j++) {
        echo "⚫︎";
    }
    echo "<br />";
}