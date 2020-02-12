<?php

$change = (int)$argv[1];
$coins = [10, 5, 2, 1];

foreach($coins as $munt){
    if(floor($change / $munt) > 0){
        $times =  floor($change / $munt);
        echo "$times X $munt" . PHP_EOL;
        $change = $change - ($times * $munt);

    }
}