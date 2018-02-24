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
		$("#btnagregarProyectos").hide();
		$("#proyectos_activos").hide();
		//frmProyectos(true);
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregarProyectos").show();
		//frmProyectos(false);
		$("#proyectos_activos").show();
	}
}

//Funcion cargar formulario para agregar proyectos
function frmProyectos(flag) {
	if(flag)
	{
		
		//document.getElementById("btnagregarProyectos").innerHTML = "<button class=\"btn btn-success\" id=\"btnagregarProyectos\" onclick=\"frmProyectos(false)\" data-toggle=\"collapse\" data-target=\"#frmProyectos\"><i class=\"fa fa-plus-circle\"></i> Nuevo Proyecto</button>"

		//$("#btnagregarProyectos").click= frmProyectos(false);
		document.getElementById("formularioProyectos").innerHTML = "<div class=\"form-group\"><div class=\"row\"><div class=\"col-lg-12 col-smd-12 col-sm-12 col-xs-12\"><label for=\"nombre\">Nombre de la sucursal: </label><input type=\"hidden\" name=\"idsucursal\" id=\"idsucursal\" ><input type=\"hidden\" name=\"iddireccion\" id=\"iddireccion\" ><input type=\"text\" name=\"nombre\" class=\"form-control\" id=\"nombre\" maxlength=\"45\" placeholder=\"Nombre de la sucursal\" tabindex=\"1\" required></div></div><div class=\"row\"><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\"><label for=\"telefono\">Telefono de contacto: </label><input type=\"text\" name=\"telefono\" class=\"form-control\" id=\"telefono\" maxlength=\"10\" placeholder=\"Telefono de contacto\" tabindex=\"2\"></div></div><div class=\"row\"><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\"><label for=\"colonia\">Colonia: </label><input type=\"text\" name=\"colonia\" class=\"form-control\" id=\"colonia\" maxlength=\"45\" placeholder=\"Colonia\" tabindex=\"3\"></div><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\"><label for=\"calle\">Calle: </label><input type=\"text\" name=\"calle\" class=\"form-control\" id=\"calle\" maxlength=\"45\" placeholder=\"Nombre de la calle\" tabindex=\"4\"></div><div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'><label for='numint'>Numero Interior:</label><input type=\"text\" name=\"numint\" class=\"form-control\" id=\"numint\" maxlength=\"6\" placeholder=\"Numero Interior\" tabindex=\"5\"></div> <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\"><label for=\"numext\">Numero Exterior: </label><input type=\"text\" name=\"numext\" class=\"form-control\" id=\"numext\" maxlength=\"6\" placeholder=\"Numero Exterior\" tabindex=\"6\"></div><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\"><label for=\"cp\">C.P.: </label><input type=\"text\" name=\"cp\" class=\"form-control\" id=\"cp\" maxlength=\"10\" placeholder=\"Codigo Postal\" tabindex=\"7\"></div></div><div class=\"row\"><div class=\"col-lg-6 col-md6 col-sm-12 col-xs-12\"><label for=\"pais\">Pais: </label><input type=\"text\" name=\"pais\" class=\"form-control\" id=\"pais\" maxlength=\"45\" placeholder=\"Pais\" tabindex=\"8\"></div><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\"><label for=\"estado\">Estado: </label><input type=\"text\" name=\"estado\" class=\"form-control\" id=\"estado\" maxlength=\"45\" placeholder=\"Estado\" tabindex=\"9\"></div><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\"><label for=\"municipio\">Municipio: </label><input type=\"text\" name=\"municipio\" class=\"form-control\" id=\"municipio\" maxlength=\"45\" placeholder=\"Municipio\" tabindex=\"10\"><br></div></div><div class=\"row\"><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\"><button class=\"btn btn-primary\" type=\"submit\" id=\"btnGuardar\"><i class=\"fa fa-save\"></i> Guardar</button> <button class=\"btn btn-danger\" type=\"button\" onclick=\"cancelarform()\"><i class=\"fa fa-arrow-circle-left\"></i> Cancelar</button></div></div></div>";

		document.getElementById("nombrePanel").innerHTML = "Agregar un proyecto nuevo";
	}
	else
	{
		document.getElementById("formularioProyectos").innerHTML = " ";
		document.getElementById("nombrePanel").innerHTML = "Proyectos Activos";
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