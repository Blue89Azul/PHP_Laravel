
<?php
// 課題１
function double($num)
{
    return $num * 2 ;
}
echo double(8);

// 課題２
function addition($a, $b)
{
    return $a + $b;
}
echo addition(1, 4);

// 課題３
function multi($arrays)
{
    $result = 1;
    foreach ($arrays as $array) {
        $result *= $array;
    }
    return $result;
}
$arr = [1, 3, 5, 7, 9];
echo multi($arr);

// 課題４
 function max_array($arr)
 {
     asort($arr);
     $max_number = $arr[0];
     foreach ($arr as $a) {
         $max_number = $a;
     }
     return $max_number;
 }
 
 $arr = [1,0,5,700,9,8000];
 echo max_array($arr);

// 課題５
// 5-1 strip_tags(文字列からPHP/HTMLタグを取り除く)
$text = '<p>あいうえお<br>かきくけこ</p>';
echo strip_tags($text, "<p>"); //第二引数は、取り除かないタグ指定

//5-2  array_push(配列の末尾に要素を追加)
$animals = ["dog", "cat", "bird"];
array_push($animals, "panda");
var_dump($animals);

//5-3  array_merge(配列の結合)
$sports = ["baseball", "soccer", "basketball"];
$hobbies = ["cook", "sleep", "shopping"];
$colors = ["blue", "black", "red"];
$arrays = array_merge($sports, $hobbies, $colors);
var_dump($arrays);

//5-4 time(UNIXタイムスタンプ（1970年１月１日午前０時００分からの経過時間）の現在時刻を取得), mktime(UNIXタイムスタンプの指定時刻を取得)
//5-4 date(日程・時刻を書式化する)
echo date("Y年 n月 j日 h時 i分 s秒", time());
echo date("Y年 n月 j日 h時 i分 s秒", mktime(0, 0, 0, 11, 9, 2019));