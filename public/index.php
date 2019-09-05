<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\ListarCursos;

switch ($_SERVER ['PATH_INFO'])
{
    case '/listar-cursos':
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();
        break;
    case '/novo-curso':
        $controlador = new FormularioInsercao();
        $controlador->processaRequisicao();
        break;
    default:
        echo "Página não encontrada";
        break;
}
//if ($_SERVER ['PATH_INFO'] === '/listar-cursos')
//{
//    require 'listar-cursos.php';
//} elseif ($_SERVER ['PATH_INFO'] === '/novo-curso')
//{
//    require 'formulario-novo-curso.php';
//} else {
//    echo "Página não encontrada";
//}