<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AV1 de 3DAW</title>
</head>
<body>
<?php
//Enviar para andre.neves@faeterj-rio.edu.br
echo "Teste de impressao";
$ehPost = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["usuario"];
    $funcao = $_POST["funcao"];
    $matricula = $_POST["matricula"];
    $arquivoAluno = fopen("Usuarios.txt", "w");
    $txt = "nome;matricula;funcao\n";
    fwrite($arquivoUsuario,$txt);
    $txt = $nome . ";" . $funcao . ";" . $matricula . "\n";
    fwrite($arquivoUsuario,$txt);
    $txt2 = "$nome;$funcao;$matricula\n";
    fwrite($arquivoUsuario,$txt2);
    fclose($arquivoUsuario);
} else {
    $ehPost = false;
}
?>
<a href="cadUsuario.php">Criar Usuário</a><br>
<a href="alterarUsuario.php">Alterar Usuário</a><br>
<a href="listUsuario.php">Listar todos os Usuário</a><br>
<a href="listUsuario.php">Listar Usuário</a><br>
<a href="excluirUsuario.php">Excluir Usuário</a><br><br>
<?php
////////////////////Separar

?>

<h1>Criar Usuário</h1>

<h3><?php if ($ehPost) {echo "Usuario $nome inserido com sucesso";} ?></h3>

<form action="cadUsuario.php" method="POST">
    nome:   <input type="text" name="aluno"><br>
    funcao:   <input type="text" name="funcao"><br>
    matricula:   <input type="text" name="matricula"><br>
    <input type="submit" value="enviar">
</form>
<?php

////////////////////Separar
<h1>Alterar Usuario</h1>

$matricula = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["usuario"];
    $funcao = $_POST["funcao"];
    $matricula = $_POST["matricula"];
    
} else {
    $matricula = $_GET["matricula"];
}
?>

<?php
////////////////////Separar
$nomeArquivo = "Usuarios.txt";
$arquivoAluno = fopen($nomeUsuario, "r") or die("Erro leitura arquivo");
$cabecalho = fgets($arquivoUsuario);
$x = 0;
while (!feof($arquivoUsuario)) {
    $linha[] = fgets($arquivoUsuario);

}
fclose($arquivoUsuario);
?>

<h1>Listar Usuario</h1>

<table>
    <tr>
        <th>Nome Usuario</th>
        <th>Funcao</th>
        <th>Matricula</th>
    </tr>
</table>

</body>
</html>