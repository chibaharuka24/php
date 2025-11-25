<?php
function exam($score1,$score2,$score3)
{
    $add = $score1 + $score2 + $score3;
    return $add;
}

$total = exam(60,80,50);
if ($total >= 210) {
    echo '合計点は';
    echo $total;
    echo '点なので合格です';
}else
    echo '合計点は';
    echo $total;
    echo '点なので不合格です';


    