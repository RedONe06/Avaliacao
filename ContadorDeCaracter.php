<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ContadorDeCaracter.php" method="POST">
        <input type="text" name="palavra">
        <button type="submit" name="gerar">Gerar Números</button>
    </form>
</body>
</html>
<?php
if(isset($_POST["gerar"])){
    $palavra = $_POST["palavra"];
    $nLetras = strlen($palavra);
    $sequencia = "";
    for($i = 1; $i < ($nLetras + 1); $i++){
        $sequencia = " " . $i;
        echo "$sequencia";
    }
}
?>