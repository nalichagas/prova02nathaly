<?php

    require_once "models/Funcionario.php"
    require_once "models/FuncionarioComum.php"
    require_once "models/Gerente.php"

    class funcionarioController {

        public function cadastrar ($conexao) {

            if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $salario = $_POST["salario"];
                $tipo = $_POST["tipo"];

                if (empty($nome) || empty($email) || $salario === "" || empty($tipo)) {

                throw new Exception("Por favor, preencher todos os campos.")
                }

            }
        }
    }

?>