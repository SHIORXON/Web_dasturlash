
<?php
$mevalar = array(
    "nok" => 10,
    "olma" => 15,
    "banan" => 8,
    "uzum" => 20,
    "anor" => 12,
    "anjir" => 5,
    "shaftoli" => 18,
    "gilos" => 9,
    "olcha" => 11,
    "qovun" => 6
);
foreach($mevalar as $key => $value)
{
    echo $key. "=>". $value. "<br>";
}
echo "saralanangan massiv". "<br>";
asort($mevalar);
foreach($mevalar as $key => $value)
{
    echo $key. "=>". $value. "<br>";
}
?>

