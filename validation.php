<?php

function valida_cedula($ced)
{
    $c            = str_replace("-", "", $ced);
    $cedula       = substr($c, 0,  - 1);
    $verificador  = substr($c, - 1, 1);
    $suma         = 0;
    $cedulaValida = 0;

    if (strlen($ced) < 11) {
        return false;
    }
   
    for ($i = 0; $i < strlen($cedula); $i++) {

        $mod = "";

        if (($i % 2) == 0) {
            $mod = 1;
        } else {
            $mod = 2;
        }

        $res = substr($cedula, $i, 1) * $mod;

        if ($res > 9) {
            $res = (string) $res;
            $uno = substr($res, 0, 1);
            $dos = substr($res, 1, 1);
          
            $res = $uno + $dos;
        }

        $suma += $res;

    }
    
    $el_numero = (10 - ($suma % 10)) % 10;

    if ($el_numero == $verificador && substr($cedula, 0, 3) != "000") {
        $cedulaValida = 1;
    } else {
        $cedulaValida = 0;
    }
    
    return $cedulaValida;
}

echo valida_cedula('011-0021069-8');
?>