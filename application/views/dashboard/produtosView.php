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
	<th>Ação</th>
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
		echo "<td><a href='#'><img width=20 src='https://cdn-icons-png.flaticon.com/512/1159/1159633.png'></a></td>";
		
		echo "</tr>";	
		
		$i++;
			    
	}
	

	?>
     
</table>



<?php
include_once('footer.php');
?>
