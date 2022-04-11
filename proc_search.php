<?php
include "connection.php";

$campo = "%".$_POST['campo']."%";

$sql=$conn->prepare("SELECT nome_erro, problema, solucao FROM dados WHERE nome_erro like ?");

$sql->bind_param("s",$campo);
$sql->execute();
$sql->bind_result($nome_erro, $problema, $solucao);

echo"
<table>
<tr>
  <th>Erro</th>
  <th>Problema</th>
  <th>Solucao</th>
</tr>";

while($sql->fetch()){
  echo"
  <tr>
    <td>$nome_erro</td>
    <td>$problema</td>
    <td>$solucao</td>
  </tr>";
}

  echo"
</table>
";
