<?php
    //Incluimos inicialmente la conexion a la base de datos
    require "../config/Conexion.php";

    Class Tipo_persona{
        //Implementamos nuestro constructor
        public function __construct(){

        }

        //Implementamos un metodo para insertar registros
        public function insertar($detalle){
            $sql="INSERT into tipo_persona (detalle, status)
                    VALUES ('$detalle', 1)"; //status 1=activo 0=inactivo
            return ejecutarConsulta($sql);
        }

        //Implementamos metodo para editar registros
        public function editar($idtipo_persona, $detalle){
            $sql="UPDATE tipo_persona SET detalle='$detalle'
                    WHERE idtipo_persona='$idtipo_persona'";
            return ejecutarConsulta($sql);
        }

        //Implementamos un metodo para desactivar los tipos de persona
        public function desactivar($idtipo_persona){
            $sql="UPDATE tipo_persona SET status=0 
                    WHERE idtipo_persona='$idtipo_persona'";
            return ejecutarConsulta($sql);
        }

        //Implementamos un metodo para activar los tipos de persona
        public function activar($idtipo_persona){
            $sql="UPDATE tipo_persona SET status=1 
                    WHERE idtipo_persona='$idtipo_persona'";
            return ejecutarConsulta($sql);
        }

        //Implementar un metodo para mostrar los datos
        public function mostrar($idtipo_persona){
            $sql="SELECT * FROM tipo_persona 
                    WHERE idtipo_persona='$idtipo_persona'";
            return ejecutarConsultaSimpleFila($sql);
        }

        public function listar(){
            $sql="SELECT * FROM tipo_persona";
            return ejecutarConsulta($sql);
        }
    }
?>