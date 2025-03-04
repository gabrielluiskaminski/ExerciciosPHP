<?php 
    for ($i = 50 ; $i <= 70; $i++){
        if ($i % 2 == 0) {
            $num[] = $i;
        }
    }
    
    $soma = array_sum($num);
    $contador = count($num);
    $media = $soma / $contador;

    echo "A soma é $soma e a média é $media";
?>