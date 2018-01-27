<?php
    require_once "../modelos/Tipo_persona.php";

    $sucursales = new Sucursal();

    $idsucursal=isset($_POST["idsucursal"])?limpiarCadena($_POST["idsucursal"]):"";
    $nombre=isset($_POST["nombre"])?limpiarCadena($_POST["nombre"]):"";
    $estado=isset($_POST["estado"])?limpiarCadena($_POST["estado"]):"";
    
    switch ($_GET["op"]){

        case 'guardaryeditarSucursales':
            if(empty($idsucursal)){
                $rspta=$sucursales->insertarSucursales($nombre);
                echo $rspta?"El \"Tipo de persona\" fue registrado." : "El \"Tipo de persona\" no se registró";
            }
            else{
                $rspta=$sucursales->editarSucursales($idsucursal,$nombre);
                echo $rspta?"El \"Tipo de persona\" se actualizó." : "El \"Tipo de persona\" no se actualizó";
            }

        break;

        case 'desactivarSucursales':
            $rspta=$sucursales->desactivarSucursales($idsucursal);
            //echo $rspta ? "Tipo de persona se desactivó" : "Tipo de persona no se desactivó";
        break;

        case 'activarSucursales':
            $rspta=$sucursales->activarSucursales($idsucursal);
            //echo $rspta ? "Tipo de persona se activó" : "Tipo de persona no se activó";
        break;

        case 'mostrarSucursales':
            $rspta=$sucursales->mostrarSucursales($idsucursal);
            //Codificar el resultado utilizando json
            echo json_encode($rspta);
        break;

        case 'listarSucursales':
            $rspta=$sucursales->listarSucursales();
            //Vamos a declarar un array
            $data= Array();

            while ($reg=$rspta->fetch_object()){
                $data[]=array(
                    "0"=>($reg->idsucursal)?'<button class="btn btn-warning" onclick="mostrarSucursales('. $reg->idsucursal .')"><i class="fa fa-pencil"></i></button>' . " " . '<button id="btnActivarSucursales" class="btn btn-success" onclick="desactivarSucursales('. $reg->idsucursal .')"><i class="fa fa-eye"></i></button>':'<button class="btn btn-warning" onclick="mostrarSucursales('. $reg->idsucursal .')"><i class="fa fa-pencil"></i></button>' . " " . '<button id="btnActivarSucursales" class="btn btn-danger" onclick="activarSucursales('. $reg->idsucursal .')"><i class="fa fa-eye-slash"></i></button>',
                    "1"=>$reg->nombre,
                    "2"=>$reg->estado
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