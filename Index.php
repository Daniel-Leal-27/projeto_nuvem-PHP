<html>
<head>
    <title>Connect</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "password";
$database = "allbikes01";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("A conexão falhou".mysqli_connect_error());

}

$sql = "select id, nome, descricao, preco, imagem from Produtos";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo "<p>  ID: ".$row['id']." Nome do produto: ".$row['nome']." Descrição do produto: ".$row['descricao']." Preço do produto: R$".$row['preco']." Imagem do produto: ".$row['imagem'];
}

/*$servername = "localhost";
$username = "root";
$password = "password";
$database = "faculdade2";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("A conexão falhou".mysqli_connect_error());

}

$sql = "select id_aluno, nome, idade, logradouro, num, bairro, cid, est from alunos";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo "<p>  ID do aluno: ".$row['id_aluno']." Nome do aluno: ".$row['nome']." Idade: ".$row['idade']." Logradouro: ".$row['logradouro']." número: ".$row['num']." bairro: ".$row['bairro']." cidade: ".$row['cid']." estado: ".$row['est'];
}
$sql = "select id, nome, descricao, preco, imagem from Produtos";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo "<p>  ID: ".$row['id']." Nome do produto: ".$row['nome']." Descrição do produto: ".$row['descricao']." Preço do produto: R$".$row['preco']." Imagem do produto: ".$row['imagem'];
}
*/

?>
</body>
</html>
