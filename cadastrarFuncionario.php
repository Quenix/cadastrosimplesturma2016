<?php
$email_funcionario   = $_POST['email_funcionario'];
$nome_funcionario    = $_POST['nome_funcionario'];
$cargo_funcionario   = $_POST['cargo_funcionario'];
$salario_funcionario = $_POST['salario_funcionario'];

$conexao = mysqli_connect('localhost', 'root', '', 'cadastrofuncionario');

$query = "";


