<?php
$var1 =$_POST["steven1"];
$var2 =$_POST["steven2"];
$var3 =$_POST["steven3"];
if($var2 =='+')
{
    $operator='+';
    $hasil = $var1+$var3;
    echo"$var1 + $var3 = ",$hasil;
}
elseif($_POST['steven2']=='-')
{
    $operator='-';
    $hasil = $var1-$var3;
    echo"$var1 - $var3 = ",$hasil;
}
elseif($_POST['steven2']=='*')
{
    $operator='*';
    $hasil = $var1*$var3;
    echo"$var1 x $var3 = ",$hasil;
}
elseif($_POST['steven2']=='/')
{
    $operator='/';
    $hasil = $var1/$var3;
    echo"$var1 / $var3 = ",$hasil;
}
elseif($_POST['steven2']=='%')
{
    $operator='%';
    $hasil = $var1%$var3;
    echo"$var1 % $var3 = ",$hasil;
}

