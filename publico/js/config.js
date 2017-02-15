$(document).ready(function(){
	$(".btn-Eliminar").click(function(e){
		e.preventDefault;
		//var padre =$(this).closest("tr");
		var id = '&i=' + $(this).attr('data-id');
		var nombre = $(this).attr('data-nombre');
		var url = $(this).attr('data-modelo');		
		$("#myModal").modal({
			backdrop:'static',keyboard:'false'
		}).one('click',"#eliminar",function(e) {
			console.log(url + id);
			$.get(url + id, function(x) {
				console.log(x.length);
				if (x.indexOf("OK") !== -1)
					location.reload();
				else
					alert("No se pudo eliminar");

			});
			return false;
		});
		return false;
		
	});
});