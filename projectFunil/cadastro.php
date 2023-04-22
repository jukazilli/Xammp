<?php 
      if (isset($_POST['submit'] )){
        include_once('config.php');
        $codcliente = $_POST['codcliente'];
        $nome_cliente = $_POST['nome_cliente'];
        $uf = $_POST['uf'];
        $result = mysqli_query($conexao, "INSERT INTO cadastro (codcliente,nome_cliente,uf) VALUES
        ('$codcliente','$nome_cliente','$uf')");
    }
    ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="stylesheet" href="/xampp/projectFunil/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO CLIENTE</title>
   
</head>
<body>
<div class="container">
        <header class="header">
            <nav>
                    
                <ul>
                    <li><a href="\xampp\projectFunil\index.php">DASHBOARD</a></li>
                </ul>
                <ul>
                    <li><a href="\xampp\projectFunil\funil.php">FUNIL DE VENDAS</a></li>
                </ul>
                <ul>
                    <li><a href="<\xampp\projectFunil\cadastro.php">CADASTRO DE CLIENTE</a></li>
                </ul>
               
             </nav>
           
        </header>
        <legend class="funil"><b>CADASTRO CLIENTE</b></legend>
        <div class="box2">
        
        <fieldset>
            <legend><b>INFORME OS DADOS DO CLIENTE</b></legend>
            <form action= " <?php echo $_SERVER ['PHP_SELF']?> " method="POST">  

                <div class="inputBox">
                    <label for="codcliente">COD CLIENTE</label>
                    <input type="number" name="codcliente" id="codcliente" class="inputUser" required  > 
                    
                    
                </div>

                <div class="inputBox">
                    <label for="nome_cliente">NOME</label>
                    <input type="text" name="nome_cliente" id="nome_cliente" class="inputUser" required>
                </div>

                <div class="inputBox">
                    <label for="uf">UF</label>
                    <input type="text" name="uf" id="uf" class="inputUser" required >
                    
                </div>
                
                <button type="submit" name="submit" id="submit" >CADASTRAR</button>                 
           </fieldset>
           

        </div>

       
</body>

</html>
