<?php


$nomeCliente = $_GET["nome"];
$nomeCliente = $_GET["cpf"];
$nomeCliente = $_GET["telefone"];
$nomeCliente = $_GET["email"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Cliente</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nome Completo</td>
            <td><?php echo $nomeCliente; ?></td>
        </tr>
    </table>
</body>
</html>
