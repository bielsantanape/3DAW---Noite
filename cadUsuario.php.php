<h1>Criar Usuário</h1>

<h3><?php if ($ehPost) {echo "Usuario $nome inserido com sucesso";} ?></h3>

<form action="cadUsuario.php" method="POST">
    nome:   <input type="text" name="aluno"><br>
    funcao:   <input type="text" name="funcao"><br>
    matricula:   <input type="text" name="matricula"><br>
    <input type="submit" value="enviar">
</form>

<?php