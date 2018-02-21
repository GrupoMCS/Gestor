var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarformTPersona(false);
	listarTPersona();

	$("#formularioTPersona").on("submit",function(e)
	{
		guardaryeditarTPersona(e);	
	})
}

//Función limpiar
function limpiarTPersona()
{
	$("#idtipo_persona").val("");
	$("#detalleTPersona").val("");
}

//Función mostrar formulario
function mostrarformTPersona(flag)
{
	limpiarTPersona();
	if (flag)
	{
		$("#listadoregistrosTPersona").hide();
		$("#formularioregistrosTPersona").show();
		$("#btnGuardarTPersona").prop("disabled",false);
		$("#btnagregarTPersona").hide();
	}
	else
	{
		$("#listadoregistrosTPersona").show();
		$("#formularioregistrosTPersona").hide();
		$("#btnagregarTPersona").show();
	}
}

//Función cancelarform
function cancelarformTPersona()
{
	limpiarTPersona();
	mostrarformTPersona(false);
}

//Función Listar
function listarTPersona()
{
	tabla=$('#tbllistadoTPersona').dataTable(
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
					url: '../ajax/tipo_persona.php?op=listarTPersona',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"lengthChange": true,
		"iDisplayLength": 5,//Paginación
		"order": [[ 0, "desc" ]]//Ordenar (columna,orden)
		
	}).DataTable();
}

//Función para guardar o editar
function guardaryeditarTPersona(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardarTPersona").prop("disabled",true);
	var formData = new FormData($("#formularioTPersona")[0]);

	$.ajax({
		url: "../ajax/tipo_persona.php?op=guardaryeditarTPersona",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
			  bootbox.alert(datos);	        
	          mostrarformTPersona(false);
	          tabla.ajax.reload();
	    }

	});
	limpiarTPersona();
}

function mostrarTPersona(idtipo_persona)
{
	$.post("../ajax/tipo_persona.php?op=mostrarTPersona",{idtipo_persona : idtipo_persona}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarformTPersona(true);

		$("#idtipo_persona").val(data.idtipo_persona);
		$("#detalleTPersona").val(data.detalle);
		
 	})
}

//Función para desactivar registros
function desactivarTPersona(idtipo_persona)
{
	//bootbox.confirm("¿Está Seguro de desactivar el \"Tipo de persona\"?", function(result){
	//	if(result)
    //    {
			$.post("../ajax/tipo_persona.php?op=desactivarTPersona", {idtipo_persona : idtipo_persona}, function(e){
				//bootbox.alert(e);
				tabla.ajax.reload();
			});	
    //    }
	//});
}

//Función para activar registros
function activarTPersona(idtipo_persona)
{
	//bootbox.confirm("¿Está Seguro de activar el \"Tipo de persona\"?", function(result){
	//	if(result)
    //    {
        	
			
			$.post("../ajax/tipo_persona.php?op=activarTPersona", {idtipo_persona : idtipo_persona}, function(e){
				//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
    //    }
	//})
}

init();