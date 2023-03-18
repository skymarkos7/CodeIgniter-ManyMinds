<?php
include_once('header.php');
?>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

<h2>Página de fornecedores</h2>
<p>Aqui você poderá ver, editar, adicionar ou inativar fornecedores</p>

<table style="width:100%">
  <tr>
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
	foreach ($FornecedorModel as $f) { // trazendo infos do banco	
						
		$situacao[] = $f->ativo_inativo;
		$nome[]     = $f->nome_colaborador;
		$data[]     = $f->data_cadastro;
		$cidade[]   = $f->cidade;
		$estado[]   = $f->estado;
		$cep[]      = $f->cep;
		$rua[]      = $f->rua;
		
		echo "<tr>";
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
