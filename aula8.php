<?php
$host="localhost";
$user="root";
$pass="";
$banco="cadastro_cd";
$conexao=mysqli_connect($host,$user,$pass) or die (mysqli_error());
mysqli_select_db($conexao,$banco)or die (mysqli_error());

$artista=$_POST['art'];
$titulo=$_POST['titulo'];
$descricao=$_POST['descricao'];
$preco=$_POST['preco'];
$ano=$_POST['ano'];
$tipo_musica=$_POST['tipo_musica'];
$gravadora=$_POST['gravadora'];
$musica=$_POST['musica'];

$sql=mysqli_query($conexao,"insert into cd(art,titulo,ano,descricao,preco,tipo_musica,gravadora,musica) values('$artista','$titulo','$ano','$descricao', '$preco', '$tipo_musica','$gravadora','$musica')");
echo"<h1><center>Cadastro do CD <br> Realizado com Sucesso!!!";
mysqli_close($conexao);

?>
