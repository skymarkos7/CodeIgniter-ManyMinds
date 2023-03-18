<?php
include_once('header.php');
?>


<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

										

<h2>Página de produtos</h2>
<p>Aqui você poderá ver, editar, adicionar ou inativar produtos</p>

<table style="width:100%">
  <tr>
    <th>Produto</th>
    <th>Fornecedor</th> 
    <th>Situação</th>
  </tr>

  <?php
  	$i = 0;	
	foreach ($ProductModel as $p) { // trazendo infos do banco	
						
		$nome[]          = $p->nome_produto;
		$fornecedor[]    = $p->fornecedor_produto;
		$ativo_inativo[] = $p->ativo_inativo;
		
		echo "<tr>";
		echo "<td>".$nome[$i]."</td>";
		echo "<td>".$fornecedor[$i]."</td>";
		echo "<td>".$ativo_inativo[$i]."</td>";
		echo "</tr>";	
		
		$i++;
			    
	}
	

	?>
     
</table>



<?php
include_once('footer.php');
?>
