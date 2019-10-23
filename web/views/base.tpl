<!DOCTYPE html>
<html lang="es">    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{block name=title}Gestion de Alumnos{/block}</title>
        <link rel="icon" type="image/x-icon" href="../resources/img/favicon.ico">
        <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="../resources/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../resources/css/estilo.css" />
        <script src="../resources/js/jquery-1.10.1.min.js"></script>
        <script src="../resources/js/bootstrap.min.js"></script>
        {block name=head}{/block}
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
        {block name=body}
        {/block} 
        {block name=footer}
            <div class="footer navbar-fixed-bottom center-text"> 
                Copyright &copy; VS2DAW 2018
            </div>
        {/block}
    </body>
</html>
