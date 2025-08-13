<?php

class db{
    protected $host;
    protected $user;
    protected $password;
    protected $dbName;

    public function _construct(){
        $this->host = "localhost"; //como trabajamos en local usamos ese nombre
        $this->user = "root"; // este es el usuario predeterminado
        $this->password = ""; // por lo general el usuario root no tiene contraseña
        $this->dbName = "dbmvc1"; // el nombre de la base de datos no de la tabla
    }

    public function connect(){
        $con = new mysqli($this->host, $this->user, $this->password, $this->dbName) or die ("Error en la conexión");

        return $con;
    }

}
