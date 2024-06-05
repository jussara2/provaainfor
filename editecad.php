<?php
include ("conexao.php");
$id=$_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha= password_hash($_POST['senha'],PASSWORD_DEFAULT);
 

$sql =