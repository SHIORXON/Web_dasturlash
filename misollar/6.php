<?php
$s1 = "assalomu";
$s2 = "aleykum";

$q = $s1 . " " . $s2;
$s = str_word_count($q);
$b = strlen($q);

echo "Qo'shilgan satr: " . $q . "\n";
echo "So'zlar soni: " . $s . "\n";
echo "Belgilar soni: " . $b . "\n";
?>
