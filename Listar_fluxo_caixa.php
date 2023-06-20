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
    <?php
    include('conexao.php');
    $sql = "SELECT * FROM fluxo_caixa";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result); 
    ?>
    <h1>Consulta de caixa</h1>
    <table align="center" width="1300" class="table">
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Data</th>
            <th scope="col">Tipo</th>
            <th scope="col">Valor</th>
            <th scope="col">Historico</th>
            <th scope="col">Cheque</th>
        </tr>
        <?php
        do{
        if($row)
        {
        echo"<tr>";
        echo"<td>". $row['id'] ."</td>";
        echo"<td>". $row['data'] ."</td>";
        echo"<td>". $row['tipo'] ."</td>";
        echo"<td>". $row['valor'] ."</td>";
        echo"<td>". $row['historico'] ."</td>";
        echo"<td>". $row['cheque'] ."</td>";
        echo "<td><a  href='Altera_fluxo_caixa.php?id=" .$row['id']."'>alterar</a></td>";
        echo "<td><a  href='Excluir_fluxo_caixa.php?id=" .$row['id']."'>excluir</a></td>";
        echo"</tr>";
        }
    }
        while($row = mysqli_fetch_array($result))
        ?>
    </table>
    <a class="btn btn-outline-secondary" href="index.php">voltar</a>
</body>
</html>