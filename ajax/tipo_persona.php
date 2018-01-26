<?php
    require_once "../modelos/Tipo_persona.php";

    $tipopersona = new Tipo_persona();

    $idtipo_persona=isset($_POST["idtipo_persona"])?limpiarCadena($_POST["idtipo_persona"]):"";
    $detalle=isset($_POST["detalleTPersona"])?limpiarCadena($_POST["detalleTPersona"]):"";
    
    switch ($_GET["op"]){

        case 'guardaryeditarTPersona':
            if(empty($idtipo_persona)){
                $rspta=$tipopersona->insertarTPersona($detalle);
                echo $rspta?"El \"Tipo de persona\" fue registrado." : "El \"Tipo de persona\" no se registró";
            }
            else{
                $rspta=$tipopersona->editarTPersona($idtipo_persona,$detalle);
                echo $rspta?"El \"Tipo de persona\" se actualizó." : "El \"Tipo de persona\" no se actualizó";
            }

        break;

        case 'desactivarTPersona':
            $rspta=$tipopersona->desactivarTPersona($idtipo_persona);
            //echo $rspta ? "Tipo de persona se desactivó" : "Tipo de persona no se desactivó";
        break;

        case 'activarTPersona':
            $rspta=$tipopersona->activarTPersona($idtipo_persona);
            //echo $rspta ? "Tipo de persona se activó" : "Tipo de persona no se activó";
        break;

        case 'mostrarTPersona':
            $rspta=$tipopersona->mostrarTPersona($idtipo_persona);
            //Codificar el resultado utilizando json
            echo json_encode($rspta);
        break;

        case 'listarTPersona':
            $rspta=$tipopersona->listarTPersona();
            //Vamos a declarar un array
            $data= Array();

            while ($reg=$rspta->fetch_object()){
                $data[]=array(
                    "0"=>($reg->estatus)?'<button class="btn btn-warning" onclick="mostrarTPersona('. $reg->idtipo_persona .')"><i class="fa fa-pencil"></i></button>' . " " . '<button id="btnActivarTPersona" class="btn btn-success" onclick="desactivarTPersona('. $reg->idtipo_persona .')"><i class="fa fa-eye"></i></button>':'<button class="btn btn-warning" onclick="mostrarTPersona('. $reg->idtipo_persona .')"><i class="fa fa-pencil"></i></button>' . " " . '<button id="btnActivarTPersona" class="btn btn-danger" onclick="activarTPersona('. $reg->idtipo_persona .')"><i class="fa fa-eye-slash"></i></button>',
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