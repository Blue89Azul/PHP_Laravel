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
$start = 5; //初期値を５に変更。
$end = 100;
for ($i = $start; $i <= $end; $i+=5) { //$iのインクレメントを５づつカウントアップ。
    echo "\n"; //課題３の回答から開業させるため、ここに\nを配置。
    echo $i;
}
