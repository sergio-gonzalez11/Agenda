<?php
/* Smarty version 3.1.33, created on 2019-04-02 10:23:31
  from 'C:\xampp\htdocs\AgendaSmarty\web\views\nuevoalumno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca31c03ed60b4_60443269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85302aa23c0adf179203e7458ee34887a203aae5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AgendaSmarty\\web\\views\\nuevoalumno.tpl',
      1 => 1554193249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca31c03ed60b4_60443269 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7673137985ca31c03ec4273_76800181', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11890459155ca31c03ec6065_00874369', 'body');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17998835075ca31c03ed5078_52449690', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'base.tpl');
}
/* {block 'title'} */
class Block_7673137985ca31c03ec4273_76800181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7673137985ca31c03ec4273_76800181',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nuevo Alumno<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_11890459155ca31c03ec6065_00874369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11890459155ca31c03ec6065_00874369',
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
                                <input class="form-control" name="dni" required placeholder="DNI del alumno">
                            </section>
                            <section class="form-group">
                                <label>Nombre:</label>
                                <input class="form-control" name="nombre" required placeholder="Nombre del alumno">
                            </section>
                            <section class="form-group">
                                <label>Curso:</label>
                                <input class="form-control" name="curso" required placeholder="Curso">
                            </section>
                            <section class="form-group row">
                                <section class="custom-control custom-control-inline">
                                    <input type="button" id='volver' value="Cancelar" class='col-md-4 col-md-offset-1 btn btn-danger' onclick="valorOperacion()">
                                </section>
                                <section class="custom-control custom-control-inline">
                                    <input type="submit" id='confirmar' value="Registrar" class='col-md-4 col-md-offset-2 btn btn-success' onclick="return confirm('¿Está seguro que quiere registrar al alumno?')">
                                </section>
                            </section>
                            <input type='hidden' id="op" name="operacion" value="altaalumno">
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
class Block_17998835075ca31c03ed5078_52449690 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_17998835075ca31c03ed5078_52449690',
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
