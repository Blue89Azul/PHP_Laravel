<?php
//課題１
$name = "Aoi";
if ($name == "Aoi") {
    echo "私は{$name}です。";
} else {
    echo "{$name}ではありません。";
}

//課題２
$total = 0;
for ($i = 1; $i <=10000; $i++) {
    $total += $i;
}
echo $total;

//課題３
$fruits = ["スイカ", "バナナ", "りんご", "みかん", "さくらんぼ"];
foreach ($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}

// 課題４
$start = 0;
$end = 100;
for ($i = $start; $i <= $end; $i+=5) {
    if ($i !== 0) {
        echo $i;
        echo "\n";
    }
}
