//var tabla;

//Función que se ejecuta al inicio
function init(){
	listar();
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

//Función Listar
function listar()
{
	$.ajax({
        type: "GET",
        dataType: 'html',
        url: "../ajax/proyectos.php?op=listar",
        success: function(resp){
			console.log(resp);
			/*if(define(resp)){
    			console.log("true");
			}
			else{
				$('#proyectos_activos').html(resp);
				console.log("false");
			}*/
        }
    });
    /*$.post("../ajax/proyectos.php?op=listar", function(data, status)
	{
		console.log(data);
		data = JSON.parse(data);		
		$("#proyectos_activos").val(data);
		
 	})*/
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
	          //tabla.ajax.reload();
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
	            //tabla.ajax.reload();
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
	            //tabla.ajax.reload();
        	});	
    //    }
	//})
}

init();