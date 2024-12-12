<?php

class Produto
{

    public function ListarProdutos($limite = '')
    {
        $conn = new PDO('mysql:host=localhost:3300;dbname=db_police', 'root', '');

        if ($limite != '') {
            $aux = ' ORDER BY RAND() LIMIT ' . $limite;
        } else {
            $aux = '';
        }

        $query = 'SELECT * FROM tb_produto' . $aux;

        $resultado = $conn->query($query)->fetchAll();
        // unset()
        return $resultado;
    }

    public function Consultar1Produto($idConsulta) {
        $conn = new PDO('mysql:host=localhost:3300;dbname=db_police', 'root', '');

        $query = 'SELECT * FROM tb_produto WHERE id = ' . $idConsulta;

        $resultado = $conn->query($query)->fetch();

        return $resultado;
    }
}
