<?php

class Produto
{

    public function ListarProdutos() {
        
        $conn = new PDO('mysql:host=localhost:3300;dbname=db_police', 'root' , '');

        $query = 'SELECT * FROM tb_produto ORDER BY RAND() LIMIT 8';

        $resultado = $conn->query($query)->fetchAll();
        // unset()
        return $resultado;

    }
}
