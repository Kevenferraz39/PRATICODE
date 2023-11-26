<?php 
    require_once __DIR__ .'../../config/ClassConexao.php';

    class Crud extends Conexao {
        //Atributos
        private $crud;
        private $resultado;

		//TESTE
        //metodos especiais
        public function getResultado() {
            return $this->resultado;
        }

        //Inserção no banco
        public function inserirBD($tabela, $colunas ,$valores) {
            $conexao = $this->conectarBanco();

            $this->crud = "INSERT INTO $tabela($colunas) VALUES ($valores)";
            $this->resultado = mysqli_query($conexao, $this->crud);

            if (mysqli_affected_rows($conexao) == 0 ) {
                echo "Erro no cadastro: " .$conexao->error;
            }
        }

        public function consultarBD($tabela, $colunas) {
            $conexao = $this->conectarBanco();

            $this->crud = "SELECT $colunas FROM $tabela";
            $this->resultado = mysqli_query($conexao, $this->crud);

            if (mysqli_num_rows($this->resultado) == 0) {
                echo "Nenhum dado cadastrado";
            }
        }

        public function consultarItem($colunas, $tabela, $colunaId, $idItem) {
            $conexao = $this->conectarBanco();

            $this->crud = "SELECT $colunas FROM $tabela WHERE $colunaId = $idItem";
            $this->resultado = mysqli_query($conexao, $this->crud);

            if (mysqli_num_rows($this->resultado) == 0) {
                echo "Nenhum dado cadastrado";
            }
        }

        public function consultarItemId($colunas, $tabela, $colunaNome, $item) {
            $conexao = $this->conectarBanco();

            $this->crud = "SELECT $colunas FROM $tabela WHERE $colunaNome = $item";
            $this->resultado = mysqli_query($conexao, $this->crud);

            if (mysqli_num_rows($this->resultado) == 0) {
                echo "Nenhum dado cadastrado";
            }
        }

        public function atualizarBD($tabela, $coluna, $valor, $colunaId, $idItem) {
            $conexao = $this->conectarBanco();

            $this->crud = "UPDATE $tabela SET $coluna = $valor WHERE $colunaId = $idItem";
            $this->resultado = mysqli_query($conexao, $this->crud);

            if (mysqli_affected_rows($conexao) == 0 ) {
                echo "Erro: " .$conexao->error;
            }
        }

        public function editarItens($tabela, $valores, $colunaId, $idItem) {
            $conexao = $this->conectarBanco();

            $this->crud = "UPDATE $tabela SET $valores WHERE $colunaId = $idItem";
            $this->resultado = mysqli_query($conexao, $this->crud);

            if (mysqli_affected_rows($conexao) != 0 ) {
                echo "Item atualizado com sucesso";
            } else {
                echo "Item não atualizado com sucesso";
            }
        }

        public function deletarBD($tabela, $colunaId, $idItem) {
            $conexao = $this->conectarBanco();

            $this->crud = "DELETE FROM $tabela WHERE $colunaId = $idItem";
            $this->resultado = mysqli_query($conexao, $this->crud);

            if (mysqli_affected_rows($conexao) != 0 ) {
                echo "Item excluído com sucesso";
            } else {
                echo "Item não foi excluído";
            }
        }
    }
?>