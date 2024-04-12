<?php
/*
// case 11
$c='s'; $k1=1; $k2=2;
switch($c)
{
    case 's': switch($k1)
                {
                    case 0:switch($k2)
                         {
                            case 0: echo "janub"; break;
                            case 1: echo "shimol"; break;
                            case 2: echo "garb"; break;
                         }
                         break;
                    case 1:switch($k2)
                         {
                            case 0: echo "shimol"; break;
                            case 1: echo "janub"; break;
                            case 2: echo "sharq"; break;
                         }
                         break;
                    case 2:switch($k2)
                         {
                            case 0: echo "garb"; break;
                            case 1: echo "sharq"; break;
                            case 2: echo "shimol"; break;
                         }
                         break;
                }
                break;
case 'q': switch($k1)
                {
                    case 0:switch($k2)
                         {
                            case 0: echo "garb"; break;
                            case 1: echo "sharq"; break;
                            case 2: echo "shimol"; break;
                         }
                         break;
                    case 1:switch($k2)
                         {
                            case 0: echo "sharq"; break;
                            case 1: echo "garb"; break;
                            case 2: echo "janub"; break;
                         }
                         break;
                    case 2:switch($k2)
                         {
                            case 0: echo "shimol"; break;
                            case 1: echo "janub"; break;
                            case 2: echo "sharq"; break;
                         }
                         break;
                }
                break;
                
                
case 'j': switch($k1)
                {
                    case 0:switch($k2)
                         {
                            case 0: echo "shimol"; break;
                            case 1: echo "janub"; break;
                            case 2: echo "sharq"; break;
                         }
                         break;
                    case 1:switch($k2)
                         {
                            case 0: echo "janub"; break;
                            case 1: echo "shimol"; break;
                            case 2: echo "garb"; break;
                         }
                         break;
                    case 2:switch($k2)
                         {
                            case 0: echo "sharq"; break;
                            case 1: echo "garb"; break;
                            case 2: echo "janub"; break;
                         }
                         break;
                }
                break;
case 'g': switch($k1)
                {
                    case 0:switch($k2)
                         {
                            case 0: echo "sharq"; break;
                            case 1: echo "garb"; break;
                            case 2: echo "janub"; break;
                         }
                         break;
                    case 1:switch($k2)
                         {
                            case 0: echo "garb"; break;
                            case 1: echo "sharq"; break;
                            case 2: echo "shimol"; break;
                         }
                         break;
                    case 2:switch($k2)
                         {
                            case 0: echo "janub"; break;
                            case 1: echo "shimol"; break;
                            case 2: echo "garb"; break;
                         }
                         break;
                }
                break;
default: echo "xato";break;
}
*/

/*
// case 12
$n=2;
switch($n)
{
    case 1: $r=1; echo 2*$r. " ". 2*M_PI*$r. " ". M_PI*$r*$r; 
    case 2: $d=2; echo ($d/2). " ". M_PI*$d. " ". M_PI*($d/2)*($d/2); 
    case 3: $l=10; echo $l/2*M_PI. " ". $l/M_PI. " ". M_PI*$l/2*M_PI*$$l/2*M_PI; 
    case 4: $s=100; echo (sqrt($s/M_PI)). " ". (2*M_PI*sqrt($s/M_PI)). " ". (2*sqrt($s/M_PI)); 

}
*/


/*
// case 15
$n=14; $m=4;
switch($n)
{
    case 6:
        switch($m)
        {
            case 1: echo "olti gisht";break;
            case 2: echo "olti olma";break;
            case 3: echo "olti chilak";break;
            case 4: echo "olti qarga";break;
        } break;
    case 7:
            switch($m)
            {
                case 1: echo "yetti gisht";break;
                case 2: echo "yetti olma";break;
                case 3: echo "yetti chilak";break;
                case 4: echo "yetti qarga";break;
            } break;
    case 8:
                switch($m)
                {
                    case 1: echo "sakkiz gisht";break;
                    case 2: echo "sakkiz olma";break;
                    case 3: echo "sakkiz chilak";break;
                    case 4: echo "sakkiz qarga";break;
                } break;
    case 9:
                    switch($m)
                    {
                        case 1: echo "toqqiz gisht";break;
                        case 2: echo "toqqiz olma";break;
                        case 3: echo "toqqiz chilak";break;
                        case 4: echo "toqqiz qarga";break;
                    } break;
    case 10:
                        switch($m)
                        {
                            case 1: echo "on gisht";break;
                            case 2: echo "on olma";break;
                            case 3: echo "on chilak";break;
                            case 4: echo "on qarga";break;
                        } break;
    case 11:
                            switch($m)
                            {
                                case 1: echo "valet gisht";break;
                                case 2: echo "valet olma";break;
                                case 3: echo "valet chilak";break;
                                case 4: echo "valet qarga";break;
                            } break;
    case 12:
                                switch($m)
                                {
                                    case 1: echo "dama gisht";break;
                                    case 2: echo "dama olma";break;
                                    case 3: echo "dama chilak";break;
                                    case 4: echo "dama qarga";break;
                                } break;
      case 13:
                                    switch($m)
                                    {
                                        case 1: echo "qirol gisht";break;
                                        case 2: echo "qirol olma";break;
                                        case 3: echo "qirol chilak";break;
                                        case 4: echo "qirol qarga";break;
                                    } break;
    case 14:
                                        switch($m)
                                        {
                                            case 1: echo "tuz gisht";break;
                                            case 2: echo "tuz olma";break;
                                            case 3: echo "tuz chilak";break;
                                            case 4: echo "tuz qarga";break;
                                        } break;
}
*/

/*
// case 16
function func($m)
{
     switch($m)
    {
        case 0: return " ";
        case 1: return " bir";
        case 2: return " ikki";
        case 3: return " uch";
        case 4: return " tort";
        case 5: return " besh";
        case 6: return " olti";
        case 7: return " yetti";
        case 8: return " sakkiz";
        case 9: return " toqqiz";
    }
    
}
    $n=31;  $m=$n%10;  $n=floor($n/10);
    switch($n)
    {
        case 2: echo "yigirma". func($m);break;
        case 3: echo "ottiz". func($m);break;
        case 4: echo "qirq". func($m);break;
        case 5: echo "ellik". func($m);break;
        case 6: echo "oltmish". func($m);break;
    }
*/

/*
// case 19
function func($m)
{
     switch($m)
    {
        case 0: return " sichqon";
        case 1: return " sigir";
        case 2: return " yolbars";
        case 3: return " quyon";
        case 4: return " ajdar";
        case 5: return " ilon";
        case 6: return " ot";
        case 7: return " qoy";
        case 8: return " maymun";
        case 9: return " tovuq";
        case 10: return " it";
        case 11: return " tongiz";
    }
    
}
    $a=1984;  $m=($a-1984)%12;  $n=($a-1984)%5+1;
    switch($n)
    {
        case 1: echo "yashil". func($m);break;
        case 2: echo "qizil". func($m);break;
        case 3: echo "sariq". func($m);break;
        case 4: echo "oq". func($m);break;
        case 5: echo "qora". func($m);break;
    }
*/

    // case 20
    function getBurj($day, $month) {
        switch ($month) {
            case 1:
                if ($day >= 20 && $day <= 31) {
                    return "Qovg'a";
                } elseif ($day >= 1 && $day <= 18) {
                    return "Echki";
                }
                break;
            case 2:
                if ($day >= 19 && $day <= 29) {
                    return "Baliq";
                } elseif ($day >= 1 && $day <= 18) {
                    return "Qovg'a";
                }
                break;
            case 3:
                if ($day >= 21 && $day <= 31) {
                    return "Qo'y";
                } elseif ($day >= 1 && $day <= 20) {
                    return "Baliq";
                }
                break;
            case 4:
                if ($day >= 20 && $day <= 30) {
                    return "Buzoq";
                } elseif ($day >= 1 && $day <= 19) {
                    return "Qo'y";
                }
                break;
            case 5:
                if ($day >= 21 && $day <= 31) {
                    return "Egizaklar";
                } elseif ($day >= 1 && $day <= 20) {
                    return "Buzoq";
                }
                break;
            case 6:
                if ($day >= 22 && $day <= 30) {
                    return "Qisqichbaqa";
                } elseif ($day >= 1 && $day <= 21) {
                    return "Egizaklar";
                }
                break;
            case 7:
                if ($day >= 23 && $day <= 31) {
                    return "Arslon";
                } elseif ($day >= 1 && $day <= 22) {
                    return "Qisqichbaqa";
                }
                break;
            case 8:
                if ($day >= 23 && $day <= 31) {
                    return "Parizod";
                } elseif ($day >= 1 && $day <= 22) {
                    return "Arslon";
                }
                break;
            case 9:
                if ($day >= 23 && $day <= 30) {
                    return "Tarozi";
                } elseif ($day >= 1 && $day <= 22) {
                    return "Parizod";
                }
                break;
            case 10:
                if ($day >= 23 && $day <= 31) {
                    return "Chayon";
                } elseif ($day >= 1 && $day <= 22) {
                    return "Tarozi";
                }
                break;
            case 11:
                if ($day >= 23 && $day <= 30) {
                    return "Oqotar";
                } elseif ($day >= 1 && $day <= 22) {
                    return "Chayon";
                }
                break;
            case 12:
                if ($day >= 22 && $day <= 31) {
                    return "Echki";
                } elseif ($day >= 1 && $day <= 21) {
                    return "Oqotar";
                }
                break;
        }
        
        return "Noto'g'ri sana";
    }
    
    $kun = 12;
    $oy = 1;
    
    $burj = getBurj($kun, $oy);
    echo "Sizning sana bo'yicha burjingiz: " . $burj;
    
?>
