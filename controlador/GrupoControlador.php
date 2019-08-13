<?php 
include_once  '../modelo/GrupoDao.php';

/**
 * 
 */
class GrupoControlador
{
	  //para crear usuario (:cedula:,nombre,:apellidos,:fecha_nacimiento,:telefono:email,:password,:privilegio)
    public function crearGrupo($nombre)
    {
        $obj_grupo = new Grupo();

        $obj_grupo->setNombregrupo($nombre);
       
     
        return GrupoDao::crearGrupo($obj_grupo);
    }
      //imprimir todos los usuarios

    public function getGrupos()
    {
        return GrupoDao::getGrupos();
    }
    
     public function actualizarGrupo($nombre, $id){
        $obj_grupo = new Grupo();

            
        $obj_grupo->setNombregrupo($nombre);
         $obj_grupo->setId_grupo($id);
      
      
        return GrupoDao::actualizarGrupo($obj_grupo);

  }

  //para imprimir 
    public function getGruposId($id)
    {
        return GrupoDao::getGruposId($id);
    }

    //para eliminar el usuario
    public function eliminarGrupo($id)
    {
        return GrupoDao::eliminarGrupo($id);
    }

}



