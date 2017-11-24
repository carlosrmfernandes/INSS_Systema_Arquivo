<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
$_SESSION['sel'] = $_POST['sel'];
$sel = $_POST['sel'];
include './webroot/seteget.php';
$a = new seteget();
$pdo = $a->conexao();
?>
<html>
    <head>
        <link rel="stylesheet" href="webroot/Css/estilo1.css">

        <meta charset="UTF-8">
        <title>Regitro de Ofício</title>
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
    <body >
        
        <?php if ($sel == 1) { ?>
            <h1><p  align="center"> Consulta "Despacho Autorizados" </p></h1>
        <?php } else  ?>
        <?php if ($sel == 2) { ?>
            <h1><p  align="center"> Consulta "Contrato Termo Adetivo" </p></h1>
        <?php } else  ?> <?php if ($sel == 3) { ?>
            <h1><p  align="center"> Consulta "PES PCM" </p></h1>
        <?php } ?>

        <h4><p id="incioo"><a href="index.php">INÍCIO</a></p></h4>
        <div id="divi2">
            <table align="center" border="" width="750px">
                <tr>
                    <td width="85px">
                        <?php
                        echo "Numero";
                        ?>
                    </td>
                    <td width="150px">
                        <?php
                        echo "Titulo";
                        ?>
                    </td>
                    <td width="255px">
                        <?php
                        echo "Descrição";
                        ?>
                    </td>
                    <td width="205px">
                        <?php
                        echo "Anexo";
                        ?>
                    </td>
                </tr>
            </table>
            <br/>
            <?php
            if ($sel == 1) {
                $consulta = $pdo->query("select  id,titulo,descricao,anexo from despacho where 1");

                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <table align="center" border="" width="750px">
                        <tr>
                            <td width="85px">
                                <?php
                                echo "{$linha['id']}";
                                ?>
                            </td>
                            <td width="150px">
                                <?php
                                echo "{$linha['titulo']}";
                                ?>
                            </td>
                            <td width="255px">
                                <?php
                                echo "{$linha['descricao']}";
                                ?>
                            </td>
                            <td width="205px">
                                <?php
                                $an = $linha['anexo'];
                                $a = substr($an, 13, 50);
                                ?>
                                <a href="Documentos/<?php echo $a ?>"download><?php echo $a ?></a>
                            </td>
                        </tr>
                    </table>
                    <?php
                }
            }
            ?>
            <?php
            if ($sel == 2) {
                $consulta = $pdo->query("select id,titulo,descricao,anexo from contrato where 1");

                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <table align="center" border="1" width="750px">
                        <tr>
                            <td width="85px">
                                <?php
                                echo "{$linha['id']}";
                                ?>
                            </td>
                            <td width="150px">
                                <?php
                                echo "{$linha['titulo']}";
                                ?>
                            </td>
                            <td width="255px">
                                <?php
                                echo "{$linha['descricao']}";
                                ?>
                            </td>
                            <td width="205px">
                                <?php
                                $an = $linha['anexo'];
                                $a = substr($an, 13, 50);
                                ?>
                                <a href="Documentos/<?php echo $a ?>"download><?php echo $a ?></a>
                            </td>
                        </tr>
                    </table>
                    <?php
                }
            }
            ?>
            <?php
            if ($sel == 3) {
                $consulta = $pdo->query("select id,titulo,descricao,anexo from pes_pcm where 1");
                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <table align="center" border="" width="750px">
                        <tr>
                            <td width="85px">
                                <?php
                                echo "{$linha['id']}";
                                ?>
                            </td>
                            <td width="150px">
                                <?php
                                echo "{$linha['titulo']}";
                                ?>
                            </td>
                            <td width="255px">
                                <?php
                                echo "{$linha['descricao']}";
                                ?>
                            </td>
                            <td width="205px">
                                <?php
                                $an = $linha['anexo'];
                                $a = substr($an, 13, 50);
                                ?>
                                <a href="Documentos/<?php echo $a ?>"download><?php echo $a ?></a>
                            </td>
                        </tr>
                    </table>
                    <?php
                }
            }
            ?>
        </div>
    </body>
</html>
