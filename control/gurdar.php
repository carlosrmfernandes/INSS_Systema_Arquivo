<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$_SESSION["sele"] = $_POST["sele"];
$sele = $_POST["sele"];
session_start();

$_SESSION["sele"] = $sele;
header("Location: ../pes.php");



