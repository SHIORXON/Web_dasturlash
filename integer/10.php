/*Integer10. Uch xonali son berilgan. Oldin uni birliklar xonasidagi raqamni so'ng o'nliklar xonasidagi raqamni chiqaruvchi programma tuzilsin.*/
<?php
$b=156;
echo "birlar xonasidagi son=".($b%10);
echo "<br>";
echo "o'nlar xonasidagi son=".(floor($b%100/10));
?>