<?php 
    session_start();
    include_once __DIR__ . '../../../config/loginAdm.php';

    if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {
        if ($_SESSION['email'] != $emailAdm && $_SESSION['senha'] != $senhaAdm) {
            header('Location: /praticode-website/');
       }
    } else {
        header("Location: /praticode-website/");
    }
?>