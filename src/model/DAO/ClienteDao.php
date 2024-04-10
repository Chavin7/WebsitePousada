<?php 

require __DIR__ . '/../class/Cliente.php';

class ClienteDao{
    private $pdo;

    public function __construct(PDO $drive){
        $this->pdo = $drive;
    }
    
    public function cadastrar(Cliente $c){
        $sql = $this->pdo->prepare('INSERT INTO cliente (nome_cliente, genero_cliente, email_cliente, senha_cliente) VALUE (:nome, :genero, :email, :senha)');
        $sql->bindValue(':nome', $c->getNome());
        $sql->bindValue(':genero', $c->getGenero());
        $sql->bindValue(':email', $c->getEmail());
        $sql->bindValue(':senha', $c->getSenha());
        $sql->execute();
        
        $c->setID($this->pdo->lastInsertId());

        return true;
    }

    public function logar($email, $senha){
        $sql = $this->pdo->prepare('SELECT * FROM cliente WHERE email_cliente = :email AND senha_cliente = :senha');
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();

            $_SESSION['cliente_logado'] = $dados['id'];
            return true;
        } else {
            return false;
        }
    }

    public function deslogar(){
        session_destroy();
        header('Location: ../../../index.php');
        exit;
    }

    public function setarID($id){
        $sql = $this->pdo->prepare('SELECT * FROM cliente WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();
    
        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
    
            $c = new Cliente();
            $c->setID($dados['id']);
            $c->setNome($dados['nome_cliente']);
            $c->setGenero($dados['genero_cliente']);
            $c->setEmail($dados['email_cliente']);
            $c->setSenha($dados['senha_cliente']);
    
            return $c;
        } else {
            return false;
        }
    }

    public function atualizar(Cliente $c){
        $sql = $this->pdo->prepare('UPDATE cliente SET nome_cliente = :nome, email_cliente = :email, senha_cliente = :senha');
        $sql->bindValue(':nome', $c->getNome());
        $sql->bindValue(':email', $c->getEmail());
        $sql->bindValue(':senha', $c->getSenha());
        $sql->execute();

        return true;
    }
    
}


?>