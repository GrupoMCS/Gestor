<?php
    //Incluimos inicialmente la conexion a la base de datos
    require "../config/Conexion.php";

    Class Status_proy{
        //Implementamos nuestro constructor
        public function __construct(){

        }

        //Implementamos un metodo para insertar registros
        public function insertarEProyectos($detalle){
            $sql="INSERT into status (detalle, estatus)
                    VALUES ('$detalle', '1')"; //status 1=activo 0=inactivo
            return ejecutarConsulta($sql);
        }

        //Implementamos metodo para editar registros
        public function editarEProyectos($idstatus, $detalle){
            $sql="UPDATE status SET detalle='$detalle'
                    WHERE idstatus='$idstatus'";
            return ejecutarConsulta($sql);
        }

        //Implementamos un metodo para desactivar los tipos de persona
        public function desactivarEProyectos($idstatus){
            $sql="UPDATE status SET estatus='0' 
                    WHERE idstatus='$idstatus'";
            return ejecutarConsulta($sql);
        }

        //Implementamos un metodo para activar los tipos de persona
        public function activarEProyectos($idstatus){
            $sql="UPDATE status SET estatus='1'
                    WHERE idstatus='$idstatus'";
            return ejecutarConsulta($sql);
        }

        //Implementar un metodo para mostrar los datos
        public function mostrarEProyectos($idstatus){
            $sql="SELECT * FROM status 
                    WHERE idstatus='$idstatus'";
            return ejecutarConsultaSimpleFila($sql);
        }

        public function listarEProyectos(){
            $sql="SELECT * FROM status";
            return ejecutarConsulta($sql);
        }
    }
?>