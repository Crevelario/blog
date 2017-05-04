<!DoCTYPE html>
<html>
<body>

<?php 
include_once("index.php");
$conectar = mysql_connect("localholst", "titulo", "conteudo","autor","imagem") or die ("Erro ao logar no BD"); 

$p = $_GET["p"]; 
if(isset($p)) { $p = $p; } else { $p = 1; } 

 $qnt = 5; 
 
$inicio = ($p*$qnt) - $qnt; 
$sql_select = "SELECT * FROM post LIMIT $inicio, $qnt"; 
$sql_query = mysql_query($sql_select); 
 while($array = mysql_fetch_array($sql_query)) { 
$titulo = $array["titulo"]; 
$conteudo = $array["conteudo"];
echo $titulo" 
<br /> "; } 
 echo "<br />";
$sql_select_all = "SELECT * FROM post"; 
$sql_query_all = mysql_query($sql_select_all); 
$total_registros = mysql_num_rows($sql_query_all);
$pags = ceil($total_registros/$qnt); 
$max_links = 3;
echo "<a href="paginacao.php?p=1" target="_self">primeira pagina</a> "; 
 for($i = $p-$max_links; $i <= $p-1; $i++) { 
if($i <=0) { 
 
} else { echo "<a href="paginacao.php?p=".$i."" target="_self">".$i."</a> "; } } 
for($i = $p+1; $i <= $p+$max_links; $i++) { 
if($i > $pags) { 
} 
else { echo "<a href="paginacao.php?p=".$i."" target="_self">".$i."</a> "; } }
echo "<a href="paginacao.php?p=".$pags."" target="_self">ultima pagina</a> ";
 ?>








</body>
<head>
</head>
</html>