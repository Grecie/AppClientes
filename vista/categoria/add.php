<h2>Editar Categorias</h2>


<style>
	body{
		font: oblique bold 200% cursive;
	}

</style>
<form  class="form-horizontal" action="?m=categoria&a=editar&i=<?php echo $data->id;?>" method="POST">

	<input type="hidden" name="id" value="<?php echo $data->id;?>">

	
	<label for="nombre" class="col-sm-2">Nombre</label>
	<div class="form-group">
		<div class="col-sm-10">
			<input type="text" class="form-control" name="nombre" value="<?php echo @$data->nombre;?>">
		</div>
	</div>
	<button onclick="history.back()">Regresar</button>
	<input type="submit" value="Guardar">
</form>