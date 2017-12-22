<?php
    require_once "../modelos/Status_proy.php";

    $status_proy = new Status_proy();

    $idstatus=isset($_POST["idstatus"])?limpiarCadena($_POST["idstatus"]):"";
    $detalle=isset($_POST["detalle"])?limpiarCadena($_POST["detalle"]):"";
    
    switch ($_GET["op"]){

        case 'guardaryeditar':
            if(empty($idstatus)){
                $rspta=$status_proy->insertar($detalle);
                echo $rspta?"El \"Tipo de persona\" fue registrado." : "El \"Tipo de persona\" no se registró";
            }
            else{
                $rspta=$status_proy->editar($idstatus,$detalle);
                echo $rspta?"El \"Tipo de persona\" se actualizó." : "El \"Tipo de persona\" no se actualizó";
            }

        break;

        case 'desactivar':
            $rspta=$status_proy->desactivar($idstatus);
            //echo $rspta ? "Tipo de persona se desactivó" : "Tipo de persona no se desactivó";
        break;

        case 'activar':
            $rspta=$status_proy->activar($idstatus);
            //echo $rspta ? "Tipo de persona se activó" : "Tipo de persona no se activó";
        break;

        case 'mostrar':
            $rspta=$status_proy->mostrar($idstatus);
            //Codificar el resultado utilizando json
            echo json_encode($rspta);
        break;

        case 'listar':
            $rspta=$status_proy->listar();
            //Vamos a declarar un array
            $data= Array();

            while ($reg=$rspta->fetch_object()){
                $data[]=array(
                    "0"=>($reg->estatus)?'<button class="btn btn-warning" onclick="mostrar('. $reg->idstatus .')"><i class="fa fa-pencil"></i></button>' . " " . '<button id="btnActivar" class="btn btn-success" onclick="desactivar('. $reg->idstatus .')"><i class="fa fa-eye"></i></button>':'<button class="btn btn-warning" onclick="mostrar('. $reg->idstatus .')"><i class="fa fa-pencil"></i></button>' . " " . '<button id="btnActivar" class="btn btn-danger" onclick="activar('. $reg->idstatus .')"><i class="fa fa-eye-slash"></i></button>',
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