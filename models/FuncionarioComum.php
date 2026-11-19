<?php

    require_once "Funcionario.php";

    class funcionarioComum extends Funcionario {

        public function calcularBonus() {
            return $this->salario * 0.05;
        }
    }

?>