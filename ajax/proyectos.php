<?php
    require_once "../modelos/Proyectos.php";

    $proyectos = new Proyectos();

    $idproyecto = isset($_POST["idproyecto"])?limpiarCadena($_POST["idproyecto"]):"";
    $nombre = isset($_POST["nombre"])?limpiarCadena($_POST["nombre"]):"";
    $idpersona = isset($_POST["idpersona"])?limpiarCadena($_POST["idpersona"]):"";
    $idresponsable = isset($_POST["idresponsable"])?limpiarCadena($_POST["idresponsable"]):"";
    $costo = isset($_POST["costo"])?limpiarCadena($_POST["costo"]):"";
    $fecha_inicio = isset($_POST["fecha_inicio"])?limpiarCadena($_POST["fecha_inicio"]):"";
    $fecha_fin = isset($_POST["fecha_fin"])?limpiarCadena($_POST["fecha_fin"]):"";
    $identregable = isset($_POST["identregable"])?limpiarCadena($_POST["identregable"]):"";
    $idstatus = isset($_POST["idstatus"])?limpiarCadena($_POST["idstatus"]):"";


    
    switch ($_GET["op"]){

        case 'guardaryeditar':
            if(empty($idproyecto)){
                $rspta=$proyectos->insertar($nombre, $idpersona, $idresponsable, $costo, $fecha_inicio, $fecha_fin, $identregable,$idstatus);
                echo $rspta?"El proyecto fue registrado." : "El proyecto no se registró";
            }
            else{
                $rspta=$proyectos->editar($idproyecto,$nombre, $idpersona, $idresponsable, $costo, $fecha_inicio, $fecha_fin, $identregable,$idstatus);
                echo $rspta?"El proyecto se actualizó." : "El proyecto no se actualizó";
            }

        break;
        /*
        case 'desactivar':
            $rspta=$tipopersona->desactivar($idtipo_persona);
            //echo $rspta ? "Tipo de persona se desactivó" : "Tipo de persona no se desactivó";
        break;

        case 'activar':
            $rspta=$tipopersona->activar($idtipo_persona);
            //echo $rspta ? "Tipo de persona se activó" : "Tipo de persona no se activó";
        break;
        */
        case 'mostrar':
            $rspta=$proyectos->mostrar($idproyecto);
            //Codificar el resultado utilizando json
            echo json_encode($rspta);
        break;

        case 'listarActivos':
            $rspta=$proyectos->listarActivos();
            //Vamos a declarar un array
            $data= Array();

            $rowdata=array();
            $i=0;
                    while ($row = $rspta->fetch_array())
                    {
                        $rowdata[$i]=$row;
                        $i++;           
                    }

                
                echo json_encode($rowdata);
        break;

        case 'listarInactivos':
            $rspta=$proyectos->listarInactivos();

            //$result = $con->query($sql);

            $rowdata=array();
            $i=0;
                    while ($row = $rspta->fetch_array())
                    {
                        $rowdata[$i]=$row;
                        $i++;           
                    }
            echo json_encode($rowdata);
        break;
    }
?>