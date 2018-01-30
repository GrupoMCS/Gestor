<?php
    require_once "../modelos/Sucursal.php";

    $sucursales = new Sucursal();

    $idsucursal=isset($_POST["idsucursal"])?limpiarCadena($_POST["idsucursal"]):"";
    $nombre=isset($_POST["nombre"])?limpiarCadena($_POST["nombre"]):"";
    $estado=isset($_POST["estado"])?limpiarCadena($_POST["estado"]):"";
    $telefono=isset($_POST["telefono"])?limpiarCadena($_POST["telefono"]):"";
    $iddireccion=isset($_POST["iddireccion"])?limpiarCadena($_POST["iddireccion"]):"";
    
    switch ($_GET["op"]){

        case 'guardaryeditarSucursales':
            if(empty($idsucursal)){
                $rspta=$sucursales->insertarSucursales($nombre, $telefono);
                
                echo $rspta?"La sucursal se registro correctamente." : "La sucursal no se registró";
            }
            else{
                $rspta=$sucursales->editarSucursales($idsucursal,$nombre, $telefono);
                echo $rspta?"La sucursal se actualizó." : "La sucursal no se actualizó";
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

        case 'mostrarDirSucursales':
            $rspta=$sucursales->mostrarDirSucursales($iddireccion);
            //Codificar el resultado utilizando json
            echo $rspta;
            //echo json_encode($rspta);
        break;

        case 'listarSucursales':
            $rspta=$sucursales->listarSucursales();
            //Vamos a declarar un array
            
            $data= Array();

            while ($reg=$rspta->fetch_object()){
                $data[]=array(
                    "0"=>($reg->estado)?'<button class="btn btn-warning" onclick="mostrarSucursales('. $reg->idsucursal .')"><i class="fa fa-pencil"></i></button>' . " " . '<button id="btnActivarSucursales" class="btn btn-success" onclick="desactivarSucursales('. $reg->idsucursal .')"><i class="fa fa-eye"></i></button>'." ".'<button class="btn btn-info" onclick="mostrarDirSucursales('. $reg->iddireccion .')"><i class="fa fa-map-marker"> </i></button>'
                    :
                    '<button class="btn btn-warning" onclick="mostrarSucursales('. $reg->idsucursal .')"><i class="fa fa-pencil"></i></button>' . " " . '<button id="btnActivarSucursales" class="btn btn-danger" onclick="activarSucursales('. $reg->idsucursal .')"><i class="fa fa-eye-slash"></i></button>'." ".'<button class="btn btn-info" onclick="mostrarDirSucursales('. $reg->iddireccion .')"><i class="fa fa-map-marker"></i></button>',
                    "1"=>$reg->nombre,
                    "2"=>$reg->telefono
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