<?php
    require_once "../modelos/Status_proy.php";

    $status_proy = new Status_proy();

    $idstatus=isset($_POST["idstatus"])?limpiarCadena($_POST["idstatus"]):"";
    $detalle=isset($_POST["detalleEProyectos"])?limpiarCadena($_POST["detalleEProyectos"]):"";
    
    switch ($_GET["op"]){

        case 'guardaryeditarEProyectos':
            if(empty($idstatus)){
                $rspta=$status_proy->insertarEProyectos($detalle);
                echo $rspta?"El \"Tipo de persona\" fue registrado." : "El \"Tipo de persona\" no se registró";
            }
            else{
                $rspta=$status_proy->editarEProyectos($idstatus,$detalle);
                echo $rspta?"El \"Tipo de persona\" se actualizó." : "El \"Tipo de persona\" no se actualizó";
            }

        break;

        case 'desactivarEProyectos':
            $rspta=$status_proy->desactivarEProyectos($idstatus);
            //echo $rspta ? "Tipo de persona se desactivó" : "Tipo de persona no se desactivó";
        break;

        case 'activarEProyectos':
            $rspta=$status_proy->activarEProyectos($idstatus);
            //echo $rspta ? "Tipo de persona se activó" : "Tipo de persona no se activó";
        break;

        case 'mostrarEProyectos':
            $rspta=$status_proy->mostrarEProyectos($idstatus);
            //Codificar el resultado utilizando json
            echo json_encode($rspta);
        break;

        case 'listarEProyectos':
            $rspta=$status_proy->listarEProyectos();
            //Vamos a declarar un array
            $data= Array();

            while ($reg=$rspta->fetch_object()){
                $data[]=array(
                    "0"=>($reg->estatus)?'<button class="btn btn-warning" onclick="mostrarEProyectos('. $reg->idstatus .')"><i class="fa fa-pencil"></i></button>' . " " . '<button id="btnActivarEProyectos" class="btn btn-success" onclick="desactivarEProyectos('. $reg->idstatus .')"><i class="fa fa-eye"></i></button>':'<button class="btn btn-warning" onclick="mostrarEProyectos('. $reg->idstatus .')"><i class="fa fa-pencil"></i></button>' . " " . '<button id="btnActivarEProyectos" class="btn btn-danger" onclick="activarEProyectos('. $reg->idstatus .')"><i class="fa fa-eye-slash"></i></button>',
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