<?php

?>

<!--<?php echo $cabecera ?>
<a href="<?= base_url('crear')?>">Crear</a>
<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Imagen</th>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($libros as $libro): ?>
			<tr>
				<td><?=$libro['id']?></td>
				<td><?=$libro['imagen']?></td>
				<td><?=$libro['nombre']?></td>
				<td>
					<a href="<?= base_url('borrar/'.$libro['id'])?>">Editar</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<?php echo $pie ?>-->
