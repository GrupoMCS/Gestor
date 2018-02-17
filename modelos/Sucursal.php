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
        public function editarSucursales($idsucursal, $iddireccion, $nombre, $telefono, $calle, $numint, $numext, $colonia, $cp, $pais, $estado, $municipio){
            $sql1="UPDATE direccion SET calle='$calle', numint='$numint', numex='$numext', colonia='$colonia', cp='$cp', pais='$pais', estado='$estado', municipio='$municipio' WHERE iddireccion='$iddireccion'";
            $rspta="";
            $sql2="UPDATE sucursal SET nombre='$nombre', telefono='$telefono' WHERE idsucursal='$idsucursal'";
            if(ejecutarConsulta($sql1)){
                $rspta=ejecutarConsulta($sql2);
                
                return $rspta;
            }
            else{
                return $rspta;
            }
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
            $sql="SELECT suc.idsucursal, suc.iddireccion, suc.nombre, suc.telefono, dir.calle, dir.numint, dir.numex, dir.colonia, dir.cp, dir.pais, dir.estado, dir.municipio
                FROM sucursal AS suc
                INNER JOIN direccion AS dir ON suc.iddireccion=dir.iddireccion
                WHERE suc.idsucursal='$idsucursal'";
            return ejecutarConsultaSimpleFila($sql);
        }

        public function listarSucursales(){
            $sql="SELECT * FROM sucursal";
            return ejecutarConsulta($sql);
        }

        //Implementamos un metodo para insertar la direccion de las sucursales
        public function insertarDirSucursales($nombre, $telefono, $calle, $numint, $numext, $colonia, $cp, $pais, $estado, $municipio){
            
            $sql1="INSERT INTO direccion (calle, numint, numex, colonia, cp, pais, estado, municipio)
                VALUES('$calle', '$numint', '$numext', '$colonia', '$cp', '$pais', '$estado', '$municipio')";
            $idQuery=ejecutarConsulta_retornarID($sql1);
            
            $sql2="INSERT INTO sucursal (iddireccion, nombre, telefono, estado)
                    VALUES ('$idQuery','$nombre', '$telefono', '1')";

            return ejecutarConsulta($sql2);
        }
    }
?>