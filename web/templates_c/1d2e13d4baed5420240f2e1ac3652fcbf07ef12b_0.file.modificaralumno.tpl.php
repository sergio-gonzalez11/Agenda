<?php
/* Smarty version 3.1.33, created on 2019-04-02 10:19:19
  from 'C:\xampp\htdocs\AgendaSmarty\web\views\modificaralumno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca31b07cc9f56_06556917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d2e13d4baed5420240f2e1ac3652fcbf07ef12b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AgendaSmarty\\web\\views\\modificaralumno.tpl',
      1 => 1545084985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca31b07cc9f56_06556917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13276590425ca31b07ca0916_66015043', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16257778445ca31b07ca2649_77474107', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4185374675ca31b07ca3275_69191459', 'body');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19335139135ca31b07cc90e2_96482521', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base.tpl');
}
/* {block 'head'} */
class Block_13276590425ca31b07ca0916_66015043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_13276590425ca31b07ca0916_66015043',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="../resources/js/botonesFormulario.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
/* {block 'title'} */
class Block_16257778445ca31b07ca2649_77474107 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16257778445ca31b07ca2649_77474107',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Listado de Alumnos<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_4185374675ca31b07ca3275_69191459 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4185374675ca31b07ca3275_69191459',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="container">
        <?php if (isset($_smarty_tpl->tpl_vars['confirmacion']->value)) {?>
            <section class="row">
                <section class="col-md-6 col-md-offset-3 alert alert-success" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['confirmacion']->value;?>

                </section>
            </section>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
            <section class="row">
                <section class="col-md-6 col-md-offset-3  alert alert-danger" role="alert">
                    Ocurrio un problema al modificar el alumno.
                </section>
            </section>
            <section class="row">
                <section class="col-md-6 col-md-offset-3 alert alert-danger" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </section>
            </section>
        <?php }?>
        <section class="row">
            <section class="col-md-6 col-md-offset-3 panel-group">
                <section class="panel panel-primary">
                    <section class="panel-heading">Formulario de modificación</section>
                    <section class="panel-body">
                        <form action="" id='formulario' method="POST">
                            <section class="form-group">
                                <label>DNI:</label>
                                <input class="form-control" name="dni" readonly value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alumno']->value->getDni(), ENT_QUOTES, 'UTF-8', true);?>
'>
                            </section>
                            <section class="form-group">
                                <label>Nombre:</label>
                                <input class="form-control" name="nombre" required value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alumno']->value->getNombre(), ENT_QUOTES, 'UTF-8', true);?>
'>
                            </section>
                            <section class="form-group">
                                <label>Curso:</label>
                                <input class="form-control" name="curso" required value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alumno']->value->getCurso(), ENT_QUOTES, 'UTF-8', true);?>
'>
                            </section>
                            <section class="form-group row">
                                <section class="custom-control custom-control-inline">
                                    <input type="button" id='volver' value="Cancelar" class='col-md-4 col-md-offset-1 btn btn-danger' onclick="valorOperacion()">
                                </section>
                                <section class="custom-control custom-control-inline">
                                    <input type="submit" id='confirmar' value="Modificar" class='col-md-4 col-md-offset-2 btn btn-success' onclick="return confirm('¿Está seguro que quiere modificar el ususario?')">
                                </section>
                            </section>
                            <input type='hidden' id="op" name="operacion" value="modificaralumno">
                        </form>
                    </section>
                </section>
            </section>
        </section>
    </section>
<?php
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_19335139135ca31b07cc90e2_96482521 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_19335139135ca31b07cc90e2_96482521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="footer navbar-fixed-bottom text-center"> 
        <h3> José María &copy; 2DAW 2018</h3>
    </div>
    <?php
}
}
/* {/block 'footer'} */
}
