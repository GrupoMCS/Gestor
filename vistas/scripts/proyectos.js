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
}

//Función ListarActivos
function listarInactivos()
{
	tabla=$('#tblProyInactivos').dataTable(
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
					url: '../ajax/proyectos.php?op=listarInactivos',
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