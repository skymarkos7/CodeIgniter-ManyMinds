<?php
include_once('header.php');
?>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

<h2>Página de usuários</h2>
<p>Aqui você poderá ver, editar, adicionar ou inativar usuários</p>

<table style="width:100%">
  <tr>
    <th>Nível de acesso</th>
    <th>Usuário</th>
    <th>Situação</th>
    <th>Nome do colaborador</th> 
    <th>Data de cadastro</th>
	<th>Cidade</th>
	<th>Estado unitário</th>
	<th>Cep</th>
	<th>Rua</th>
  </tr>

  <?php
  	$i = 0;	
	foreach ($UserModel as $u) { // trazendo infos do banco	
						
		$user[]     = $u->user;
		$level[]    = $u->level_acess;
		$situacao[] = $u->ativo_inativo;
		$nome[]     = $u->nome_colaborador;
		$data[]     = $u->data_cadastro;
		$cidade[]   = $u->cidade;
		$estado[]   = $u->estado;
		$cep[]      = $u->cep;
		$rua[]      = $u->rua;
		
		echo "<tr>";
		echo "<td>".$user[$i]."</td>";
		echo "<td>".$level[$i]."</td>";
		echo "<td>".$situacao[$i]."</td>";
		echo "<td>".$nome[$i]."</td>";
		echo "<td>".$data[$i]."</td>";
		echo "<td>".$cidade[$i]."</td>";
		echo "<td>".$estado[$i]."</td>";
		echo "<td>".$cep[$i]."</td>";
		echo "<td>".$rua[$i]."</td>";
		echo "</tr>";	
		
		$i++;
			    
	}
	
	?>
     
</table>

<?php
include_once('footer.php');
?>
