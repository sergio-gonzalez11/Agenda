{extends file='base.tpl'}
{block name=title}Listado de Alumnos{/block}
{block name=body}
    <div class="container">
        {if isset($confirmacion)}
            <section class="row">
                <section class="col-md-6 col-md-offset-3 alert alert-success" role="alert">
                    {$confirmacion}
                </section>
            </section>
        {/if}
        {if isset($error)}
            <section class="row">
                <section class="col-md-6 col-md-offset-3 alert alert-danger" role="alert">
                    {$error}
                </section>
            </section>
        {/if}
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

                            {foreach from=$listadoalumnos item=alumno}
                                <tr class="espera">
                                    <td class="text-center"><a href="controlador.php?operacion=redireccioneditar&alumno={$alumno->getDni()}"<span class="glyphicon glyphicon-pencil"></span></a></td>
                                    <td class="center-text"><a href="controlador.php?operacion=eliminaralumno&alumno={$alumno->getDni()}"
                                                               onclick="return confirm('¿Desea eliminar este alumno?')"
                                                               <span class="glyphicon glyphicon-trash"></span></a></td>
                                    <td class="center-text">{$alumno->getDni()|escape:'html'}</td>
                                    <td>{$alumno->getNombre()|escape:'html'}</td>
                                    <td class="text-center">{$alumno->getCurso()|escape:'html'}</td>
                                </tr>
                            {/foreach}
                        </table>
                    </div>
                </div> 
            </div>
        </div>
    </div>                    
{/block}
{block name=footer}
    <div class="footer navbar-fixed-bottom text-center"> 
        <h3> Sergio González Ruano &copy; 2DAW 2018</h3>
    </div>
{/block}
{*El |escape: 'html' sirve para que el codigo no se ejecute como html*}