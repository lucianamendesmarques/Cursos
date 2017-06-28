<?php
echo "<body bgColor=#fcfde1>";
echo "<html>
<head>
<title>Comentários</title>
</head><center>
<h1><strong>Livro de visitas.</strong></h2>
</body>";

$COUNT_FILE = "count.txt"; // arquivo que armazena o número
$n_chamado=file($COUNT_FILE); // copia o arquivo
$count = $n_chamado[0];
?>
<table width=100% border=1 cellspacing=1 cellpadding=2>
  <tr>   <th bgcolor="#0000aa" colspan=1>
          <strong><font color=white>Comentários:</font></strong>
     </th></tr>
<?php
for($i=$count; $i>0; $i--)
{
$fp = fopen($i, "r");
$conteudo = fread($fp,filesize($i));

if($conteudo)
{
	echo "<tr><td>";
	echo "$conteudo <br><br>";
	echo "</td></tr>";
}

}

for($i=15; $i>$count; $i--)
{
$fp = fopen($i, "r");
$conteudo = fread($fp,filesize($i));

if($conteudo)
{
	echo "<tr><td>";
	echo "$conteudo <br><br>";
	echo "</td></tr>";
}

}
echo "</table>";
echo "</html>";

?>
