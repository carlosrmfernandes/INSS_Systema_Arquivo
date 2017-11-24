<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="webroot/Css/estilo.css">
        <meta charset="UTF-8">
        <title>Regitro de Ofício</title>


    </head>
    <body link="#696969	" vlink="#696969" alink="#696969">
        
        <p><img  width=150px" height="100px" src="webroot/img/inss.png"/></p>
        <p id="registra">
            <img  width="98px" height="98px" src="webroot/img/pes_pcm.jpg"/>

        <div id="pes">

            <form method="post" action="control/gurdar.php">

                <select title="Selecione" name="sele" >
                    <option value="1">Despacho Autorizado</option>
                    <option value="2">Contrato Termo Adetivo</option>
                    <option value="3">PES PCM 2012</option>
                </select>
                <input type="submit" name="Guardar" value="Registro"/>
            </form>
        </div>



        <p id="consulta">
            <img  width="115px" height="115px" src="webroot/img/desp.gif"/>
        <div id="pes1">

            <form method="post" action="Listar.php">

                <select title="Selecione" name="sel" >
                    <option value="1">Despacho Autorizado</option>
                    <option value="2">Contrato Termo Adetivo</option>
                    <option value="3">PES PCM 2012</option>
                </select>
                <input type="submit" name="consultar" value="Consultar"/>
            </form></div>


        <p id="grupo"> Tec Genius corporation </p> 
    </body>
</html>
