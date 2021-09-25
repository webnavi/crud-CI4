<?php echo $cabecera ?>

<form action="<?= site_url('/guardar')?>" method="post" enctype="multipart/form-data">

	<div class="form-group">
	  <label for="nombre">Nombre</label>
	  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
	</div>

	<div class="form-group">
	  <label for="imagen">Imagen</label>
	  <input type="file" class="form-control-file" name="imagen" id="imagen" placeholder="Imagen">
	</div>

	<button type="submit" name="enviar" id="" class="btn btn-primary btn-lg btn-block">Guardar</button>
</form>

<?php echo $pie ?>