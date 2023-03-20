
<h2>Página de pedidos</h2>
<p>Aqui você poderá <span style="color:green"><b>ver</b></span>, <span style="color:chocolate"><b>editar</b></span>, <span style="color:blue"><b>adicionar</b></span> ou <span style="color:red"><b>finalizar</b></span> pedidos</p>

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
		
		if($situacao[$i] == 'finalizado'){

			echo "<tr style='background-color:grey; font-family:Consolas'>";
			echo "<td>".$fornecedor[$i]."</td>";
			echo "<td>".$observacao[$i]."</td>";
			echo "<td>".$situacao[$i]."</td>";
			echo "<td>".$quantidade[$i]."</td>";
			echo "<td>".$preco[$i]."</td>";
			echo "</tr>";	
		} else {
			echo "<tr>";
			echo "<td>".$fornecedor[$i]."</td>";
			echo "<td>".$observacao[$i]."</td>";
			echo "<td>".$situacao[$i]."</td>";
			echo "<td>".$quantidade[$i]."</td>";
			echo "<td>".$preco[$i]."</td>";
			echo "</tr>";	
		}
		$i++;
			    
	}	

	?>
     
</table>

<script>
	$(function () {
    $("td").dblclick(function () {
        var conteudoOriginal = $(this).text();

        $(this).addClass("celulaEmEdicao");
        $(this).html("<input type='text' value='" + conteudoOriginal + "' />");
        $(this).children().first().focus();

        $(this).children().first().keypress(function (e) {
            if (e.which == 13) {
                var novoConteudo = $(this).val();
                $(this).parent().text(novoConteudo);
                $(this).parent().removeClass("celulaEmEdicao");
            }
        });

	$(this).children().first().blur(function(){
		$(this).parent().text(conteudoOriginal);
		$(this).parent().removeClass("celulaEmEdicao");
	});
    });
});
</script>


<br>
<h4>Realizar um novo pedido</h4>	

<form method="POST" action="">
	<input name="fornecedor" placeholder="Fornecedor do produto" type="text">
	<input name="observacao" placeholder="Observação" type="text">
	<input name="situacao" placeholder="ativo ou finalizado" type="text">
	<input name="quantidade" placeholder="quantidade" type="text">
	<input name="preco" placeholder="Preço unitário" type="text">
	<a href="pedidos"><input type="submit" value="Fazer pedido"></a>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$pedidos['fornecedor_produto'] = $_POST['fornecedor'];
	$pedidos['observacao'] 		   = $_POST['observacao'];
	$pedidos['ativo_finalizado']   = $_POST['situacao'];
	$pedidos['quantidade']         = $_POST['quantidade'];
	$pedidos['preco_unitario']     = $_POST['preco'];
		
	$this->PedidosModel->insert_user($pedidos);
		
	return $pedidos;	
}
?>
