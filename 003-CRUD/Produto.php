<?php
    class Produto
    {
        private $conn;

        public function __construct()
        {
            try{
                $this->conn = new PDO('mysql:host=localhost; dbname=bd_adega', 'root', '');
            }catch(Exception $e){
                echo $e->getMessage();
                exit();
            }
            
        }

        public function create(string $nome): int{
            $sql = 'INSERT INTO bebidas(nome) VALUES(?)';

            $prepare = $this->conn->prepare($sql);
            $prepare->bindParam(1, $nome);
            $prepare->execute();
            return $prepare->rowCount();
        }

        public function read(): array{
            $sql = 'SELECT * FROM bebidas';
            $produtos = [];

            foreach ($this->conn->query($sql) as $value) {
                $produtos[] = $value;
            }
            return $produtos;
        }

        public function update(string $preco, int $id): int{
            $sql = 'UPDATE bebidas SET preco = ? WHERE id = ?';

            $prepare = $this->conn->prepare($sql);
            $prepare->bindParam(1, $preco);
            $prepare->bindParam(2, $id);
            $prepare->execute();
            return $prepare->rowCount();
        }

        public function delete(int $id): int{
            $sql = 'DELETE FROM bebidas WHERE id = ?';

            $prepare = $this->conn->prepare($sql);
            $prepare->bindParam(1, $id);
            $prepare->execute();
            return $prepare->rowCount();
        }
    }

    $produto = new Produto();
    $produto->read();
?>