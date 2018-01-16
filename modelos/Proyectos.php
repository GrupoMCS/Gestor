<?php
    //Incluimos inicialmente la conexion a la base de datos
    require "../config/Conexion.php";

    Class Proyectos{
        //Implementamos nuestro constructor
        public function __construct(){

        }

        //Implementamos un metodo para insertar registros
        public function insertar($nombre, $idpersona, $idresponsable, $costo, $fecha_inicio, $fecha_fin, $identregable,$idstatus){
            $sql="INSERT into proyecto (nombre, idpersona, idresponsable, costo, fecha_inicio, fecha_fin, identregable,idstatus)
                    VALUES ('$nombre', '$idpersona', '$idresponsable', '$costo', '$fecha_inicio', '$fecha_fin', '$identregable','$idstatus')"; 
            return ejecutarConsulta($sql);
        }

        //Implementamos metodo para editar registros
        public function editar($idproyecto,$nombre, $idpersona, $idresponsable, $costo, $fecha_inicio, $fecha_fin, $identregable,$idstatus){
            $sql="UPDATE proyecto SET nombre='$nombre', idpersona='$idpersona', idresponsable='$idresponsable', costo='$costo', fecha_inicio='$fecha_inicio', fecha_fin='$fecha_fin', identregable='$identregable' /*,idstatus='$idstatus'*/
                    WHERE idproyecto='$idproyecto'";
            return ejecutarConsulta($sql);
        }
        /*
        //Implementamos un metodo para desactivar los proyectos
        public function desactivar($idtipo_persona){
            $sql="UPDATE tipo_persona SET estatus='0' 
                    WHERE idtipo_persona='$idtipo_persona'";
            return ejecutarConsulta($sql);
        }

        //Implementamos un metodo para activar los proyetos
        public function activar($idtipo_persona){
            $sql="UPDATE tipo_persona SET estatus='1'
                    WHERE idtipo_persona='$idtipo_persona'";
            return ejecutarConsulta($sql);
        }
        */

        //Implementar un metodo para mostrar los datos
        public function mostrar($idproyecto){
            $sql="SELECT * FROM proyecto 
                    WHERE idproyecto='$idproyecto'";
            return ejecutarConsultaSimpleFila($sql);
        }

        public function listar(){
            $sql="SELECT * FROM proyecto";
            return ejecutarConsulta($sql);
        }
    }
?>