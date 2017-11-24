<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
$sele = $_SESSION["sele"];
?>
<html>
    <head>
        <title>PES PCM</title>
        <link rel="stylesheet" href="webroot/Css/estilo.css">
        <meta charset="UTF-8">

        <style type="text/css"> 

            a:link 
            { 
                text-decoration:none; 

            } 
            a:hover {
                text-decoration: underline; 
                color: #f00
            }
        </style>
    </head>
    <body link="#000000	" vlink="#000000" alink="#000000">
        <?php
        if ($sele == 1) {
            ?>
            <h1><p id="letra" align="center"> Registro "Despacho Autorizados"</p></h1> 
            <div id="divi1">
                <form   action="Enviar.php" enctype="multipart/form-data"  method="post">
                    <p id="tiulo">Titulo</p>
                    <p id="titulotex"><input type="text" name="titulo"/></p>

                    <p id="descricao">Descrição</p>
                    <p id="descicaotex"><textarea NAME="descricao" ROWS=6 COLS=40></textarea></p>

                    <p id="arquivo"><input name="anexo" size="20" type="file" /></p>
                    <p id="registro"><input type="submit" name="registro" value="Registrar"/></p>

                </form>
                <h4><p id="incio" ><a href="index.php">INÍCIO</a></p></h4>
            </div>
        <?php } else  ?>

        <?php
        if ($sele == 2) {
            ?>
            <h1><p id="letra" align="center"> Registro "Contrato Termo Adetivo"</p></h1> 
            <div id="divi1">
                <form   action="Enviar.php" enctype="multipart/form-data"  method="post">
                    <p id="tiulo">Titulo</p>
                    <p id="titulotex"><input type="text" name="titulo"/></p>

                    <p id="descricao">Descrição</p>
                    <p id="descicaotex"><textarea NAME="descricao" ROWS=6 COLS=40></textarea></p>

                    <p id="arquivo"><input name="anexo" size="20" type="file" /></p>
                    <p id="registro"><input type="submit" name="registro" value="Registrar"/></p>

                </form>
                <h4><p id="incio" ><a href="index.php">INÍCIO</a></p></h4>
            </div>
        <?php } else  ?>
        <?php
        if ($sele == 3) {
            ?>
            <h1><p id="letra" align="center"> Registro "PES PCM"</p></h1> 
            <div id="divi1">
                <form   action="Enviar.php" enctype="multipart/form-data"  method="post">
                    <p id="tiulo">Titulo</p>
                    <p id="titulotex"><input type="text" name="titulo"/></p>

                    <p id="descricao">Descrição</p>
                    <p id="descicaotex"><textarea NAME="descricao" ROWS=6 COLS=40></textarea></p>

                    <p id="arquivo"><input name="anexo" size="20" type="file" /></p>
                    <p id="registro"><input type="submit" name="registro" value="Registrar"/></p>

                </form>
                <h4><p id="incio" ><a href="index.php">INÍCIO</a></p></h4>
            </div>
        <?php } ?>

    </body>
</html>
