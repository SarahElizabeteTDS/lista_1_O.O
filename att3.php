<?php

for ($ano = 1980; $ano <= 2024 ; $ano++) 
{ 
    if ($ano % 4 == 0 && $ano % 100 != 0) 
    {
        print $ano . " é bissexto.\n";
    }elseif ($ano % 4 == 0 && $ano % 400 == 0) {
        print $ano . " é bissexto.\n";
    }else{
        print $ano . " não é bissexto.\n";
    }
}
