<?php 
    $primeiraNota = readline("Digite a primeira nota: ");
    $segundaNota = readline("Digite a segunda nota: ");
    
    function mediaAritmetica ($primeiraNota, $segundaNota){
        $mediaAritmetica = ($primeiraNota + $segundaNota)/2;
        return $mediaAritmetica;
    }

    if (mediaAritmetica($primeiraNota, $segundaNota) >= 6) {
        echo "Você está aprovado passando com uma média de " . mediaAritmetica($primeiraNota, $segundaNota);
    } else {
        echo "Você não passou de ano, pois sua média foi de " . mediaAritmetica($primeiraNota, $segundaNota);
    }
?>