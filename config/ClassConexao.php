<?php
    //definindo constantes com informações da conexão com banco
    define('HOST', 'localhost');
    define('USER', 'root');
    define('SENHA', '');
    define('DATABASE', 'bdpraticode');


    //criando uma classe de conexão
    class Conexao {
        protected $conexao;

        //método construtor que chama o método de conexão com o banco
        public function __construct() {
            $this->conectarBanco();
        }

        //método que faz a conexão com o banco
        function conectarBanco() {
            try {
                $this->conexao = new mysqli(HOST, USER, SENHA, DATABASE);
                return $this->conexao;
            }
            catch (Exception $e) {
                echo 'ERRO! '.$e->getMessage();
                die();
            }
        }

        //Função utilizando PDO:
       /* function conectarBanco() {
            try {
                $this->conexao = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, SENHA);
            }
            catch (PDOException $e) {
                echo 'ERRO! '.$e->getMessage();
                die();
            }
        } */
    }
