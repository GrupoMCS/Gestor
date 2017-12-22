var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
}

//Función limpiar
function limpiar()
{
	$("#idstatus").val("");
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

//Función Listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
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
					url: '../ajax/status_proy.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						//console.log(e.responseText);	
						bootbox.alert(e.responseText);
					}
				},
		"bDestroy": true,
		"lengthChange": true,
		"iDisplayLength": 5,//Paginación
		"order": [[ 0, "desc" ]]//Ordenar (columna,orden)
		
	}).DataTable();
}

//Función para guardar o editar
function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/status_proy.php?op=guardaryeditar",
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

function mostrar(idstatus)
{
	$.post("../ajax/status_proy.php?op=mostrar",{idstatus : idstatus}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#idstatus").val(data.idstatus);
		$("#detalle").val(data.detalle);
		
 	})
}

//Función para desactivar registros
function desactivar(idstatus)
{
	//bootbox.confirm("¿Está Seguro de desactivar el \"Tipo de persona\"?", function(result){
	//	if(result)
    //    {
        	$.post("../ajax/status_proy.php?op=desactivar", {idstatus : idstatus}, function(e){
				//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
    //    }
	//});
}

//Función para activar registros
function activar(idstatus)
{
	//bootbox.confirm("¿Está Seguro de activar el \"Tipo de persona\"?", function(result){
	//	if(result)
    //    {
        	$.post("../ajax/status_proy.php?op=activar", {idstatus : idstatus}, function(e){
				//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
    //    }
	//})
}

init();