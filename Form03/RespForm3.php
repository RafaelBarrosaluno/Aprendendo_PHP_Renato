<?php // se faltar php nao traz os dados
// Recebe os dados do formulário com a variável $_POST
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$sexo = $_POST["sexo"];
$turno = $_POST["turno"];
$cidade = $_POST["cidade"];

// Exibe os dados na página de resposta: RespForm055.php
echo "Os dados recebidos do formulário são:";
echo "
<table width = '400' border='1' cellspacing='0' cellpadding='0'>
<tr>
<td width = '100'>Nome:<td>
<td width = '300'>$nome</td>
</tr>
<tr>
<td width = '100'>Senha:<td>
<td width = '300'>$senha</td>
</tr>
<tr>
<td width = '100'>Sexo:<td>
<td width = '300'>$sexo</td>
</tr>
<tr>
<td width = '100'>Turno:<td>
<td width = '300'>$turno</td>
</tr>
<tr>
<td width = '100'>Cidade:<td>
<td width = '300'>$cidade</td>
</tr>
</table>
";
?>
<html>
<head><title>Curso de PHP</title>
</head>
<body>
<p>
<a href="Form03.html">Clique aqui para voltar ao formulario.</a>
</body>
</html>
