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

        case 'listar':
            $rspta=$proyectos->listar();
            //Vamos a declarar un array
            $data= Array();

            while ($reg=$rspta->fetch_object()){
                $data[]=array(

                    "0"=>'<div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#proyectos_activos" href="'. $reg->$idproyecto .'">
                                <h4 class="panel-title">
                                    <a>'. $reg->nombre .'</a>
                                    <div class="progress">
                                        <div class="progress-bar sm progress-bar-striped active" role="progressbar"
                                            style="width:40%">'.$reg->$idstatus.'
                                        </div>
                                    </div>
                                </h4>
                            </div>
                            <div id="'. $reg->$idproyecto .'" class="panel-collapse collapse">
                                <div  class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3"><strong>Nombre Proyecto:</strong></div>
                                        <div class="col-md-3">'.$reg->nombre.'</div>
                                        <div class="col-md-3"><strong>Fase del Proyecto:</strong></div>
                                        <div class="col-md-3">'.$reg->$idstatus.'</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"><strong>Cliente:</strong></div>
                                        <div class="col-md-3">'.$reg->$idpersona.'</div>
                                        <div class="col-md-3"><strong>Entregables:</strong></div>
                                        <div class="col-md-3">'.$reg->$entregable.'</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"><strong>Responsable:</strong></div>
                                        <div class="col-md-3">'.$reg->$idresponsable.'</div>
                                        <div class="col-md-3"><strong>Fecha de Inicio del Proyecto:</strong></div>
                                        <div class="col-md-3">'.$reg->$fecha_inicio.'</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"><strong>Costo Presupuestado:</strong></div>
                                        <div class="col-md-3">'.$reg->$costo.'</div>
                                        <div class="col-md-3"><strong>Fecha Limite de Entrega:</strong></div>
                                        <div class="col-md-3">'.$reg->fecha_fin.'</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"><a href="#">Ver Más Detalles...</a></div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3"><strong></strong></div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>'
                    );
            }
                /*
                $results = array(
                    "sEcho"=>1, //Información para el datatables
                    "iTotalRecords"=>count($data), //enviamos el total registros al datatable
                    "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
                    "aaData"=>$data);
                */
                //echo json_encode();
        break;
    }

?>