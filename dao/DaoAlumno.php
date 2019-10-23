<?php

// Para importar se usa require_once '';
require_once '../conexion/Conexion.php';
require_once '../entidades/classAlumno.php';
require_once '../excepciones/ExcepcionesAlumno.php';

class DaoAlumno {

    public function listadoAlumnos() {
        $conexion = new Conexion();
        $objPDO = $conexion->getPDO(); // Obtener la conexion -> devuelve un objeto pdo

        $ordenSql = "select * from alumnos order by dni";
        $statement = $objPDO->prepare($ordenSql); // El metodo prepare hace un objeto sentencia sin parametrizar
        $listaalumnos = array(); // para almacenar el listado completo de alumnos en un array que no se especifica de que tipo va a ser
        try {
            $statement->execute();
            // Creamos un objeto alumno por cada alumno almacenado en la base de 
            // datos y lo añadimos a nuestro array $listaalumnos.

            while ($fila = $statement->fetch(PDO::FETCH_ASSOC)) { // el fetch_assoc significa que cada fila de la base de datos se guarda en un array asociativo
//                                                                  el array asociativo es un array que indexa por nombre de la fila y se accede a la columna por un indice de tipo cadena que coincide con el nombre del campo
                $alumno = new classAlumno($fila{'DNI'}, $fila{'NOMBRE'}, $fila{'CURSO'});
                $listaalumnos[] = $alumno;
            }
        } catch (PDOException $e) {
            throw new PDOException($e);
        } finally {
            $statement = NULL; // para cerrar la conexión usamos estas dos órdenes.
            $objPDO = NULL;
        }
        return $listaalumnos;
    }

    public function eliminarAlumnos($dni) {
        $conexion = new Conexion();
        $objPDO = $conexion->getPDO();
        $statement = $objPDO->prepare("DELETE FROM ALUMNOS WHERE DNI=:dni");
        $statement->bindParam(':dni', $dni, PDO::PARAM_STR);
        try {
            $objPDO->beginTransaction();
            $statement->execute();
            $objPDO->commit();
        } catch (PDOException $pe) {
            $objPDO->rollBack();
            throw $pe;
        } catch (Exception $ex) {
            throw $ex;
        } finally {
            $objPDO = NULL;
            $statement = NULL;
        }
    }
    
    public function buscarPorDni($dni){
        $conexion = new Conexion();
        $objPDO = $conexion->getPDO();
        $statement = $objPDO->prepare("SELECT * FROM ALUMNOS WHERE DNI=:dni");
        $statement->bindParam(':dni', $dni);
        $alumno = array();
        $a = NULL;
        try {
            $statement->execute();
            while($fila = $statement->fetch(PDO::FETCH_ASSOC)){
                $a = new classAlumno($fila{'DNI'}, $fila{'NOMBRE'}, $fila{'CURSO'});
            }
        } catch (PDOException $pe) {
            throw $pe;
        } catch (Exception $ex) {
            throw $ex;
        } finally {
            $objPDO = NULL;
            $statement = NULL;
        }
        return $a;
    }
    
    public function altaAlumno($alumno){
        $conexion = new Conexion();
        $objPDO = $conexion->getPDO();
        try {
            $busqueda = $this->buscarPorDni($alumno->getDni());
            if($busqueda != NULL){
                throw new ExcepcionesAlumno("Ya hay un alumno con el DNI: ".$alumno->getDni()." en la base de datos.");
            }
            $ps = $objPDO->prepare("INSERT INTO ALUMNOS VALUES(:dni, :nombre, :curso)");
            $ps->bindValue(':dni', $alumno->getDni()); // dar valores a plos parametros.
            $ps->bindValue(':nombre', $alumno->getNombre());
            $ps->bindValue(':curso', $alumno->getCurso());
            $objPDO->beginTransaction(); // Iniciar la transaccion
            $ps->execute(); //ejecutar la sentencia 
            $objPDO->commit();    // confirmar transaccion
        } catch (ExcepcionesAlumno $ea) {
            throw $ea;
        } catch (PDOException $pe) {
            $objPDO->rollBack();
            throw $pe;
        } catch (Exception $ex) {
            throw $ex;
        } finally {
            $objPDO = NULL;
            $statement = NULL;
        }
    }
    
    public function modificarAlumno($alumno){
        $conexion = new Conexion();
        $objPDO = $conexion->getPDO();
        try {
            $ps = $objPDO->prepare("UPDATE ALUMNOS SET NOMBRE=:nombre, CURSO=:curso WHERE DNI=:dni");
            $ps->bindValue(':dni', $alumno->getDni()); // dar valores a plos parametros.
            $ps->bindValue(':nombre', $alumno->getNombre());
            $ps->bindValue(':curso', $alumno->getCurso());
            $objPDO->beginTransaction(); // Iniciar la transaccion
            $ps->execute(); //ejecutar la sentencia 
            $objPDO->commit();    // confirmar transaccion
        } catch (ExcepcionesAlumno $ea) {
            throw $ea;
        } catch (PDOException $pe) {
            $objPDO->rollBack();
            throw $pe;
        } catch (Exception $ex) {
            throw $ex;
        } finally {
            $objPDO = NULL;
            $statement = NULL;
        }
        return $alumno;
    }
    
}