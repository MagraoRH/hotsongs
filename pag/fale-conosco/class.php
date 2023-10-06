<?php

class Faleconosco {
    private $nome;
    private $cpf;
    private $cidade;
    private $estado;
    private $mensagem;
    public function getNome(){
        return $this->nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getMensagem(){
        return $this->mensagem;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function setCpf($cpf){
        $this->cpf=$cpf;
    }
    public function setCidade($cidade){
        $this->cidade=$cidade;
    }
    public function setEstado($estado){
        $this->estado=$estado;
    }
    public function setMensagem($mensagem){
        $this->mensagem=$mensagem;
    }
}
?>