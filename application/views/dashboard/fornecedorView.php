<?php
include_once('header.php');
?>


<h2>Página de fornecedores</h2>
<p>Aqui você poderá ver, editar, adicionar ou inativar fornecedores</p>

<table class="tabelaEditavel" style="width:100%">
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


<!-- <table class="tabelaEditavel">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>João Carlos</td>
                <td>joca@email.com</td>
                <td>(21) 9999-8888</td>
            </tr>
            <tr>
                <td>002</td>
                <td>Maria Silva</td>
                <td>mariasilva@mail.com</td>
                <td>(81) 8787-8686</td>
            </tr>
            <tr>
                <td>003</td>
                <td>José Pedro</td>
                <td>zepedro@meuemail.com</td>
                <td>(84) 3232-3232</td>
            </tr>
        </tbody>
    </table> -->

<?php
include_once('footer.php');
?>
