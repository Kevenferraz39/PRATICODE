<?php 
  session_start();

  if (isset($_POST['id']) && isset($_POST['resposta'])) {

    $idExercicio = $_POST['id']; 
    $resposta = $_POST['resposta'];
    $idAluno = $_SESSION['idAluno'];

    include_once('../../model/ClassCrud.php');
    $sql = new Crud();
    $sql->inserirBD('resposta', 'resposta, idAluno, idExercicio', "'$resposta', $idAluno, $idExercicio");
    $sql->consultarItem('resposta', 'exercicio', 'idExercicio', $idExercicio);
    $resultado = mysqli_fetch_assoc($sql->getResultado());

    if ($resposta == $resultado['resposta']) {
      $sql->consultarItem('pontos', 'aluno', 'idAluno', $idAluno);
      $resultado = mysqli_fetch_assoc($sql->getResultado());
      $pontos = $resultado['pontos'];
      $pontos += 10;

      $sql->atualizarBD('aluno', 'pontos', $pontos, 'idAluno', $idAluno);

      header("Location: ../../view/respostaCorreta.php");
    } else {
      header("Location: ../../view/respostaIncorreta.php");
    }
  }
?>