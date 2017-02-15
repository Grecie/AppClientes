<h2>Agregar Nuevo Cliente</h2>
<style>
	body{
		font: oblique bold 200% cursive;
	}

</style>
<form  class="form-horizontal" action="?m=cliente&a=add&i=<?php echo $data->id;?>" method="POST">

	<input type="hidden" name="id" value="<?php echo $data->id;?>">
	
	<label for="nombre" class="col-sm-2">Nombre</label>
	<div class="form-group">
		<div class="col-sm-10">
			<input type="text" class="form-control" name="nombre" required 
			value="<?php echo @$data->nombre;?>">
		</div>
	</div>
	<label for="apellidos" class="col-sm-2">Apellidos</label>
	<div class="form-group">
		<div class="col-sm-10">
			<input type="text" class="form-control" name="apellidos"  required value="<?php echo @$data->apellidos;?>">
		</div>
	</div>
	<label for="telefono" class="col-sm-2">Telefono</label>
	<div class="form-group">
		<div class="col-sm-10">
			<input type="text" maxlength="10" class="form-control" name="telefono" value="<?php echo @$data->telefono;?>">
		</div>
	</div>
	<label for="correo_electronico" class="col-sm-2">Correo Electronico</label>
	<div class="form-group">
		<div class="col-sm-10">
			<input type="email" class="form-control" name="correo_electronico"  value="<?php echo @$data->correo_electronico;?>">
		</div>
	</div>
	<label for="categoriaid" class="col-sm-2">Categoría</label>
	<div class="form-group">
		<div class="col-sm-10">
			<select name="categoria_id" class="form-control">
				<?php foreach ($categorias as $cat) : ?>
					<option value="<?= $cat->id ?>"><?= $cat->nombre ?></option>
				<?php endforeach;?>
			</select>
		</div>
	</div>
	
	<button onclick="history.back()">Regresar</button>
	<input type="submit" value="Guardar">
</form>