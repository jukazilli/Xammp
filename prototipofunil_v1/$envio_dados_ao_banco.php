<?php 
/*if (isset($_POST['submit'] ))
{

    print_r($_POST['nome']);
    print_r($_POST['email']);
    print_r($_POST['valor']);*/

    include_once('config.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $valor = $_POST['valor'];

    $result = mysqli_query($conexao, "INSERT INTO  formulario (nome,email,valor) VALUES ('$nome','$email','$valor')");


?>