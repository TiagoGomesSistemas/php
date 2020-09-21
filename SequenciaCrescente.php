<?php
    function SequenciaCrescente ($sequencia)
    {
        $sequenciaNumerica = rsort ($sequencia);
        $negacao = 0;
        $contador = count($sequencia);
        for($controle = 0; $controle <  $sequencia; $controle ++){
            if($sequenciaNumerica[$controle] == $sequenciaNumerica[$controle +1]){$negacao ++}
        }
        if($negacao > 1){return false;} else {return true}
    }
?>

