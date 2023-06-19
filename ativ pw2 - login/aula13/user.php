<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if ((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
    header('location:index.php');
}

$logged = $_SESSION['username'];
?>
<body>
    <table width="800" height="748" border="1">
        <tr>
            <td height="90" colspan="2" bgcolor="#CCCCCC">SISTEMA WEB TESTE
                <?php
                echo "Bem vindo, $logged";
                ?>
            </td>
        </tr>
        <tr>
            <td width="103" height="410" bgcolor="#CCCCCC">MENU AQUI</td>
            <td width="546">CONTEUDO E ICONES AQUI</td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#000000"> </td>
        </tr>
    </table>
</body>
</html>
