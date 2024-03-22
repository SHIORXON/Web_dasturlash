/* 
if10. A va B butun sonlari berilgan. Agar o'zgaruvchilar o'zaro teng bo'lmasa, A va B o'zgaruvchilari 
ularning yig'indisini o'zlashtirsin. Agar teng bo'lsa, 0 ni o'zlashtirsin. A va B ning qiymati ekranga chiqarilsin.*/
<?php
$a=2;
$b=1;
if($a!=$b)
{
     $a+=$b; $b=$a;
}
else
{
    $b=0; $a=0;
}
echo $a." ".$b;

?>