<?php
    //Incluimos inicialmente la conexion a la base de datos
    require "../config/Conexion.php";

    Class Sucursal{
        //Implementamos nuestro constructor
        public function __construct(){

        }

        //Implementamos un metodo para insertar registros //falta agregar campos de la insercion de la direccion
        public function insertarSucursales($nombre, $telefono){
            $sql="INSERT into sucursal (iddireccion, nombre, telefono,estado)
                    VALUES ('1','$nombre', '$telefono', '1')"; //status 1=activo 0=inactivo
            return ejecutarConsulta($sql);
        }

        //Implementamos metodo para editar registros
        public function editarSucursales($idsucursal, $nombre, $telefono){
            $sql="UPDATE sucursal SET nombre='$nombre', telefono='$telefono'
                    WHERE idsucursal='$idsucursal'";
            return ejecutarConsulta($sql);
        }

        //Implementamos un metodo para desactivar los tipos de persona
        public function desactivarSucursales($idsucursal){
            $sql="UPDATE sucursal SET estado='0' 
                    WHERE idsucursal='$idsucursal'";
            return ejecutarConsulta($sql);
        }

        //Implementamos un metodo para activar los tipos de persona
        public function activarSucursales($idsucursal){
            $sql="UPDATE sucursal SET estado='1'
                    WHERE idsucursal='$idsucursal'";
            return ejecutarConsulta($sql);
        }

        //Implementar un metodo para mostrar los datos
        public function mostrarSucursales($idsucursal){
            $sql="SELECT * FROM sucursal 
                    WHERE idsucursal='$idsucursal'";
            return ejecutarConsultaSimpleFila($sql);
        }

        public function listarSucursales(){
            $sql="SELECT * FROM sucursal";
            return ejecutarConsulta($sql);
        }

        //Implementamos un metodo para insertar la direccion de las sucursales
        public function insertarDirSucursal($nombre, $telefono, $calle, $numint, $numext, $colonia, $cp, $pais, $estado, $municipio){
            $sql="INSERT into sucursal ('ejecutarConsulta_retornarID($sql)', nombre, telefono,estado)
                    VALUES ('1','$nombre', '$telefono', '1')"; //status 1=activo 0=inactivo
            return ;
        }
    }
?>