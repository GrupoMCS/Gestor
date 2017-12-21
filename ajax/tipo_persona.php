<?php
    require_once "../modelos/Tipo_persona.php";

    $tipopersona = new Tipo_persona();

    $idtipo_persona=isset($_POST["idtipo_persona"])?limpiarCadena($_POST["idtipo_persona"]):"";
    $detalle=isset($_POST["detalle"])?limpiarCadena($_POST["detalle"]):"";
    
    switch ($_GET["op"]){

        case 'guardaryeditar':
            if(empty($idtipo_persona)){
                $rspta=$tipopersona->insertar($detalle);
                echo $rspta?"El \"Tipo de persona\" fue registrado." : "El \"Tipo de persona\" no se registró";
            }
            else{
                $rspta=$tipopersona->editar($idtipo_persona,$detalle);
                echo $rspta?"El \"Tipo de persona\" se actualizó." : "El \"Tipo de persona\" no se actualizó";
            }

        break;

        case 'desactivar':
            $rspta=$tipopersona->desactivar($idtipo_persona);
            echo $rspta ? "Tipo de persona se desactivó" : "Tipo de persona no se desactivó";
        break;

        case 'activar':
            $rspta=$tipopersona->desactivar($idtipo_persona);
            echo $rspta ? "Tipo de persona se activó" : "Tipo de persona no se activó";
        break;

        case 'mostrar':
            $rspta=$tipopersona->mostrar($idtipo_persona);
            //Codificar el resultado utilizando json
            echo json_encode($rspta);
        break;

        case 'listar':
            $rspta=$tipopersona->listar();
            //Vamos a declarar un array
            $data= Array();

            while ($reg=$rspta->fetch_object()){
                $data[]=array(
                    "0"=>'<button class="btn btn-warning" onclick="mostrar('. $reg->idtipo_persona .')"><i class="fa fa-pencil"></i></button>'.
                    '<button class="btn btn-danger" onclick="desactivar('. $reg->idtipo_persona .')"><i class="fa fa-close"></i></button>',
                    "1"=>$reg->detalle,
                    "2"=>$reg->estatus
                    );
                }
                $results = array(
                    "sEcho"=>1, //Información para el datatables
                    "iTotalRecords"=>count($data), //enviamos el total registros al datatable
                    "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
                    "aaData"=>$data);
                echo json_encode($results);
        break;
    }

?>