

<h2>Página de fornecedores</h2>
<p>Aqui você poderá <span style="color:green"><b>ver</b></span>, <span style="color:chocolate"><b>editar</b></span>, <span style="color:blue"><b>adicionar</b></span> ou <span style="color:red"><b>inativar</b></span> fornecedores</p>

<table class="tabelaEditavel" style="width:100%">
  <tr>
    <th>Situação</th>
    <th>Nome do colaborador</th> 
    <th>Data de cadastro</th>
	<th>Cidade</th>
	<th>Estado</th>
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
		
		if($situacao[$i] == 'inativo'){

			echo "<tr style='background-color:grey; font-family:Consolas'>";
			echo "<td>".$situacao[$i]."</td>";
			echo "<td>".$nome[$i]."</td>";
			echo "<td>".$data[$i]."</td>";
			echo "<td>".$cidade[$i]."</td>";
			echo "<td>".$estado[$i]."</td>";
			echo "<td>".$cep[$i]."</td>";
			echo "<td>".$rua[$i]."</td>";
			echo "</tr>";	
		} else {
			echo "<tr>";
			echo "<td>".$situacao[$i]."</td>";
			echo "<td>".$nome[$i]."</td>";
			echo "<td>".$data[$i]."</td>";
			echo "<td>".$cidade[$i]."</td>";
			echo "<td>".$estado[$i]."</td>";
			echo "<td>".$cep[$i]."</td>";
			echo "<td>".$rua[$i]."</td>";
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
<h4>Adicionar novo fornecedor</h4>	

<form method="POST" action="">
	<select required name="level" id="permissao">
		<option value="ativo">Ativo</option>
		<option value="inativo">Inativo</option>
	</select>
	<input required name="colaborador" placeholder="Nome do fornecedor" type="text">
	<input required name="data" placeholder="data de parceria" type="date"> <!-- Inserir automaticamente pegando data atual-->
	<input required name="cidade" placeholder="cidade" type="text">
	<input name="estado" placeholder="estado" type="text">
	<input name="cep" placeholder="cep" type="text">
	<input name="rua" placeholder="rua" type="text">
	<a href="fornecedor"><input type="submit" value="Inserir novo produto"></a>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$fornecedor['ativo_inativo']    = $_POST['level'];
	$fornecedor['nome_colaborador'] = $_POST['colaborador'];
	$fornecedor['data_cadastro']    = $_POST['data'];
	$fornecedor['cidade']           = $_POST['cidade'];
	$fornecedor['estado']           = $_POST['estado'];
	$fornecedor['cep']              = $_POST['cep'];
	$fornecedor['rua']              = $_POST['rua'];
	$fornecedor['usuario_fornecedor'] = 'fornecedor';
		
	$this->FornecedorModel->insert_fornecedor($fornecedor);
		
	return $fornecedor;	
}
?>

