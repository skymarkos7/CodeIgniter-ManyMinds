<?php
include_once('header.php');
?>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

<h2>Página de pedidos</h2>
<p>Aqui você poderá ver, editar, adicionar ou inativar pedidos</p>

<table style="width:100%">
  <tr>
    <th>Fornecedor do produto</th>
    <th>Observação</th> 
    <th>Situação</th>
	<th>Quantidade</th>
	<th>Preço unitário</th>
  </tr>

  <?php
  	$i = 0;	
	foreach ($PedidosModel as $p) { // trazendo infos do banco	
						
		$fornecedor[] = $p->fornecedor_produto;
		$observacao[] = $p->observacao;
		$situacao[]   = $p->ativo_finalizado;
		$quantidade[] = $p->quantidade;
		$preco[]      = $p->preco_unitario;
		
		echo "<tr>";
		echo "<td>".$fornecedor[$i]."</td>";
		echo "<td>".$observacao[$i]."</td>";
		echo "<td>".$situacao[$i]."</td>";
		echo "<td>".$quantidade[$i]."</td>";
		echo "<td>".$preco[$i]."</td>";
		echo "</tr>";	
		
		$i++;
			    
	}
	

	?>
     
</table>

<?php
include_once('footer.php');
?>
