<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db
 *
 * @author Inss
 */
class db {

    private $dbname = "sistema_inss";
    private $host = "localhost";
    private $user = "root";
    private $senha = "";

    function conexao() {

        $con = new PDO("mysql: host=$this->host; dbname=$this->dbname", $this->user, $this->senha);
        return $con;
    }

    function executa($sql) {
        $sql = $this->conexao()->prepare($sql);
        $sql->execute();
    }

}
