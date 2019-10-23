"use strict";
function valorOperacion(){
    if(confirm('¿Está seguro que quiere descartar los cambios?')){
        document.getElementById('op').value = 'cancelar';
        document.getElementById('formulario').submit();
    }
}


