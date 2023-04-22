<?php 
include_once ('config.php');


if(isset($_POST['update']))
{
    $idvenda = $_POST['idvenda'];
    $codcliente = $_POST['codcliente'];
    $nome_cliente = $_POST['nome_cliente'];
    $uf = $_POST['uf'];
    $codconsultor = $_POST['codconsultor'];
    $valor=$_POST['valor'];
    $dt =$_POST['dt'];

            $sqlUpdate = "UPDATE formulario SET
            nome_cliente='$nome_cliente' ,
            codcliente= '$codcliente',
            uf = '$uf',
            codconsultor  = '$codconsultor',
            valor= '$valor',
            dt = '$dt' ,
            codcliente = '$codcliente'  where  idvenda = '$idvenda ' ";
                
            
        $result = $conexao->query($sqlUpdate);


}
header('Location: index.php')
?>