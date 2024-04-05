<?php
/*
//bool 25
$x=-5; $y=10;
$b=($x<0 and $y>0);
if($b)
{
    echo "ikkinchi chorak";
}
*/

/*
//bool 26
$x=5; $y=-10;
$b=($x>0 and $y<0);
if($b)
{
    echo "to'rinchi chorak";
}
*/

/*
//bool 27
$x=-5; $y=10;
$b=($x<0 and $y>0 or $x<0 and $y<0);
if($b)
{
    echo "ikkinchi yoki uchinchi chorak";
}
*/

/*
//bool 28
$x=5; $y=10;
$b=($x>0 and $y>0 or $x<0 and $y<0);
if($b)
{
    echo "birinch yoki uchinchi chorak";
}
*/

/*
//bool 29
$x=5; $y=10;
$x1=1; $y1=12;
$x2=7; $y2=4;
$b=($x>$x1 and $y<$y1 and $x<$x2 and $y>$y2);
if($b)
{
    echo "to'trburchak ichida yotadi";
}
*/
/*

//bool 30
$a=5; $b=5;
$c=5; 
$d=(($a==$b)==$c);
if($d)
{
    echo " teng tomonli";
}
*/

/*
//bool 31
$a=6; $b=5;
$c=5; 
$d=($a==$b or $c==$b or $a==$c);
if($d)
{
    echo " teng yonli";
}
*/


/*
//bool 32
$a=3; $b=4;
$c=5; 
$d=($a*$a+$b*$b==$c*$c or $a*$a+$c*$c==$b*$b or $c*$c+$b*$b==$a*$a);
if($d)
{
    echo " tog'ri burchakli ";
}
*/

/*
//bool 33
$a=3; $b=4;
$c=5; 
$d=($a+$b>$c and $c+$b>$a and $a+$c>$b);
if($d)
{
    echo "  uchburchak yasab bo'ladi ";
}
*/

/*
//bool 34
$x=6; $y=7;
$b=($x%2==0 and $y%2!=0 or $x%2!=0 and $y%2==0);
if($b)
{
    echo "maydon oq";
}
*/

/*
//bool 35
$x1=6; $y1=7;
$x2=2; $y2=2;
$b=($x%2==0 and $y%2==0 or $x%2==0 and $y%2==0  or  $x%2!=0 and $y%2!=0 or $x%2!=0 and $y%2!=0);
if($b)
{
    echo "berilga maydonlar bir xil rangda";
}
*/

/*
//bool 36
$x1=6; $y1=7;
$x2=6; $y2=8;
$b=($x1==$x2 or $y1==$y2);
if($b)
{
    echo "rux ko'cha oladi";
}
*/

/*
//bool 37
$x1=6; $y1=7;
$x2=6; $y2=8;
$b=(abs($x1-$x2)<2 or abs($y1-$y2)<2);
if($b)
{
    echo "shox ko'cha oladi";
}
*/

/*
//bool 38
$x1=6; $y1=7;
$x2=6; $y2=8;
$b=(abs($x1-$x2)==abs($y1-$y2));
if($b)
{
    echo "fil ko'cha oladi";
}
*/

/*
//bool 39
$x1=6; $y1=7;
$x2=6; $y2=8;
$b=(abs($x1-$x2)==abs($y1-$y2) or $x1==$x2 or $y1==$y2);
if($b)
{
    echo "farzin ko'cha oladi";
}
*/

/*
//bool 40
$x1=6; $y1=7;
$x2=6; $y2=8;
$b=(abs($x1-$x2)==2 and abs($y1-$y2)==1 or abs($x1-$x2)==1 and abs($y1-$y2)==2);
if($b)
{
    echo "ot ko'cha oladi";
}
*/


?>