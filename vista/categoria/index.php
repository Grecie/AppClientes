<style>
        body{
        	color: #333333;
font-family: Tahoma, Geneva, sans-serif;
        }

	</style>
</head>

</head>

<table class="table table-condesed">
 <h1>MUESTRAS DE CATEGORIAS</h1>
 <a href="?m=categoria&a=add" class="btn btn-Nuevo btn-info btn-md">NUEVA CATEGORIA</a>
 
 <tr>
     <th>ID</th>
 	<th class="active">Nombre</th>
 	<th>Operaciones</th>
 	<th>&nbsp;</th>
 </tr>

 	<?php foreach ($data as $categoria): ?>
        <td><?= $categoria->id ?></td>
     	<td><?= $categoria->nombre ?></td>

        
     	<td><a href="?m=categoria&a=editar&i=<?= $categoria->id?>">Editar</a>
        <button data-id="<?php echo $categoria->id;?>" data-modelo="<?php echo BASEURL;?>/?m=categoria&amp;a=delete" data-nombre="<?php echo $categoria->nombre;?>" class="btn btn-Eliminar btn-danger btn-sm"
        role="button">Eliminar</button>
        
        
</td>

     </tr>
     

 <?php endforeach; ?>
</table>
<a href="?m=cliente&a=index" class="btn btn-Nuevo btn-success btn-md">REGRESAR</a>
 

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="buton" class="close" data-dismiss="modal"
aria-hidden="true">
</button>
<h4 class="modal-title" id="myModalLabel">
¿Desea eliminar la Categoria?
</h4>
</div>
<div class="modal-body">
<p> La  categoria  será eliminada permanentemente</p>

</div>
<div class="modal-footer">
<button id="eliminar" type="button" class="btn btn-default" data-dismiss="modal">
Eliminar
</button>
<button type="button" class="btn btn-primary" data-dismiss="modal">
Cancelar
</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

