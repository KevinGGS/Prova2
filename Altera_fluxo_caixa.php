<?php
include('conexao.php');
$id = $_GET['id'];
$sql = "SELECT * FROM fluxo_caixa where id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Alterar Agenda</h1>
    
    <form action="Altera_fluxo_caixa_exe.php" method="POST" enctype="multipart/form-data">
    <input name='id' type="hidden" value="<?php echo $row['id']?>">

        <div class="form-group row">
            <label for="data" class="col-sm-2 col-form-label">Data:</label>
            <div class="col-sm-9">
            <input class="form-control" type="date" name="data" id="data" value="<?php echo $row['data']?>">
            </div>
        </div>
    <div class="form-group row">
    <label for="tipo" class="col-sm-2 col-form-label">Tipo:</label>
        <input type="radio" id="tipo" name="tipo" for="tipo" value="Entrada">
        <label class="col-sm-2 col-form-label">Entrada</label><br>
        <input type="radio" id="tipo" name="tipo" for="tipo" value="Saida">
        <label class="col-sm-2 col-form-label">Saída</label><br>
    </div>
    <div class="form-group row">
        <label for="valor" class="col-sm-2 col-form-label">Valor:</label>
        <div class="col-sm-9">
        <input class="form-control" type="number" step="0.1" name="valor" id="valor" value="<?php echo $row['valor']?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="historico" class="col-sm-2 col-form-label">Historico</label>
        <div class="col-sm-9">
        <input class="form-control" type="text" name="historico" id="historico" value="<?php echo $row['historico']?>">
        </div>
    </div>
    <div class="form-group row">
    <label for="cheque">Cheque:</label>
        <select name="cheque" for="cheque">
            <option for="cheque" value="Sim">Sim</option>
            <option for="cheque" value="Não">Não</option>
        </select>
    </div>  
   </div>
    <div class="form-group row">
    <input class="btn btn-outline-secondary" type="submit" value="Enviar">
    </div>
</form>
    <div>
    <a class="btn btn-outline-secondary" href="index.php">voltar</a>
    </div>
</body>
</html>
