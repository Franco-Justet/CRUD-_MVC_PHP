<?php

require_once './settings/db.php'; //inclusión del script de conexión

class Directores {
    protected $db;

    
    public function _construct(){
        //Dentro del constructor establecemos la instancia a la conexion y asignamos esto al atriburo db.
        $conection = new db;
        $this->db = connection->connect();
    }
// Operaciones Read
    public function get(){
        //Función para obtener todos los elementos de la tabla.
        $query = "SELECT * FROM directores"; //guardamos la consulta dentro de una variable
        $stmt = $this->db->prepare($query); //prepara la consulta
        $stmt->execute(); //ejecuta la consulta

        if($stmt->error){
            return ['message'=>'Error en la lectura']; //devolvemos si hay un error en la lectura
        }

        $res = $stmt->get_result(); //Obtenemos los resultados
        $data_arr = [];

        if ($res->num_rows > 0) {
            while ($data = $res->fetch_assoc()) { // obtenemos los resultados en forma de arreglo asociativo
                array_push($data_arr, $data); //guardamos los resultados dentro de un arreglo
            }
            return $data_arr; // devolvemos el arreglo con toda la información
        }
        return ['message'=>'sin datos'];
    }
}
class Peliculas {
    protected $db;

    public function _construct(){
        //Dentro del constructor establecemos la instancia a la conexion y asignamos esto al atriburo db.
        $conection = new db;
        $this->db = connection->connect();
    }
// Operaciones Read
    public function get(){
        //Función para obtener todos los elementos de la tabla.
        $query = "SELECT nombre FROM peliculas where id = (dato del id buscado)"; //guardamos la consulta dentro de una variable
        $stmt = $this->db->prepare($query); //prepara la consulta
        $stmt->execute(); //ejecuta la consulta

        if($stmt->error){
            return ['message'=>'Error en la lectura']; //devolvemos si hay un error en la lectura
        }

        $res = $stmt->get_result(); //Obtenemos los resultados
        $data_arr = [];

        if ($res->num_rows > 0) {
            while ($data = $res->fetch_assoc()) { // obtenemos los resultados en forma de arreglo asociativo
                array_push($data_arr, $data); //guardamos los resultados dentro de un arreglo
            }
            return $data_arr; // devolvemos el arreglo con toda la información
        }
        return ['message'=>'sin datos'];
    }
}
class Generos {
    protected $db;

    public function _construct(){
        //Dentro del constructor establecemos la instancia a la conexion y asignamos esto al atriburo db.
        $conection = new db;
        $this->db = connection->connect();
    }
// Operaciones Read
    public function get(){
        //Función para obtener todos los elementos de la tabla.
        $query = "SELECT * FROM generos"; //guardamos la consulta dentro de una variable
        $stmt = $this->db->prepare($query); //prepara la consulta
        $stmt->execute(); //ejecuta la consulta

        if($stmt->error){
            return ['message'=>'Error en la lectura']; //devolvemos si hay un error en la lectura
        }

        $res = $stmt->get_result(); //Obtenemos los resultados
        $data_arr = [];

        if ($res->num_rows > 0) {
            while ($data = $res->fetch_assoc()) { // obtenemos los resultados en forma de arreglo asociativo
                array_push($data_arr, $data); //guardamos los resultados dentro de un arreglo
            }
            return $data_arr; // devolvemos el arreglo con toda la información
        }
        return ['message'=>'sin datos'];
    }
}