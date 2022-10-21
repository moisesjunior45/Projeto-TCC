<?php include_once"conexao.php";?>

<html>
<body>
<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$selecao = $_POST["selecao"];
$observacao = $_POST["observacao"];

$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
mysqli_select_db($conn,'$dbname');
$sql = "INSERT INTO tbcliente (nome,email,telefone,selecao,observacao) VALUES ('$nome', '$email', '$telefone', '$selecao', '$observacao')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Seus dados foram salvos com sucesso, entraremos em contato!'); window.location = '../index.php';</script>";

}else{
    echo "Deu erro: ". $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>