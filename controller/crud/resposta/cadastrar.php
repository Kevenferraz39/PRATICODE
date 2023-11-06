<?php 
    include_once('../../../model/ClassCrud.php');

    if (isset($_POST['resposta']) && isset($_POST['exercicio']) && isset($_POST['aluno'])) {

        $resposta = $_POST['resposta'];
        $exercicio = $_POST['exercicio'];
        $aluno = $_POST['aluno'];
    }

    $sql = new Crud();
    $sql->inserirBD('resposta', 'resposta, idExercicio, idAluno', "'$resposta', $exercicio, $aluno");
?>