<?php 
  
  if (isset($_POST['id']) && isset($_POST['resposta'])) {

    $idExercicio = $_POST['id']; 
    $resposta = $_POST['resposta'];

    include_once('../../model/ClassCrud.php');
    $sql = new Crud();
    $sql->consultarItem('resposta', 'exercicio', 'idExercicio', $idExercicio);
    $resultado = mysqli_fetch_assoc($sql->getResultado());

   if ($resposta == $resultado['resposta']) {
    echo "Parabéns! Resposta Correta.";
    
   } else {
    echo "Poxa! Resposta Incorreta.";
   }
  }