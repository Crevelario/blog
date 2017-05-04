<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="estilo_home.css" rel="stylesheet" type="text/css">
<style type="text/css">
a:link {
	text-decoration: none;
	color: #FFFFFF;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
	border-right-style: 10px;
	border-left-style: 10px;
}
</style>
</head>

<body>
<?php 
include_once("paginação.php");
include_once("postando.php");



?>
<header>
<nav id="menu_align1" >
<div id="menu_align">
<ul>
<li class="ativa"><a href="index.php"> Pagina inicial   

  </a><a href="administrativo.php"> Area Admiministrativa
</a>
</li>
</ul>



</div>
</nav>
</header>
<nav>
<form method="post" enctype="multipart/form-data" action="postando.php">
  <p><br>
    <br>TItulo:<br>
    <input type="text" name="titulo" id="titulo" placeholder="Escreva seu titulo" />
    <br><br>Conteudo</br>
    <input type="text" name="conteudo" id="conteudo" />
    <br><br><br>
    </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>Autor<br>
    <input type="text" name="autor" id="autor" />
  </p>
  <br>
<input type="file" src="submit.gif" alt="Submit">
<input type="submit" value="Enviar Post" id="post">
</form>
</nav>

</body>
</html>