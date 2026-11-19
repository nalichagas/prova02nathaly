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
    
    }

?>