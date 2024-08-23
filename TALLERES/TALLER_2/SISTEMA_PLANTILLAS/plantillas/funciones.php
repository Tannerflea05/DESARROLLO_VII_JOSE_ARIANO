<?php
$paginaActual = 'inicio'; // Cambia esto según el archivo
require_once 'plantillas/funciones.php';
$tituloPagina = obtenerTituloPagina($paginaActual);
include 'plantillas/encabezado.php';
?>

<h2>Contenido de la Página de Inicio</h2>
<p>Este es el contenido específico de la página de inicio.</p>

<?php
include 'plantillas/pie_pagina.php';
?>

<?php
function obtenerTituloPagina($pagina) {
    $titulos = [
        'inicio' => 'Página de Inicio',
        'sobre_nosotros' => 'Sobre Nosotros',
        'contacto' => 'Contáctanos'
    ];
    return isset($titulos[$pagina]) ? $titulos[$pagina] : 'Página Desconocida';
}

function generarMenu($paginaActual) {
    $menu = [
        'inicio' => 'Inicio',
        'sobre_nosotros' => 'Sobre Nosotros',
        'contacto' => 'Contacto'
    ];
    
    $html = '<nav><ul>';
    foreach ($menu as $pagina => $titulo) {
        $clase = ($pagina === $paginaActual) ? ' class="activo"' : '';
        $html .= '<li><a href="' . $pagina . '.php"' . $clase . '>' . $titulo . '</a></li>';
    }
    $html .= '</ul></nav>';
    return $html;
}
?>
