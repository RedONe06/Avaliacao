<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="TesteDeNumero.php" method="post">
        <input type="text" name="valor">
        <button type="submit" name="enviar">Avaliar</button>
    </form>
    <?php
if(isset($_POST['enviar'])){
    $valor= $_POST["valor"];
    if($valor<0){
        echo "Negativo";
    } else if ($valor == 0){
        echo "Igual a 0";
    } else {
        echo "Positivo";
    }
}
?>
</body>
</html>
