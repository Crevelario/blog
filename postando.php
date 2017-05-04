

<html>
<head></head>
<body>

<?php
include_once("index.php");
$host="localhost";

$user="root";
$pass="";
$banco="blog";
$conexão="mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());




?>

<?php



$titulo=$_post['titulo'];
$conteudo=$_post['conteudo'];
$autor=$_post['autor'];
$imagem=$_post['imagem'];
$sql=mysql_query ("insert into posts(titulo,conteudo,autor) values('$titulo','$conteudo','$autor')");



?>

<?php
$intens_porpagina=10




?>

</body>
<html>