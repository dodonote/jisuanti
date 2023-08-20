<?php

//数学计算题

$data = [];


echo '<div style="width: 100%; height: 100px; text-align: center;">列竖式计算</div>';

for($i = 1; $i <= 3; $i++)
{
    for ($j = 1; $j <= 6; $j++)
    {
        //乘法
        $m = mt_rand(10, 300); $n = mt_rand(10, 200);

        //除法
        $mm = mt_rand(10, 300); $nn = mt_rand(2, 10);

        //乘法还是除法计算
        $x = mt_rand(1, 2);

//        if ($x == 1) {
//            echo "<span style='width: 160px; text-align: left; float: left;'>{$m} x $n = </span>";
//        } else {
//            echo "<span style='width: 160px; text-align: left; float:left;'>{$mm} ÷ $nn = </span>";
//        }
        if ($x == 1) {
            echo "{$m} x $n = &nbsp; &nbsp;";
        } else {
            echo "{$mm} ÷ $nn = &nbsp; &nbsp;";
        }
    }


    echo "<br/><br/><br/><br/><br/>";
}


echo '<div style="width: 100%; height: 200px; text-align: center;">脱式计算</div>';


$html = '<table>';
for($i = 1; $i <= 3; $i++)
{
    $html .= '<tr>';
    //是否有括号
    $y = 0;

    for ($j = 1; $j <= 5; $j++)
    {
        //加法
        $m = mt_rand(10, 500); $n = mt_rand(10, 600); $p = mt_rand(10, 300);

        //减法
        $m1 = mt_rand(100, 600); $n1 = mt_rand(10, $m1); $p1 = mt_rand(10, 200);

        //乘法
        $m2 = mt_rand(10, 300); $n2 = mt_rand(10, 300); $p2 = mt_rand(10, 300);

        //除法
        $m3 = mt_rand(10, 500); $n3 = mt_rand(2, 9); $p3 = mt_rand(1, 9); $m4 = mt_rand(1, 4); $m5 = mt_rand(1, 5);

        //乘法还是除法计算
        $x = mt_rand(1, 4);
        $x1 = mt_rand(1, 4);


//        if ($x == 1) {
//            echo "<span style='width: 160px; text-align: left; float: left;'>{$m} x $n = </span>";
//        } else {
//            echo "<span style='width: 160px; text-align: left; float:left;'>{$mm} ÷ $nn = </span>";
//        }

        $str = '';

        if ($x == 1) {
            $str .= "{$m}+{$n}";
        } else if ($x == 2){
            $str .= "{$m1}-{$n1}";
        } else if ($x == 3) {
            $str .= "{$m2}x{$n2}";
        } else {
            $str .= "{$m3}÷{$n3}";
        }

        //后面的计算
        if ($x1 == 1) {
            $str .= "+{$p}";
            //添加括号
            if ($y <= 2 && $x == 3) {
                $str = "{$m2}x({$n2}+{$p})";
                $y++;
            } else if ($y <= 2 && $x == 4) {
                $str = "{$m3}÷({$m4}+{$m5})";
                $y++;
            }
        } else if ($x1 == 2){
            $str .= "-{$p1}";
            //添加括号
            if ($y <= 2 && $x == 3) {
                $m6 = mt_rand(10, 100); $m66 = mt_rand($m6, mt_rand(10, 300));
                $str = "{$m2}x({$m66}-{$m6})";
                $y++;
            } else if ($y <= 2 && $x == 4) {
                $m7 = mt_rand(10, 300); $m77 = mt_rand($m7, ($m7+mt_rand(1, 9)));
                $str = "{$m3}÷({$m77}-{$m7})";
                $y++;
            }
        } else if ($x1 == 3) {
            $str .= "x{$p2}";
            //减法逻辑
            if ($x == 2) {
                $m8 = mt_rand(10, $m1); $m88 = mt_rand(1, intval($m1/$m8));
                $str = "{$m1}-{$m8}x{$m88}";
            }
        } else {
            $str .= "÷{$p3}";
            //减法逻辑
            if ($x == 2) {
                $m9 = mt_rand($m1, $m1+mt_rand(10, 300)); $m99 = mt_rand(1, intval($m9/$m1));
                $str = "{$m1}-{$m9}÷{$m99}";
            }
        }

        $html .= "<td>{$str} &nbsp;&nbsp;<br/>=<br/>=<br/><br/><br/></td>";
    }

    $html .= "</tr>";
}

$html .= '</table>';
echo $html;

?>
