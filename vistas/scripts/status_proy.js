var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarformEProyectos(false);
	listarEProyectos();

	$("#formularioEProyectos").on("submit",function(e)
	{
		guardaryeditarEProyectos(e);	
	})
}

//Función limpiar
function limpiarEProyectos()
{
	$("#idstatus").val("");
	$("#detalleEProyectos").val("");
}

//Función mostrar formulario
function mostrarformEProyectos(flag)
{
	limpiarEProyectos();
	if (flag)
	{
		$("#listadoregistrosEProyectos").hide();
		$("#formularioregistrosEProyectos").show();
		$("#btnGuardarEProyectos").prop("disabled",false);
		$("#btnagregarEProyectos").hide();
	}
	else
	{
		$("#listadoregistrosEProyectos").show();
		$("#formularioregistrosEProyectos").hide();
		$("#btnagregarEProyectos").show();
	}
}

//Función cancelarform
function cancelarformEProyectos()
{
	limpiarEProyectos();
	mostrarformEProyectos(false);
}

//Función Listar
function listarEProyectos()
{
	tabla=$('#tbllistadoEProyectos').dataTable(
	{	
		"aProcessing": true,//Activamos el procesamiento del datatables
		//"lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"]],//cambia numero de registros para mostrar en la tabla.
		"aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
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
					url: '../ajax/status_proy.php?op=listarEProyectos',
					type : "get",
					dataType : "json",						
					error: function(e){	
						console.alert(e.responseText);
					}
				},
		"bDestroy": true,
		"lengthChange": true,
		"iDisplayLength": 5,//Paginación
		"order": [[ 0, "desc" ]]//Ordenar (columna,orden)
		
	}).DataTable();
}

//Función para guardar o editar
function guardaryeditarEProyectos(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardarEProyectos").prop("disabled",true);
	var formData = new FormData($("#formularioEProyectos")[0]);

	$.ajax({
		url: "../ajax/status_proy.php?op=guardaryeditarEProyectos",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
			  bootbox.alert(datos);	        
	          mostrarformEProyectos(false);
	          tabla.ajax.reload();
	    }

	});
	limpiarEProyectos();
}

function mostrarEProyectos(idstatus)
{
	$.post("../ajax/status_proy.php?op=mostrarEProyectos",{idstatus : idstatus}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarformEProyectos(true);

		$("#idstatus").val(data.idstatus);
		$("#detalleEProyectos").val(data.detalle);
		
 	})
}

//Función para desactivar registros
function desactivarEProyectos(idstatus)
{
	//bootbox.confirm("¿Está Seguro de desactivar el \"Tipo de persona\"?", function(result){
	//	if(result)
    //    {
        	$.post("../ajax/status_proy.php?op=desactivarEProyectos", {idstatus : idstatus}, function(e){
				//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
    //    }
	//});
}

//Función para activar registros
function activarEProyectos(idstatus)
{
	//bootbox.confirm("¿Está Seguro de activar el \"Tipo de persona\"?", function(result){
	//	if(result)
    //    {
        	$.post("../ajax/status_proy.php?op=activarEProyectos", {idstatus : idstatus}, function(e){
				//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
    //    }
	//})
}

init();