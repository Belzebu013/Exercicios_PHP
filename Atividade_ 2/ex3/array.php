<?php
    $clientes = 'Eduardo, Daniel, Geraldo, Carla, César, Thiago, Rodrigo, Isabele, Andreia, Emanuele';
    $frase = "Olá nome, seja bem vindo";
    $clientes_vetor = explode(',', $clientes);
    for($i=0; $i<count($clientes_vetor); $i++){
        $mudar = str_replace('nome', $clientes_vetor[$i], $frase);
        echo $mudar;
        echo '<br/>';
    }
    


?>