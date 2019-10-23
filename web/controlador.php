<?php

require_once '../libs/Smarty.class.php';
require_once '../conexion/Conexion.php';
require_once '../dao/DaoAlumno.php';

session_start();
$operacion = $_REQUEST['operacion'];
$objSmarty = new Smarty();
$strTemplate_dir = "views";
$strCompile_dir = "templates_c";
$strCache_dir = "cache";
$strConfig_dir = "configs";
$objSmarty->template_dir = $strTemplate_dir;
$objSmarty->compile_dir = $strCompile_dir;
$objSmarty->cache_dir = $strCache_dir;
$objSmarty->config_dir = $strConfig_dir;

switch ($operacion) {
    case "inicio":
        $strTemplate_dir = "home.tpl";
        $objSmarty->display($strTemplate_dir);
        break;
    case "listadoalumnos":
        try {
            $dao = new DaoAlumno();
            $listadoalumnos = $dao->listadoAlumnos();
//                Asignar atributos a la sesión
            $objSmarty->assign('listadoalumnos', $listadoalumnos);
//            Redireccionar a la plantilla listadoalumnos
//              Ponemos la plantilla a la que queremos redirigir
            $strTemplate_dir = "listadoalumnos.tpl";
//              Redireccionamos
            $objSmarty->display($strTemplate_dir);
        } catch (Exception $ex) {
            
        }
        break;
    case "redireccioneditar":
        try{
            $dao = new DaoAlumno();
            $alumno = $dao->buscarPorDni($_REQUEST['alumno']);
            $objSmarty->assign('alumno', $alumno);
        } catch (PDOException $pdo){
            $objSmarty->assign('error', $pdo->getMessage());
        } catch (Exception $ex) {
            $objSmarty->assign('error', $ex->getMessage());
        }
        $strTemplate_dir = "modificaralumno.tpl";
        $objSmarty->display($strTemplate_dir);
        break;
    case "modificaralumno":
        try{
            $dao = new DaoAlumno();
            $alumno = new classAlumno($_REQUEST['dni'], $_REQUEST['nombre'], $_REQUEST['curso']);
            $alumno = $dao->modificarAlumno($alumno);
            $objSmarty->assign('confirmacion', 'Alumno modificado correctamente.');
            $objSmarty->assign('alumno', $alumno);
        } catch (PDOException $pdo) {
            $objSmarty->assign('error', $pdo->getMessage());
        } catch (Exception $ex){
            $objSmarty->assign('error', $ex->getMessage());
        }
        $strTemplate_dir = "modificaralumno.tpl";
        $objSmarty->display($strTemplate_dir);
        break;
    case "cancelar":
        $objSmarty->display('home.tpl');
        break;
    case "eliminaralumno":
        try{
            $dao = new DaoAlumno();
            $dao->eliminarAlumnos($_REQUEST['alumno']);
            $objSmarty->assign('confirmacion','Alumno eliminado con éxito.');
            $objSmarty->assign('listadoalumnos', $dao->listadoAlumnos());
        } catch (PDOException $pdo) {
            $objSmarty->assign('error', $pdo->getMessage());
        } catch (Exception $ex){
            $objSmarty->assign('error', $ex->getMessage());
        }
        $objSmarty->display('listadoalumnos.tpl');
        break;
    case "redireccionaltaalumno":
        $objSmarty->display('nuevoalumno.tpl');
        break;
    case "altaalumno":
        try{
            $dao = new DaoAlumno();
            $dao->altaAlumno(new classAlumno($_REQUEST['dni'], $_REQUEST['nombre'], $_REQUEST['curso']));
            $objSmarty->assign('confirmacion', 'Alumno añadido a la base de datos.');
        }catch (ExcepcionesAlumno $ea){
            $objSmarty->assign('error', $ea->getMessage());
        } catch (PDOException $pdo) {
            $objSmarty->assign('error', $pdo->getMessage());
        } catch (Exception $ex){
            $objSmarty->assign('error', $ex->getMessage());
        }
        $objSmarty->display('nuevoalumno.tpl');
        break;
}
