var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarformSucursales(false);
	
	listarSucursales();

	$("#formularioSucursales").on("submit",function(e)
	{
		//console.log(e);
		guardaryeditarSucursales(e);	
	})
	
}

//Función limpiar
function limpiarSucursales()
{
	$("#idsucursal").val("");
	$("#nombre").val("");
	$("#telefono").val("");
	$("#colonia").val("");
	$("#calle").val("");
	$("#numint").val("");
	$("#numext").val("");
	$("#cp").val("");
	$("#pais").val("");
	$("#estado").val("");
	$("#municipio").val("");
}

//Función mostrar formulario
function mostrarformSucursales(flag)
{
	limpiarSucursales();
	if (flag)
	{
		$("#listadoregistrosSucursales").hide();
		$("#formularioregistrosSucursales").show();
		$("#btnGuardarSucursales").prop("disabled",false);
		$("#btnagregarSucursales").hide();
	}
	else
	{
		$("#listadoregistrosSucursales").show();
		$("#formularioregistrosSucursales").hide();
		$("#btnagregarSucursales").show();
	}
}

//Función cancelarform
function cancelarformSucursales()
{
	limpiarSucursales();
	mostrarformSucursales(false);
}

//Función Listar
function listarSucursales()
{
	tabla=$('#tbllistadoSucursales').dataTable(
	{	
		"aProcessing": true,//Activamos el procesamiento del datatables
		//"lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"]],//cambia numero de registros para mostrar en la tabla.
		"aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'frtip',//Definimos los elementos del control de tabla
	     buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
					'pdf',
				], 
		"columnDefs": [
					{ "width": "20%", "targets": 0 }
				  ],
		"language": {
			"url": "../public/plugins/datatable.lang/spañol.json"
		},
		"ajax":
				{
					url: '../ajax/sucursal.php?op=listarSucursales',
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
function guardaryeditarSucursales(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardarSucursales").prop("disabled",true);
	var formData = new FormData($("#formularioSucursales")[0]);

	$.ajax({
		url: "../ajax/sucursal.php?op=guardaryeditarSucursales",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
			  bootbox.alert(datos);	        
	          mostrarformSucursales(false);
	          tabla.ajax.reload();
	    }

	});
	limpiarSucursales();
}

function mostrarSucursales(idsucursal)
{
	$.post("../ajax/sucursal.php?op=mostrarSucursales",{idsucursal : idsucursal}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarformSucursales(true);

		$("#idsucursal").val(data.idsucursal);
		$("#iddireccion").val(data.iddireccion);
		$("#nombre").val(data.nombre);
		$("#telefono").val(data.telefono);
		$("#colonia").val(data.colonia);
		$("#calle").val(data.calle);
		$("#numint").val(data.numint);
		$("#numext").val(data.numex);
		$("#cp").val(data.cp);
		$("#pais").val(data.pais);
		$("#estado").val(data.estado);
		$("#municipio").val(data.municipio);
 	})
}

//Función para desactivar registros
function desactivarSucursales(idsucursal)
{
	//bootbox.confirm("¿Está Seguro de desactivar el \"Tipo de persona\"?", function(result){
	//	if(result)
    //    {
        	$.post("../ajax/sucursal.php?op=desactivarSucursales", {idsucursal : idsucursal}, function(e){
				//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
    //    }
	//});
}

//Función para activar registros
function activarSucursales(idsucursal)
{
	//bootbox.confirm("¿Está Seguro de activar el \"Tipo de persona\"?", function(result){
	//	if(result)
    //    {
        	$.post("../ajax/sucursal.php?op=activarSucursales", {idsucursal : idsucursal}, function(e){
				//bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
    //    }
	//})
}

init();