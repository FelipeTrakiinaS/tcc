
<?php
	
	$resultado=mysql_query("SELECT * FROM produtos ORDER BY 'id'");
	$linhas=mysql_num_rows($resultado);
?>	

<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Sites</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href="administrativo.php?link=11"><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <table class="table">
		<thead>
		  <tr>
			<th>ID</th>
			<th>Nome</th>
			<!-- <th>Preco</th> -->
			<th>URL</th>
			<!-- <th>Situação</th> -->
			<th>Imagem</th>
			<th>Ações</th>
		  </tr>
		</thead>
		<tbody>
			<?php 
				while($linhas = mysql_fetch_array($resultado)){
					echo "<tr>";
						echo "<td>".$linhas['id']."</td>";
						echo "<td>".$linhas['nome']."</td>";
						// echo "<td>".$linhas['preco']."</td>";
						echo "<td>".$linhas['description']."</td>";
						?>
						<td>
						<div class="col-sm-9 col-md-11">
							<?php $foto = $linhas['imagem']; ?>
							<img src="<?php echo "../foto/$foto"; ?>" width="100" height="100">
						</div>			
						</td>
<!-- 						<td> 
						<a href='administrativo.php?link=12&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a>
						</td> -->
						<td> 
						<a href='administrativo.php?link=13&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
						</td>
 						<td> 
						<a href='processa/proc_apagar_produto.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
						</td>
						<?php
					echo "</tr>";
				}
			?>
		</tbody>
	  </table>
	</div>
	</div>
</div> <!-- /container -->

