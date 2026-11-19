<?php

    abstract class Funcionario {
        
    protected $nome;
    protected $email;
    protected $salario;

        public function __construct($nome, $email, $salario) {
            $this->nome = $nome;
            $this->email = $email;
            $this->salario = $salario;
        }
    
        public function getNome() {
            return $this->nome;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getSalario() {
            return $this->salario;
        }

        abstract public function calcularBonus();
    }

?>