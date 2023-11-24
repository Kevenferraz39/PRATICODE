<?php 

    if ( isset($_POST['resposta']) && isset($_POST['exercicio']) && isset($_POST['aluno'])) {

        $id = $_POST['id'];
        $resposta =  $_POST['resposta'];
        $exercicio =  $_POST['exercicio'];
        $aluno =  $_POST['aluno'];

        include_once('../../../model/ClassCrud.php');
        $sql = new Crud();

        $sql->editarItens('resposta', "resposta = '$resposta', idExercicio = $exercicio, idAluno = $aluno", 'idResposta', $id);
    }
?>