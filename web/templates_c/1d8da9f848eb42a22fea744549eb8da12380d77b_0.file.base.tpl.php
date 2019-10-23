<?php
/* Smarty version 3.1.33, created on 2019-04-02 10:23:31
  from 'C:\xampp\htdocs\AgendaSmarty\web\views\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca31c03f006e8_82281364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d8da9f848eb42a22fea744549eb8da12380d77b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AgendaSmarty\\web\\views\\base.tpl',
      1 => 1554193334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca31c03f006e8_82281364 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19207677605ca31c03efd651_75285058', 'title');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19766485605ca31c03efe533_14200429', 'head');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14012157675ca31c03eff1f1_75830299', 'body');
?>
 
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16930430255ca31c03effca6_25306509', 'footer');
?>

    </body>
</html>
<?php }
/* {block 'title'} */
class Block_19207677605ca31c03efd651_75285058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19207677605ca31c03efd651_75285058',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Gestion de Alumnos<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_19766485605ca31c03efe533_14200429 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_19766485605ca31c03efe533_14200429',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_14012157675ca31c03eff1f1_75830299 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14012157675ca31c03eff1f1_75830299',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_16930430255ca31c03effca6_25306509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16930430255ca31c03effca6_25306509',
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
