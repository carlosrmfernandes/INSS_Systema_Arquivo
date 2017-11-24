<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of seteget
 *
 * @author Inss
 */
//include './bd/db.php';
include $_SERVER['DOCUMENT_ROOT'] . "/INSS/bd/db.php";

class seteget extends db {

    protected $titulo;
    protected $desricao;
    protected $anexo;

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDesricao() {
        return $this->desricao;
    }

    public function getAnexo() {
        return $this->anexo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setDesricao($desricao) {
        $this->desricao = $desricao;
    }

    public function setAnexo($anexo) {
        $this->anexo = $anexo;
    }

}
