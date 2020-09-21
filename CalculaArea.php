<?php
    function calculaArea ($num)
    {
        $area = 1;
        $numeroAdicional = 4;
        if ($num < 1){
            return 'Valor invalido';
        } elseif ($num == 1){
            return $area;
        } else {
            for($multiplicador = 1; $multiplicador < $num; $multiplicador++){
                $numeroAdicional = $numeroAdicional * $multiplicador;
                $area += $numeroAdicional;
            }
            return $area;
        }
    }
?>

