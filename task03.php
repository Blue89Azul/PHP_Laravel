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
for ($i = 0; $i <=10000; $i++) {
    $total += $i;
}
echo $total;

//課題３
$fruits = ["スイカ", "バナナ", "りんご", "みかん", "さくらんぼ"];
foreach ($fruits as $fruit) {
    echo "\n";
    echo $fruit;
}

// 課題４
$start = 0;
$end = 100;
for ($i = $start; $i <= $end; $i+=5) { //$iのインクレメントを５づつカウントアップさせる
    if ($i != 0) { //if文で0以外の数字が来たら、echoで出力させる条件を設定。
        echo $i;
    }
}
