<?php
function CzyPierwsza($a)
{
    

    for($i = 2; $i < $a; $i++)
    {
        if($a % $i == 0)
        {
            return false;
        }
    }

    return true;
}



function Euklides($a, $b)
{
    while($b != 0)
    {
        $reszta = $a % $b;
        $a = $b;
        $b = $reszta;
    }

    return $a;
}

function Delta($a, $b, $c)
{
    return ($b * $b) - (4 * $a * $c);
}


function czyPalindrom($tekst)
{
    if(trim($tekst) == trim(strrev($tekst)))
        {
            return true;
        }
        else
        {
            return false;
        }
}


function czyAnagram($tekst1, $tekst2)
{
    $tekst1_tab = str_split(trim($tekst1));

    $tekst2_tab = str_split(trim($tekst2));

    sort($tekst1_tab);

    sort($tekst2_tab);


    if($tekst1_tab == $tekst2_tab)
    {
        return true;
    }
    else
    {
        return false;
    }
}

?>