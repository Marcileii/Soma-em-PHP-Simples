<?php
$valor1 = $_GET['v_x'];
$valor2 = $_GET['v_y'];
echo "O valor de x é " 
?>

<form action="">
    
<input type="text" nome ="v_x">
<input type="text" nome = "v_y">
<input type="submit">

</form>

<?php
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
$x ="10";
$y = "20";

echo "O valor de x é $x <br>";
echo "O valor de y é $y <br>";
echo "<br> o valor da soma X + Y é = " . ($x + $y);
echo "<br>o valor da subtração de  y - x é = " . ($y - $x);
echo "<br>o valor da multiplicação de x e  y =" . $x * $y;
echo "<br> o valor da divisão de x e y é = " . $y / $x;






?>



