<?php

    require_once "Funcionario.php";

    class Gerente extends Funcionario {

        public function calcularBonus() {
            return $this->salario * 0.15;
        }
    }

?>