var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listarActivos();
	listarInactivos();

	
}

//Función limpiar
function limpiar()
{
	$("#idtipo_persona").val("");
	$("#detalle").val("");
}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función ListarActivos
function listarActivos()
{
	$.ajax({
		url: '../ajax/proyectos.php?op=listarActivos', //Si el doc php esta en mismo nivel seria directo. Caso contrario si el archivos php esta en una carpeta abría que mapearla bien. Ejemplo: url:'php/provincias_Exam.php'
		type: 'post',
		success: function (r) { // te recomiendo que imprimas las respuesta "console.log(r)" para que veas como te esta devolviendo la estructura tu php.
		//console.log(r);
			$("#proyectos_activos").empty();
			r = JSON.parse(r);
			proyecto_unico="vacio";
			for (i = 0; i < r.length; i++) {
				proyecto_unico="";
				proyecto_unico ='<div class="panel panel-default">'+
                    '<div class="panel-heading" data-toggle="collapse" data-parent="#proyectos_activos" href="#'+ r[i].idproyecto +'">'+
                        '<h4 class="panel-title">'+
                            '<a>'+r[i].idproyecto+ " - " +r[i].nombreProy+'</a>'+
                            '<div class="progress">'+
                                '<div class="progress-bar sm progress-bar-striped active" role="progressbar"'+
                                     'style="width:40%">40%'+
                                '</div>'+
                            '</div>'+
                        '</h4>'+
                    '</div>'+
                    '<div id="'+ r[i].idproyecto +'" class="panel-collapse collapse">'+
                        '<div  class="panel-body">'+
                            '<div class="row">'+
                                '<div class="col-md-3"><strong>Nombre Proyecto:</strong></div>'+
                                '<div class="col-md-3">'+r[i].nombreProy+'</div>'+
                                '<div class="col-md-3"><strong>Fase del Proyecto:</strong></div>'+
                                '<div class="col-md-3">'+ r[i].etapa +'</div>'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-md-3"><strong>Cliente:</strong></div>'+
                                '<div class="col-md-3">'+ r[i].nombre+' '+r[i].apaterno+' '+r[i].amaterno+'</div>'+
                                '<div class="col-md-3"><strong>Entregables:</strong></div>'+
                                '<div class="col-md-3">'+ r[i].entregable +'</div>'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-md-3"><strong>Responsable:</strong></div>'+
                                '<div class="col-md-3">'+ r[i].responsable +'</div>'+
                                '<div class="col-md-3"><strong>Fecha de Inicio del Proyecto:</strong></div>'+
                                '<div class="col-md-3">'+ r[i].fecha_inicio +'</div>'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-md-3"><strong>Costo Presupuestado:</strong></div>'+
                                '<div class="col-md-3">'+ r[i].costo +'</div>'+
                                '<div class="col-md-3"><strong>Fecha Limite de Entrega:</strong></div>'+
                                '<div class="col-md-3">'+ r[i].fecha_fin +'</div>'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-md-3"><a href="#">Ver Más Detalles...</a></div>'+
                                '<div class="col-md-3"></div>'+
                                '<div class="col-md-3"><strong></strong></div>'+
                                '<div class="col-md-3"></div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
				'</div>';
			}
			//console.log(proyecto_unico);
			if(proyecto_unico=="vacio"){
				proyecto_unico='<div class="panel panel-default">'+
									'<div class="panel-heading">'+
										'<h4 class="panel-title">No existen datos de proyectos concluidos.'+
										'</h4>'+
									'</div>';
				$("#proyectos_activos").append(proyecto_unico);
			}else{
				$("#proyectos_activos").append(proyecto_unico);
			}
		}
	});
		
}

/*{
	tabla=$('#tblProyActivos').dataTable(
	{	
		"aProcessing": true,//Activamos el procesamiento del datatables
		//"lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"]],//cambia numero de registros para mostrar en la tabla.
		"aServerSide": true,//Paginación y filtrado realizados por el servidor
		dom: 'frt',//Definimos los elementos del control de tabla
		"ordering": false,
	     buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
					'pdf',
				], 
		"language": {
			"url": "../public/plugins/datatable.lang/spañol.json"
		},
		"ajax":
				{
					url: '../ajax/proyectos.php?op=listarActivos',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"lengthChange": true,
		"iDisplayLength": -1//Paginación
		//"order": [[ 0, "desc" ]]//Ordenar (columna,orden)
		
	}).DataTable();
}*/

//Función ListarActivos
function listarInactivos()
{
	$.ajax({
		url: '../ajax/proyectos.php?op=listarInactivos', //Si el doc php esta en mismo nivel seria directo. Caso contrario si el archivos php esta en una carpeta abría que mapearla bien. Ejemplo: url:'php/provincias_Exam.php'
		type: 'post',
		success: function (r) { // te recomiendo que imprimas las respuesta "console.log(r)" para que veas como te esta devolviendo la estructura tu php.
		//console.log(r);
			$("#proyectos_inactivos").empty();
			r = JSON.parse(r);
			proyecto_unico="vacio";
			for (i = 0; i < r.length; i++) {
				proyecto_unico="";
				proyecto_unico = '<div class="panel panel-default"><div class="panel-heading" data-toggle="collapse" data-parent="#proyectos_inactivos" href="#'+ r[i].idproyecto +'1">		<h4 class="panel-title"><a>'+r[i].idproyecto+ " - " +r[i].nombreProy+'</a></h4></div><div id="'+ r[i].idproyecto +'1" class="panel-collapse collapse"><div class="panel-body"><div class="row"><div class="col-md-3"><strong>Nombre royecto:</strong></div><div class="col-md-3">'+r[i].nombreProy+'</div><div class="col-md-3"><strong>Fase del Proyecto:</strong></div><div class="col-md-3">'+ r[i].etapa +'</div></div><div class="row"><div class="col-md-3"><strong>Cliente:</strong></div><div class="col-md-3">'+ r[i].nombre+' '+r[i].apaterno+' '+r[i].amaterno+'</div><div class="col-md-3"><strong>Entregables:</strong></div><div class="col-md-3">'+ r[i].entregable +'</div></div><div class="row"><div class="col-md-3"><strong>Responsable:</strong></div>		<div class="col-md-3">'+ r[i].responsable +'</div><div class="col-md-3"><strong>Fecha de Inicio del Proyecto:</strong></div><div class="col-md-3">'+ r[i].fecha_inicio +'</div></div><div class="row"><div class="col-md-3"><strong>Costo Presupuestado:</strong></div>					<div class="col-md-3">'+ r[i].costo +'</div><div class="col-md-3"><strong>Fecha Limite de Entrega:</strong></div><div class="col-md-3">'+ r[i].fecha_fin +'</div></div><div class="row"><div class="col-md-3"><a href="#">Ver Más Detalles...</a></div><div class="col-md-3"></div><div class="col-md-3"><strong></strong></div><div class="col-md-3"></div></div></div></div></div>';
			}
			//console.log(proyecto_unico);
			if(proyecto_unico=="vacio"){
				proyecto_unico='<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title">No existen datos de proyectos concluidos.</h4></div>';
				$("#proyectos_inactivos").append(proyecto_unico);
			}else{
				$("#proyectos_inactivos").append(proyecto_unico);
			}
		}
	});
}

//Función para guardar o editar
function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/tipo_persona.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
			  bootbox.alert(datos);	        
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}

function mostrar(idtipo_persona)
{
	$.post("../ajax/tipo_persona.php?op=mostrar",{idtipo_persona : idtipo_persona}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#idtipo_persona").val(data.idtipo_persona);
		$("#detalle").val(data.detalle);
		
 	})
}

//Función para desactivar registros
function desactivar(idtipo_persona)
{
	//bootbox.confirm("¿Está Seguro de desactivar el \"Tipo de persona\"?", function(result){
	//	if(result)
    //    {
        	$.post("../ajax/tipo_persona.php?op=desactivar", {idtipo_persona : idtipo_persona}, function(e){
				//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
    //    }
	//});
}

//Función para activar registros
function activar(idtipo_persona)
{
	//bootbox.confirm("¿Está Seguro de activar el \"Tipo de persona\"?", function(result){
	//	if(result)
    //    {
        	$.post("../ajax/tipo_persona.php?op=activar", {idtipo_persona : idtipo_persona}, function(e){
				//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
    //    }
	//})
}

init();