<?php 
    $idade = readline("Digite sua idade: ");
    
    if ($idade < 5) {
        echo "Sem categoria, idade muito nova.";
    } else if ($idade >= 5 && $idade <= 7) {
        echo "Categoria Infantil A";
    } else if ($idade >= 8 && $idade <= 10) {
        echo "Categoria Infantil B";
    } else if ($idade >= 11 && $idade <=13) {
        echo "Categotia Juvenil A";
    } else if ($idade >= 14 && $idade <= 17){
        echo "Categoria Juvenil B";
    } else {
        echo "Categoria Sênior";
    }
?>