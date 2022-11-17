<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Radio.php" method="POST">
        <input type="number" name="numero1">
        <input type="number" name="numero2">
        <br>
        <label for="somar">Somar</label>
        <input type="radio" name="radio" value="somar">

        <label for="subtrair">Subtrair</label>
        <input type="radio" name="radio" value="subtrair">

        <label for="multiplicar">Multiplicar</label>
        <input type="radio" name="radio" value="multiplicar">

        <label for="dividir">Dividir</label>
        <input type="radio" name="radio" value="dividir">
        <br>
        <br>
        <button type="submit" style="width: 350px;" name="operar">Operar</button>
    </form>
</body>
</html>
<?php
if(isset($_POST["operar"])){
    $option = $_POST["radio"];
    $n1 = $_POST["numero1"];
    $n2 = $_POST["numero2"];
    $resultado = 0;

    if($option == "somar"){
        $resultado = $n1 + $n2;
    } elseif($option == "subtrair"){
        $resultado = $n1 - $n2;
    } elseif($option == "multiplicar"){
        $resultado = $n1 * $n2;
    } else {
        $resultado = $n1 / $n2;
    }
    echo "$resultado";
}
?>