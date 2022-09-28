
<?php
    $salario = 1500;
    if($salario<=1000){
        $ajuste_salario = $salario * 0.5;
        $salario = $ajuste_salario + $salario;
        echo $salario;
    }else{
        $ajuste_salario = $salario * 0.3;
        $salario = $ajuste_salario + $salario;
        echo $salario; 
    }
?>

<?php
$salario = 1500;
echo $salario < 1000 ? $salario = ($salario * 0.5) + $salario : $salario = ($salario * 0.3) + $salario;
?>

</br></br>
<hr></hr>

<?php
    $altura = 1.70;
    $sexo = "Masculino";
    switch($sexo){
    case($sexo == "Masculino"):
        $pesoIdeal = (72.7*$altura)-58;
        echo $pesoIdeal;
        break;
    case($sexo == "Feminino"):
        $pesoIdeal = (62.1*$altura)-44.7;
        echo $pesoIdeal;
        break;
    }
?>

</br></br>
<hr></hr>

<?php
    $nota_1 = 7.0;
    $nota_2 = 8.0;
    $nota_3 = 4.0;
    $nota_4 = 7.0;
    $media = ($nota_1 + $nota_2 + $nota_3 + $nota_4) / 4;
    switch($media){
    case($media >= 7.0):
        echo "Aprovado";
        break;
    
    case($media > 4.0):
        echo "recuperação";
        break;
    case($media < 4.0):
        echo "reprovado";
        break;
       
    }
?>

</br></br>
<hr></hr>

<?php
    $operação = 3;
    switch($operação){
    case($operação == 1):
        echo "Saldo Conta Corrente";
        break;
    case($operação == 2):
        echo "Sacar Dinheiro";
        break;
    case($operação == 3):
        echo "Fazer Empréstimo";
        break;
    case($operação == 4):
        echo "Sair";
        break;
    default:
        echo "Opção Invalida";
    }
?>




