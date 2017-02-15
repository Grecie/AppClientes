<style>
        body{
            color: #333333;
font-family: font: oblique bold 120% cursive;

background-color: #FFFAF0;  

    </style>
	
</head>

<table class="Table table-hover">
 <h1>REGISTRO DE CLIENTES</h1>
 <a href="?m=cliente&a=add" class="btn btn-Nuevo btn-info btn-md">NUEVO CLIENTE</a>
 <a href="?m=categoria&a=index" class="btn btn-Nuevo btn-success btn-md">MUESTRAS DE CATEGORIAS</a>
 
 <tr>
     <th>ID</th>
 	<th class="success">Nombre</th>
 	<th class="info">Apellidos</th>
 	<th class="danger">Teléfono</th>
 	<th class="warning">Correo_Electronico</th>
 	<th class="success">Categorias</th>
 	<th>Operaciones</th>
 	<th>&nbsp;</th>
 </tr>

 	<?php foreach ($data as $cliente): ?>
        <td><?= $cliente->id ?></td>
     	<td><?= $cliente->nombre ?></td>
     	<td><?= $cliente->apellidos ?></td>
     	<td><?= $cliente->telefono ?></td>
     	<td><?= $cliente->correo_electronico ?></td>
     	<td><?= $cliente->categoria ?></td>

        
     	<td><a href="?m=cliente&a=editar&i=<?= $cliente->id?>">Editar</a>
        <button data-id="<?php echo $cliente->id;?>" data-modelo="<?php echo BASEURL;?>/?m=cliente&amp;a=delete" data-nombre="<?php echo $cliente->nombre;?>" class="btn btn-Eliminar btn-danger btn-sm"
        role="button">Eliminar</button>
        
        
</td>

     </tr>

 <?php endforeach; ?>
</table>
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
¿Desea eliminar el Cliente?
</h4>
</div>
<div class="modal-body">
<p> El cliente será eliminado permanentemente</p>

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

