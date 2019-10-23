<?php
/* Smarty version 3.1.33, created on 2019-05-06 12:47:20
  from 'C:\xampp\htdocs\Proyectos PHP - LARAVEL -REACTS\AgendaSmarty\web\views\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd010b823e1a5_90182016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2822b2b569d2e9c83de85a712fd5a8ea269859c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos PHP - LARAVEL -REACTS\\AgendaSmarty\\web\\views\\base.tpl',
      1 => 1554193334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd010b823e1a5_90182016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es">    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10598711165cd010b8238cb9_72338279', 'title');
?>
</title>
        <link rel="icon" type="image/x-icon" href="../resources/img/favicon.ico">
        <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="../resources/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../resources/css/estilo.css" />
        <?php echo '<script'; ?>
 src="../resources/js/jquery-1.10.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../resources/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13294542065cd010b823a9f4_96553651', 'head');
?>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">            
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                                aria-expanded="false" aria-controls="navbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="../index.php">
                            <img alt="home" src="../resources/img/logo.png">
                        </a>
                    </div> 
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="/AgendaSmarty/index.php"><span class="glyphicon glyphicon-home hidden-sm"></span>&nbsp;Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user hidden-sm"></span>&nbsp;Alumnos<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="controlador.php?operacion=listadoalumnos">Listado</a></li>
                                    <li><a href="../web/controlador.php?operacion=redireccionaltaalumno">Nuevo</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div
                </div> 
                </div>
            </nav>
        </header>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7734384725cd010b823c108_03423800', 'body');
?>
 
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5333663475cd010b823d2c6_49391482', 'footer');
?>

    </body>
</html>
<?php }
/* {block 'title'} */
class Block_10598711165cd010b8238cb9_72338279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10598711165cd010b8238cb9_72338279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Gestion de Alumnos<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_13294542065cd010b823a9f4_96553651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_13294542065cd010b823a9f4_96553651',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_7734384725cd010b823c108_03423800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7734384725cd010b823c108_03423800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_5333663475cd010b823d2c6_49391482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_5333663475cd010b823d2c6_49391482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="footer navbar-fixed-bottom center-text"> 
                Copyright &copy; VS2DAW 2018
            </div>
        <?php
}
}
/* {/block 'footer'} */
}
