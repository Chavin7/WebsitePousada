<?php 

class Cliente{
    private $id;
    private $nome;
    private $genero;
    private $email;
    private $senha;

    public function setID($i){
        $this->id = $i;
    }

    public function getiD(){
        return $this->id;
    }

    public function setNome($n){
        $this->nome = $n;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setGenero($g){
        $this->genero = $g;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setEmail($e){
        $this->email = $e;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function getSenha(){
        return $this->senha;
    }
}

?>