<?php
/*
// function 1
function PowerA3($h)
{
    return pow($h,3);
}
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=$_GET['d'];
$e=$_GET['e'];
echo PowerA3($a). " ";
echo PowerA3($b). " ";
echo PowerA3($c). " ";
echo PowerA3($d). " ";
echo PowerA3($e). " ";
*/

/*
// function 2
function PowerA3($a,$b,$c)
{
    echo pow($a,2). " ".pow($a,3). " ".pow($a,4). "\n";
    echo pow($b,2). " ".pow($b,3). " ".pow($b,4). "\n";
    echo pow($c,2). " ".pow($c,3). " ".pow($c,4). "\n";
}
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
 PowerA3($a,$b,$c);
*/
/*
// function 3
function PowerA3($a,$b,$c,$d)
{
    echo (($a+$b)/2). " ". sqrt($a*$b). "\n";
    echo (($a+$c)/2). " ". sqrt($a*$c). "\n";
    echo (($a+$d)/2). " ". sqrt($a*$d). "\n";
}
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=$_GET['d'];
 PowerA3($a,$b,$c,$d);
*/

/*
// function 4
function PowerA3($a,$b,$c)
{
    $p=$a+$b+$c;
    echo "p=".$p. " ";
    $p/=2;
    echo "s=". sqrt($p*($p-$a)*($p-$b)*($p-$c)). "<br>";
}
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
 PowerA3($a,$b,$c);
*/

/*
// function 5
function PowerA3($x,$y,$x1,$y1)
{
    $a=abs($x-$x1);
    $b=abs($y-$y1);
    $p=$a+$b+$a+$b;
    echo "p=".$p. " ";
    echo "s=". $a*$b;
}
$x=$_GET['x'];
$y=$_GET['y'];
$x1=$_GET['x1'];
$y1=$_GET['y1'];
 PowerA3($x,$y,$x1,$y1);
*/

/*
// function 6
function PowerA3($x)
{
    $s=0; $l=0;
    while($x>=1)
    {
        $s+=$x%10;
        $x/=10;
        $l++;
    }
    echo $s. " ". $l. "<br>";
}
$a=123;
$b=456;
$c=123456;
 PowerA3($a);
 PowerA3($b);
 PowerA3($c);
 */

 /*
 // function 7
function PowerA3($x)
{
    $s=$x; $l=0;
    while($x>=1)
    {
        $x/=10;
        $l++;
    }
    $k=0;
    while($s>=1)
    {
        $k+=($s%10)*pow(10,$l-1);
        $s/=10;
        $l--;
    }
    return $k. "<br>";
}
$a=123;
$b=456;
$c=123456;
 echo PowerA3($a);
 echo PowerA3($b);
 echo PowerA3($c);
*/
/*
 // function 8
function PowerA3($k,$b)
{
    return $k*10+$b. "<br>";
}
$k=123;
$b=4;
 echo PowerA3($k,$b);
 */


/*
 // function 9
function PowerA3($x,$b)
{
     $a=$x; $l=0;
    while($x>=1)
    {
        $x/=10;
        $l++;
    }
    return $b*pow(10,$l)+$a. "<br>";
}
$a=123;
$b=4;
 echo PowerA3($a,$b);
*/

/*
  // function 11
function PowerA3($x,$y)
{
     $a=$x; $x=max($x,$y); $y=min($a,$y);
    echo "x=". $x. " "."y=". $y. "<br>";
}
$a=123; $b=4;
$c=34; $d=345;
  PowerA3($a,$b);
  PowerA3($c,$d);
  */

/*
  // function 12
function PowerA3($x,$y,$z)
{
    $d=$x; $g=$z;
     $x=min($x,$y,$z);
     $z=max($d,$y,$z);
     if($d>$x and $d<$z)
     {
        $y=$d;
     }
     elseif($g>$x and $g<$z)
     {
        $y=$g;
     }
    echo $x. " ".$y. " ".$z. "<br>";
}
$a=123; $b=4; $c=34; 
  PowerA3($a,$b,$c);
  */

/*
  // function 14
function PowerA3($x,$y,$z)
{   $y1=$y; $z1=$z;
    $y=$x; $z=$y1; $x=$z1;
    
    echo $x. " ".$y. " ".$z. "<br>";
}
$a=123; $b=4; $c=34; 
  PowerA3($a,$b,$c);
  */

/*
  // function 16
function PowerA3($x)
{   
    if($x>0)
    {
        return 1;
    }
    elseif($x<0)
    {
        return -1;
    }
    else return 0;
}
$a=123; $b=4; 
echo   PowerA3($a)+ PowerA3($b);
*/

/*
// function 17
function PowerA3($x)
{   
    if($x>0)
    {
        return 2;
    }
    elseif($x<0)
    {
        return 0;
    }
    else return 1;
}
$a=1;
echo   PowerA3($d);
*/


/*
 // function 18
 function PowerA3($x)
 {   
     return M_PI*$x*$x;
 }
 $r=1;
 echo   PowerA3($r);
 */



 /*
 // function 19
function PowerA3($x,$x2)
{   
    return sqrt(M_PI*$x*$x-M_PI*$x2*$x2);
}
$r=1; $r2=2;
echo   PowerA3($r,$r2);
*/

/*
// function 20
function PowerA3($a,$b)
{   
    return sqrt($a*$a+$b*$b)+$a+$b;
}
$a=3; $b=4;
echo   PowerA3($a,$b);
*/

/*
// function 21
function PowerA3($a,$b)
{   if($a<$b)
    {
        $s=0;
        for($i=$a+1;$i<$b;$i++)
        {
            $s+=$i;
        }
        return $s;
    }
    else return 0;
}
$a=3; $b=4;
echo   PowerA3($a,$b);
*/

/*
// function 22
function PowerA3($a,$b,$op)
{  
     if($op==1)
    {
        return $a-$b;
    }
    if($op==2)
    {
        return $a*$b;
    }
    if($op==3)
    {
        return $a/$b;
    }
    if($op==4)
    {
        return $a+$b;
    }
}
$a=5; $b=4;$op=2;
echo   PowerA3($a,$b,$op);
*/

/*
// function 23
function PowerA3($a,$b)
{  
     if($a>0 and $b>0)
    {
        return 1;
    }
    if($a<0 and $b>0)
    {
        return 2;
    }
    if($a<0 and $b<0)
    {
        return 3;
    }
    if($a>0 and $b<0)
    {
        return 4;
    }
}
$x=5; $y=4;
echo   PowerA3($x,$y);
*/


/*
// function 25
function PowerA3($a)
{   
        for($i=1;$i<$a;$i++)
        {
            if($i*$i==$a)
            {
                return true;
            }
        }
        return false;
}
$a=36;
echo   PowerA3($a);
*/

/*
// function 27
function PowerA3($a,$n)
{   
        for($i=0;$i<$a;$i++)
        {
            if(pow($n,$i)==$a)
            {
                return true;
            }
        }
        return false;
}
$a=36; $n=6;
echo   PowerA3($a,$n);
*/

/*
// function 28
function PowerA3($a)
{   
        for($i=2;$i<$a;$i++)
        {
            if($a%$i==0)
            {
                return 0;
            }
        }
        return 1;
}
$a=31;
echo   PowerA3($a);
*/


/*
// function 29
function PowerA3($x)
{
    $l=0;
    while($x>=1)
    {
        $x/=10;
        $l++;
    }
    echo  $l. "<br>";
}
$a=1234;
 PowerA3($a);
*/

// function 30
function PowerA3($x,$n)
{
    $s=$x;
    while($x>=1)
    {
        $x/=10;
        $l++;
    }
    if($l>=$n)
    {
        for($i=1;$i<=$n;$i++)
        {
            $d=floor($s/pow(10,$l-1));
            $s%=pow(10,$l-1);
            $l--;
        }
        return $d;
    }
    else return -1;
}
$a=1234;$n=4;
 echo PowerA3($a,$n);

?>