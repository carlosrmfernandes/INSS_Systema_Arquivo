<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of inseri
 *
 * @author Inss
 */
include './webroot/seteget.php';

class inseri extends seteget {

    protected $sqlinseri = "insert into despacho (titulo,descricao,anexo) values ('%s','%s','%s')";
    public $sqlinseri1 = "insert into contrato (titulo,descricao,anexo) values ('%s','%s','%s')";
    protected $sqlinseri2 = "insert into pes_pcm (titulo,descricao,anexo) values ('%s','%s','%s')";

    function inserii() {

        $sql = sprintf($this->sqlinseri, $this->getTitulo(), $this->getDesricao(), $this->getAnexo());
        return $this->executa($sql);
    }

    function inseri1() {
        $sql = sprintf($this->sqlinseri1, $this->getTitulo(), $this->getDesricao(), $this->getAnexo());
        return $this->executa($sql);
    }

    function inseri2() {
        $sql = sprintf($this->sqlinseri2, $this->getTitulo(), $this->getDesricao(), $this->getAnexo());
        return $this->executa($sql);
    }

}
