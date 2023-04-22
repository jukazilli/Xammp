


<?php 
    

    if (isset($_POST['submit'] )){
    include_once('config.php');
    $idvenda = $_POST['idvenda'];
    $codcliente = $_POST['codcliente'];
    $nome_cliente = $_REQUEST['nome_cliente'];
    $uf = $_POST['uf'];
    $codconsultor = $_POST['codconsultor'];
    $valor=$_POST['valor'];
    $dt =$_POST['dt'];
    $result = mysqli_query($conexao, "INSERT INTO formulario (codcliente,nome_cliente,uf,
    codconsultor,valor,dt) VALUES (' $codcliente','$nome_cliente','$uf','$codconsultor',' $valor',' $dt  ')"); 

    }else{
        print_r('Aguardando dados');
    }
    ?>
  
   


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/script.js"> </script>
   
   
    <title>Funil de vendas</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <nav>
                    
                <ul>
                    <li><a href="/xampp/projectFunil/index.php">DASHBOARD</a></li>
                </ul>
                <ul>
                    <li><a href="/xampp/projectFunil/funil.php">CADASTRAR VENDA</a></li>
                </ul>
                <ul>
                    <li><a href="/xampp/projectFunil/cadastro.php">CADASTRO DE CLIENTE</a></li>
                </ul>
               
             </nav>
           
        </header>
        <legend class="funil"><b>CADASTRAR VENDA</b></legend>
    
    </div>
   
  
    <div class="box">
        <fieldset>
            <legend><b>INFO CLIENTE</b></legend>
            <form action= " <?php echo $_SERVER ['PHP_SELF']?> " method="POST">  


                <div class="inputBox">

                    <label for="codcliente">COD CLIENTE</label>
                    <input type="number" name="codcliente" id="codcliente" class="inputUser" required > 
                </div>

                <div class="inputBox">
                    <label for="nome_cliente">NOME</label>
                    <input type="text" name="nome_cliente" id="nome_cliente" class="inputUser" required>
                </div>

                <div class="inputBox">
                    <label for="uf">UF</label>
                    <input type="text" name="uf" id="uf" class="inputUser" required >
                </div>

           </fieldset>

           <fieldset>
            <legend><b>INFO VENDA</b></legend>


            <div class="inputBox">
                <label for="codconsultor">COD CONSULTOR</label>
                <input type="number" name="codconsultor" id="codconsultor" class="inputUser" required>
            </div>


            <div class="inputBox">
                <label for="valor">VALOR VENDA</label>
                <input type="text"  name="valor" id="valor"  class="inputUser" required>
            </div>

            <div>
                <label for="dt">DATA VENDA</label>
                <input type="date" name="dt" class="inputUser" id="dt" required>
            </div>
            
            <div>
            <button type="submit" name="submit"  class="funil-submit"  id="funil-submit" >CADASTRAR</button>
            </div>
           </fieldset>
           
        </form>
       
        
    </div>
   
</body>
</html>