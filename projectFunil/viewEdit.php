


<?php 
    

    if (!empty ($_GET['codcliente'])){

    include_once('config.php');


    $codcliente = $_GET['codcliente'];
    $sql= "SELECT * FROM formulario WHERE codcliente = $codcliente";
        $result = $conexao->query($sql);

        if($result-> num_rows > 0){

            while($db_data = mysqli_fetch_assoc($result))
            {
                $idvenda = $db_data['idvenda'];
                $codcliente = $db_data['codcliente'];
                $nome_cliente = $db_data['nome_cliente'];
                $uf = $db_data['uf'];
                $codconsultor = $db_data['codconsultor'];
                $valor=$db_data['valor'];
                $dt =$db_data['dt'];
            }
        }
   

    }else{
        header('Location: index.php');
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
            <form action= "/xampp/projectFunil/viewEdit.php" method="POST">  
<?php ?>
                <div class="inputBox">
                    <label for="codcliente">COD CLIENTE</label>
                    <input type="number" name="codcliente" id="codcliente" class="inputUser" value="<?php echo $codcliente?>" required>
                </div>

                <div class="inputBox">
                    <label for="nome_cliente">NOME</label>
                    <input type="text" name="nome_cliente" id="nome_cliente" value="<?php echo $nome_cliente?>"class="inputUser" required>
                </div>

                <div class="inputBox">
                    <label for="uf">UF</label>
                    <input type="text" name="uf" id="uf" class="inputUser" value="<?php echo $uf?>"required >
                </div>

           </fieldset>

           <fieldset>
            <legend><b>INFO VENDA</b></legend>


            <div class="inputBox">
                <label for="codconsultor">COD CONSULTOR</label>
                <input type="number" name="codconsultor" id="codconsultor" value="<?php echo $codconsultor?>"class="inputUser" required>
            </div>


            <div class="inputBox">
                <label for="valor">VALOR VENDA</label>
                <input type="text"  name="valor" id="valor" value="<?php echo $valor?>" class="inputUser" required>
            </div>

            <div>
                <label for="dt">DATA VENDA</label>
                <input type="date" name="dt" class="inputUser"value="<?php echo $dt?>"id="dt" required>
            </div>
            
            <div>
             
            <input type="hidden" value=" <?php echo $idvenda?>" id="idvenda">
            <button type="submit" name="update"  class="funil-submit"  id="update" >CADASTRAR</button>
            </div>
           </fieldset>
           
        </form>
       
        
    </div>
   
</body>
</html>