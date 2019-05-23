<?php
require_once 'utils.php';

function renderizarPanelControl(){
    $entorno = Entorno::getInstancia();
    $variables = [
        'polaroids' => polaroids('all'), 
        'comentarios' => todosComentarios(),
        'usuarios' => todosUsuarios(),
        'usuario' => usuario()
    ];
    
    echo $entorno->renderizar("panel_control.html",$variables);
}