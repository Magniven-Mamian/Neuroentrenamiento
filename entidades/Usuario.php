<?php

class Usuario
{

    private $id;
    private $cedula;
    private $nombre;
    private $apellidos;
    private $fecha_nacimiento;
    private $telefono;
    private $genero;
    private $email;
    private $password;
    private $privilegio;
    private $fecha_registro;
   //para los get y set de id
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
//para los get y set de cedula
    public function getCedula()
    {
        return $this->cedula;
    }

    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    //para los get y set de nombre
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    //para los get y set de apellidos
    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    //para los get y set de fecha_naciemiento
    public function getFecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }

    public function setFecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }
    //para los get y set de fecha_naciemiento
    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    //para los get y set de genero
    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }
    //para los get y set de email
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

//para los get y set de password
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
//para los get y set de privilegio
    public function getPrivilegio()
    {
        return $this->privilegio;
    }

    public function setPrivilegio($privilegio)
    {
        $this->privilegio = $privilegio;
    }
//para los get y set de fecha_registro
    public function getFecha_registro()
    {
        return $this->fecha_registro;
    }

    public function setFecha_registro($fecha_registro)
    {
        $this->fecha_registro = $fecha_registro;
    }

}
