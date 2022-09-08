<?php

class Empregado{
    public $_salario;
    public $_nome;
    public $_sobrenome;
    

    function __construct($_nome, $_sobrenome, $_salario){
        $this->nome = $_nome;
        $this->sobrenome = $_sobrenome;
        $this->salario = $_salario;
    }

    function get_nome(){
        return $this->nome;
    }  

    function get_sobrenome(){
        return $this->sobrenome;
    }
     
    function get_salario(){
        return $this->salario;
    }

}

?>