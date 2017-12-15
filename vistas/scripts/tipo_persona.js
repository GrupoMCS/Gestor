var tabla;

//Funcion que se ejecuta al inicio
function init(){
    mostrarform(false);
    listar();

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
        $("#btnGuardar").prop("disabled", false);
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
    tabla=$('#tbllistado').dataTable({
        "aProcessing": true, //Activamos el procesamiento del datatables
        "aServerSide": true, //Paginacion y filtrado realizados por el servidor
        dom: 'Bfrtip', //Definimos los elementos del control de tabla
        buttons:[
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdf'
        ],
        "ajax":{
            url: '../../../../ajax/tipo_persona.php?op=listar',
            type: "get",
            dataType: "json",
            error: function(e){
                console.log(e.responseText);
            }
        },
        "bDestroy":true,
        "iDisplayLength": 5,//Paginacion
        "order": [[0,"desc"]]
    }).DataTabe();
}

init();