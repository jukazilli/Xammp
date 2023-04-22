
<?php 
if (isset($_POST['submit'] ))
{
    //print_r($_POST['nome']);
    //print_r($_POST['email']);
   // print_r($_POST['valor']);

    include_once('config.php');
    //include_once('$envio_dados_ao_banco'); //testar para ver se funciona
     
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $valor = $_POST['valor'];

    $result = mysqli_query($conexao, "INSERT INTO  formulario (nome,email,valor) VALUES ('$nome','$email','$valor')");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Venda por cliente</title>

    <style>
        body{
            font-size: 12px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: aliceblue;
            background-image: linear-gradient(to right , rgb(14, 12, 12) , rgb(48, 48, 104));
            
        }
        .box{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            width: 20%;
            
            
        }
        
           
        
        .formset{
            padding: 30px;
            border: 1px solid rgba(2, 2, 37, 0.925);
                       }
        legend{
            text-align: center;  
            border: 1px solid rgba(72, 72, 168, 0.411) ;
            padding: 10px;
             }
             .inputBox{
                margin: 10px;
             }
             .inputUser{
                color: aliceblue;
                border: none;

                background: none;
                border-bottom: 0.5px solid rgba(255, 252, 252, 0.89) ;
                outline: none;
                
             }
             #submit{
                color: aliceblue;
                width: 100%;
                height: 30px;
                background-image: linear-gradient(to right , rgb(14, 12, 12) , rgb(48, 48, 104));
                cursor: pointer;
                border: 1px solid;
                border-image-source: linear-gradient(to right,blue , to green);

                
             }

            
    </style>
</head>
<body>
    <div class="box">
        <fieldset class="formset">
            <legend><b>CADASTRO VENDA</b></legend>
            <form action="venda_por_cliente.php" method="POST">
                <div class="inputBox">
                    <label for="nome"  >Nome</label>
                    <input type="text" name="nome"  class="inputUser" id="nome" required>
                </div>
                <div class="inputBox">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="inputUser" id="email" required>
                </div>
                <div class="inputBox">
                    <label for="valor">Valor</label>
                    <input type="currency" name="valor"  class="inputUser" id="valor" required>
                </div>
                <button type="submit" name="submit" id="submit">Enviar</button>
            </form>
        </fieldset>
        
    </div>
</body>
</html>