/* 
if3. Butun son berilgan. Agar, berilgan son musbat bo'lsa, 1 ga oshiring, 
agar manfiy bo'lsa 2 ga kamaytiring. Agar 0 ga teng bo'lsa, 10 ni o'zlashtirsin. Hosil bo'lgan sonni ekranga chiqaruvchi programma tuzilsin.
*/
<?php
$a=0;
if($a>0)
{
    echo $a+1;
}
elseif($a<0){
    echo $a-2;
}
else{
    $a=10;
    echo $a;
}
?>