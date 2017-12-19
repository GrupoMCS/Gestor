var tabla;

//Funcion que se ejecuta al inicio
function init(){
    mostrarform(false);
    listar();

    $("#form.tipo_persona").on("submit", function(e){
        guardaryeditar(e);
    })
}

//Funcion limpiar
function limpiar(){
    $("#idtipo_persona").val("");
    $("#detalle").val("");
}

//Funcion mostrar formulario
function mostrarform(flag){
    limpiar();
    if(flag){
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled",false);
    }
    else{
        $("#listadoregistros").show();
        $("#formularioregistros").hide();
    }
}

//Funcion cancelarform
function cancelarform(){
    limpiar();
    mostrarform(false);
}

//Funcion listar
function listar(){
    tabla=$('#tbllistado').dataTable(
        {
            "aProcessing": true,//Activamos el procesamiento del datatables
            "aServerSide": true,//Paginación y filtrado realizados por el servidor
            dom: 'Bfrtip',//Definimos los elementos del control de tabla
            buttons: [	          
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'
                ],
                "language": {
                        "url": "../public/plugins/datatable.lang/spañol.json"
                    },
            "ajax":
                    {
                        url: '../ajax/tipo_persona.php?op=listar',
                        type : "get",
                        dataType : "json",						
                        error: function(e){
                            console.log(e.responseText);	
                        }
                    },
            "bDestroy": true,
            "iDisplayLength": 5,//Paginación
            "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
        }).DataTable();
}

//Funcion para guardaryeditar
function guardaryeditar(e){
    e.preventDefault(); //No se activara la accion predeterminada del evento
    $("#btnGuardar").prop("disabled",true);
    var formData = new FormData($("#form.tipo_persona")[0]);

    $.ajax({
        url:"../ajax/tipo_persona.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos){
            alert(datos);
            mostrarform(false);
            tabla.ajax.reload();
        }
    });
    limpiar();
}

init();