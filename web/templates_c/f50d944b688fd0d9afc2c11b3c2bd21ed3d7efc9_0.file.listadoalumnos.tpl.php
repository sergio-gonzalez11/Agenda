<?php
/* Smarty version 3.1.33, created on 2019-04-02 10:18:56
  from 'C:\xampp\htdocs\AgendaSmarty\web\views\listadoalumnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca31af0caeec7_66937558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f50d944b688fd0d9afc2c11b3c2bd21ed3d7efc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AgendaSmarty\\web\\views\\listadoalumnos.tpl',
      1 => 1554193134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca31af0caeec7_66937558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19221005635ca31af0c22d99_01811147', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16861115605ca31af0c25940_09896654', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6368325385ca31af0cae0a6_56401409', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base.tpl');
}
/* {block 'title'} */
class Block_19221005635ca31af0c22d99_01811147 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19221005635ca31af0c22d99_01811147',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Listado de Alumnos<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_16861115605ca31af0c25940_09896654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16861115605ca31af0c25940_09896654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <?php if (isset($_smarty_tpl->tpl_vars['confirmacion']->value)) {?>
            <section class="row">
                <section class="col-md-6 col-md-offset-3 alert alert-success" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['confirmacion']->value;?>

                </section>
            </section>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
            <section class="row">
                <section class="col-md-6 col-md-offset-3 alert alert-danger" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </section>
            </section>
        <?php }?>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-success">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Listado de Alumnos</div>
                    <div class="panel-body">
                        <!-- Table -->
                        <table class="table table-bordered table-responsive  table-condensed table-hover ">
                            <thead>
                                <tr >
                                    <th>&nbsp;</th>                                
                                    <th>&nbsp;</th>
                                    <th scope="col">Dni</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Curso</th>
                                </tr>
                            </thead>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listadoalumnos']->value, 'alumno');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alumno']->value) {
?>
                                <tr class="espera">
                                    <td class="text-center"><a href="controlador.php?operacion=redireccioneditar&alumno=<?php echo $_smarty_tpl->tpl_vars['alumno']->value->getDni();?>
"<span class="glyphicon glyphicon-pencil"></span></a></td>
                                    <td class="center-text"><a href="controlador.php?operacion=eliminaralumno&alumno=<?php echo $_smarty_tpl->tpl_vars['alumno']->value->getDni();?>
"
                                                               onclick="return confirm('¿Desea eliminar este alumno?')"
                                                               <span class="glyphicon glyphicon-trash"></span></a></td>
                                    <td class="center-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alumno']->value->getDni(), ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alumno']->value->getNombre(), ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    <td class="text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alumno']->value->getCurso(), ENT_QUOTES, 'UTF-8', true);?>
</td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </table>
                    </div>
                </div> 
            </div>
        </div>
    </div>                    
<?php
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_6368325385ca31af0cae0a6_56401409 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6368325385ca31af0cae0a6_56401409',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="footer navbar-fixed-bottom text-center"> 
        <h3> Sergio González Ruano &copy; 2DAW 2018</h3>
    </div>
<?php
}
}
/* {/block 'footer'} */
}
