<?php 
    include_once('../../controller/login/verificarSessao.php');
    // include_once('../../config/loginAdm.php');

    // if (isset($_SESSION['email']) && isset($_SESSION['senha'])) {
    //     if ($_SESSION['email'] != "codeprati@gmail.com" && $_SESSION['senha'] != "Praticode@2023") {
    //         header("Location: ../menu.php");
    //    }
    // } else {
    //     header("Location: ../menu.php");
    // }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="../_css/Menu.css">
    <link rel="stylesheet" href="../_css/footer.css"> 
    <link rel="stylesheet" href="../_css/Login.css">
    <link rel="stylesheet" href="../_css/crud.css">
    <link rel="stylesheet" href="../_css/dropdownConta.css">
    <link rel="stylesheet" href="../_css/modalConta.css">
    <!-- fim-css -->
    <link rel="shortcut icon" href="../_img/logo.png" type="image/x-icon">
    <title>CRUD</title> 
</head> 
<body>
     <!-- Menu -->
     <header class="Home">     
        <a href="Menu.html">
        <img src="../_img/Logo-SemFundo.png" alt="foto" id="logo"/></a>
            <div class="link">
                <li class="linke"><b><a href="../menu.php">Home</a></b></li>
                <li class="linke"><b><a href="faleConosco.php">Fale conosco</a></b></li>
                <li class="linke"><b><a href="desenvolvedores.php">Desenvolvedores</a></b></li>
                <div class="dropdown">
                    <button class="dropbtn" onclick="abrirDropdown()">Exercicios</button>
                    <div class="dropdown-content" id="myDropdown">
                        <a href="../exercicios.php"><b>Exercicios</b></a>
                        <a href="../perguntashtml.php"><b>HTML</b></a>
                        <a href="../perguntascss.php"><b>CSS</b></a>
                    </div> 
                </div>
                <li class="focus"><b><a href="../../view/crud/">CRUD</a></b></li>
                <div class="dropdownConta">
                    <button class="btnConta" onclick="abrirDropdownConta()">Conta</button>
                        <div class="dropdown-conta-content" id="dropdownConta">
                            <div class="btns">
                                <a href="../controller/login/sair.php" class="btn-sair">Sair</a>
                                <button class="btn-excluir" id="abrirModalbtn">Excluir conta</button>
                            </div>
                        </div>
                </div>
            </div>
            </div>
    </header>
    <!-- fim do Menu -->
    <!-- conteudo da pagina -->
    <div class="modal-conta" id="modal-conta">
        <div class="modal-box">
            <div class="conteudo" id="modal-conteudo">
                <div class="texto-modal">
                    <h2>Deseja mesmo excluir a sua conta?</h2>
                    <p>Esta é uma ação irreversível e todos os seus dados e progresso serão perdidos.</p>
                </div>
                <div class="botoes-modal">
                    <button class="btn-can" id="fecharModalbtn">Cancelar</button>
                    <a href="../controller/excluirConta.php" class="btn-exc" id="btnExc">Excluir</a>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
<div class="content">
    <center>
        <div class="conteudo">
            <div class="atividade">
                <br><br>
                <center>
                    <img src="../_img/aluno-removebg-preview.png" alt="imagem">
                </center>
                 <br>
                <a href="./aluno/index.php">Aluno</a>
            </div> 
            <div class="atividade">
                <br><br>
                <center>
                    <img src="../_img/lista-removebg-preview (1).png" alt="imagem">
                </center>
               <br>
                <a href="./lista/index.php">Lista</a>
            </div>
            <div class="atividade">
                <br><br>
                <center>
                    <img src="../_img/exercicio-removebg-preview.png" alt="imagem">
                </center>
               <br>
                <a href="./exercicio/index.php">Exercicio</a>
            </div>
            <div class="atividade">
                <br><br>
                <center>
                    <img src="../_img/resposta-removebg-preview.png" alt="imagem">
                </center>
               <br>
                 <a href="./resposta/index.php">Resposta</a>
            </div>
        </div>
    </center>
      
</div>

    <script src="../JS/dropdown.js"></script>
    <script src="../JS/dropdownConta.js"></script>
    <script src="../JS/modalConta.js"></script>
</body>
</html>
