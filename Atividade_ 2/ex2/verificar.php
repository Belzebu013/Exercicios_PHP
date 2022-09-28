<?php
    $num_1 = $_POST['um'];
    $num_2 = $_POST['dois'];
    function loop($num1, $num2){
        for($i=$num1; $i<=$num2; $i=$i+2){
            echo $i .'  ';
        };
    }
    if($num_1<$num_2){
        loop($num_1, $num_2);
    }else{
        echo "O primeiro numero precisa ser maior que o segundo";
    }
?>
<br/>
<button><a href="ex2.php" style="text-decoration: none;">Voltar</a></button>