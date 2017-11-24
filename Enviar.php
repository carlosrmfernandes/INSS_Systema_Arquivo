<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];

$anexo = "./Documentos/";
$anexofile = $anexo . $_FILES['anexo']['name'];

session_start();
$sele = $_SESSION["sele"];

include $_SERVER['DOCUMENT_ROOT'] . "/INSS/action/inseri.php";

if ($sele == 1) {

    $a = new seteget();
    $pdo = $a->conexao();
    $consulta = $pdo->query("select *from despacho where titulo='$titulo'");

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $ti = "{$linha['titulo']}";
        if ($ti == $titulo) {
            echo"<script type='text/javascript'>alert('Esse Titulo Já se encontra Registrado');window.location='Pes.php';</script>";

            return;
        }
    }
    if (empty($titulo) || empty($descricao) || empty($anexo)) {
        echo"<script type='text/javascript'>alert('Preencher Todos O Campos');window.location='Pes.php';</script>";
        return;
    }
    if (move_uploaded_file($_FILES['anexo']['tmp_name'], $anexofile)) {
        $en = new inseri();
        $en->setTitulo($titulo);
        $en->setDesricao($descricao);
        $en->setAnexo($anexofile);
        $en->inserii();
        header("Location: Pes.php");
    } else {
        echo"<script type='text/javascript'>alert('Erro ao carregar o arquivo');window.location='Pes.php';</script>";
    }
} else if ($sele == 2) {
    $a = new seteget();
    $pdo = $a->conexao();
    $consulta = $pdo->query("select *from contrato where titulo='$titulo'");

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $ti = "{$linha['titulo']}";
        if ($ti == $titulo) {
            echo"<script type='text/javascript'>alert('Esse Titulo Já se encontra Registrado');window.location='Pes.php';</script>";

            return;
        }
    }
    if (empty($titulo) || empty($descricao) || empty($anexo)) {
        echo"<script type='text/javascript'>alert('Preencher Todos O Campos');window.location='Pes.php';</script>";
        return;
    }
    if (move_uploaded_file($_FILES['anexo']['tmp_name'], $anexofile)) {
        $en = new inseri();
        $en->setTitulo($titulo);
        $en->setDesricao($descricao);
        $en->setAnexo($anexofile);
        $en->inseri1();
        header("Location: Pes.php");
    } else {
        echo"<script type='text/javascript'>alert('Erro ao carregar o arquivo');window.location='Pes.php';</script>";
    }
} else if ($sele == 3) {

    $a = new seteget();
    $pdo = $a->conexao();
    $consulta = $pdo->query("select *from pes_pcm where titulo='$titulo'");

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $ti = "{$linha['titulo']}";
        if ($ti == $titulo) {
            echo"<script type='text/javascript'>alert('Esse Titulo Já se encontra Registrado');window.location='Pes.php';</script>";

            return;
        }
    }
    if (empty($titulo) || empty($descricao) || empty($anexo)) {
        echo"<script type='text/javascript'>alert('Preencher Todos O Campos');window.location='Pes.php';</script>";
        return;
    }
    if (move_uploaded_file($_FILES['anexo']['tmp_name'], $anexofile)) {
        $en = new inseri();
        $en->setTitulo($titulo);
        $en->setDesricao($descricao);
        $en->setAnexo($anexofile);
        $en->inseri2();
        header("Location: Pes.php");
    } else {
        echo"<script type='text/javascript'>alert('Erro ao carregar o arquivo');window.location='Pes.php';</script>";
    }
}
