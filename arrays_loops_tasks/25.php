<?php
$arr = array();
for ($i=0; $i<10; $i++) {
    $arr[$i] = rand(0,100);
}
$max = $min = $arr[1];

foreach ($arr as $k => $value) {
    echo "Initial array: \$a[$k] => $value" . '<br>';
}
echo '<hr>';
foreach ($arr as $k => $value) {
    if ($value < $min && $min >= $min)
        $min = $value;
    if ($value > $max && $max <= $max)
        $max = $value;
}
echo "Max element: {$max}, Min element: {$min}";

foreach ($arr as $k => $value){
    if ($value == $max)
        $arr[$k] = $min;
    if ($value == $min)
        $arr[$k] = $max;
}
echo '<hr>';
foreach ($arr as $k => $value) {
    echo "Finish array: \$a[$k] => $value" . '<br>';
}