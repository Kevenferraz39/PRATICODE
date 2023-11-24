<?php 
    session_start();
        
    if (!isset($_SESSION['email']) and !isset($_SESSION['senha'])) {
        header('Location: menu.php');
    }
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações da conta</title>
</head>
<body>
    
</body>
</html>