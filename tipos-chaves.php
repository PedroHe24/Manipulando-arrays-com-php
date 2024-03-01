<?php

$array =[
1 => 'a',
'1'=> 'B',
1.5 => 'C',
true => 'd',
];

foreach ( $array as $item) {
    echo $item . PHP_EOL;
}