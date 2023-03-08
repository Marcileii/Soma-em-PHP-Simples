<?php

    echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';

    if (isset($_GET['x'])) {   #verificação se existe o get de x

        $valor1 = $_GET['x']; #setando que o valor é do formulario abaixo
        $valor2 = $_GET['y'];
    
        echo "O valor de x é " . $valor1;
        echo "<br>A soma de x + y é " . ($valor1 + $valor2);   

    }else{
        echo " <br>Informe o valor de x e y abaixo";
    }

?>

<form action="">
    
<input type="text" name ="x">
<input type="text" name = "y">
<input type="submit">

</form>

