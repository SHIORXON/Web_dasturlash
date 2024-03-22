/* 
if9. A va B haqiqiy sonlari beringan. Shu sonlarni shunday o'zgartirish kerakki, A son kichik B son katta bo'lsin. A va B ning qiymati ekranga chiqarilsin.
*/
<?php
$a=2;
$b=1;
if($a>$b)
{
   $c=$a;
   $a=$b;
   $b=$c;
}
echo $a." ".$b;
?>