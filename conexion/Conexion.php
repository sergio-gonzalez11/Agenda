<?php
class Conexion {
    public function getPDO(){
        $usuario='alumno';
        $password = '1234';
        try{
          $pdo=new PDO('mysql:host=localhost;dbname=agenda', $usuario, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES UTF8"));
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Poder acceder a los errores procedentes de la base de datos
          $pdo->setAttribute(PDO::ATTR_PERSISTENT, TRUE); // Hacer que la conexión sea persistente
          return $pdo;
        }catch(PDOException $e) {
            $_SESSION['errorconexion']=$e->getMessage();
            throw $e;
        }
    }
}
