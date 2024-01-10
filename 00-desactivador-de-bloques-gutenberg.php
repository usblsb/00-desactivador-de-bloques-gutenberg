<?php
/**
 * Plugin Name:00 Desactivador de Bloques Gutenberg
 * Plugin URI: https://webyblog.es/
 * Description: Deshabilita bloques específicos de Gutenberg en WordPress, añade o comenta en el codigo los bloques que necesites activar o desactivar por completo incluso por otros plugins.
 * Version: 10-01-2024
 * Author: Juan Luis Martel
 * Author URI: https://www.webyblog.es
 * License: GPLv3 or later
 */


// Asegura que no se ejecute directamente el plugin
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


function jlmr_desactivador_blocks( $bloques_permitidos ) {
	// Obtiene todos los bloques registrados
	$blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();

	// Funcionamiento:
	// Comenta las lineas de los bloques de Gutemberg que no quieres Deshabilitar
	// Añade a la lista los bloques de Gutemberg que si quieres Deshabilitar

// Lista de categorias y bloques de Gutenberg

	// Categoría de texto:
	unset( $blocks[ 'core/paragraph' ] ); // 	Párrafo
	unset( $blocks[ 'core/heading' ] ); // 	Encabezado
	unset( $blocks[ 'core/list' ] ); //  	Lista
	unset( $blocks[ 'core/list-item' ] ); // 	Lista
	unset( $blocks[ 'core/preformatted' ] ); // 	Preformateado
	unset( $blocks[ 'core/pullquote' ] ); // 	Pullquote (en inglés)
	unset( $blocks[ 'core/table' ] ); // 	Tabla
	unset( $blocks[ 'core/verse' ] ); // 	Verso

	// Categoría de medios:
	unset( $blocks[ 'core/image' ] ); // 	Imagen
	unset( $blocks[ 'core/gallery' ] ); // 	Galería
	unset( $blocks[ 'core/audio' ] ); // 	Audio
	unset( $blocks[ 'core/cover' ] ); // 	Cubrir
	unset( $blocks[ 'core/file' ] ); // 	Archivo
	unset( $blocks[ 'core/media-text' ] ); // 	Medios de comunicación y texto
	unset( $blocks[ 'core/video' ] ); // 	Vídeo

	// Categoría de diseño:	
	unset( $blocks[ 'core/buttons' ] ); // 	Botones
	unset( $blocks[ 'core/columns' ] ); // 	Columnas
	unset( $blocks[ 'core/group' ] ); // 	Grupo
	unset( $blocks[ 'core/row' ] ); // 	Fila
	unset( $blocks[ 'core/stack' ] ); // 	Pila
	unset( $blocks[ 'core/more' ] ); // 	Más
	unset( $blocks[ 'core/nextpage' ] ); // 	Salto de página
	unset( $blocks[ 'core/separator' ] ); // 	Separador
	unset( $blocks[ 'core/spacer' ] ); // 	Espaciador

	// Categoría de widgets:
	unset( $blocks[ 'core/archives' ] ); // 	Archivo
	unset( $blocks[ 'core/calendar' ] ); // 	Calendario
	unset( $blocks[ 'core/categories' ] ); // 	Categorías
	unset( $blocks[ 'core/html' ] ); // 	HTML personalizado
	unset( $blocks[ 'core/latest-comments' ] ); // 	Últimos comentarios
	unset( $blocks[ 'core/latest-posts' ] ); // 	Últimas publicaciones
	unset( $blocks[ 'core/page-list' ] ); // 	Lista de páginas
	unset( $blocks[ 'core/rss' ] ); // 	RSS
	unset( $blocks[ 'core/search' ] ); // 	Buscar
	unset( $blocks[ 'core/shortcode' ] ); // 	Código abreviado
	unset( $blocks[ 'core/social-links' ] ); // 	Íconos sociales
	unset( $blocks[ 'core/tag-cloud' ] ); // 	Nube de etiquetas

	// Categoría temática:
	unset( $blocks[ 'core/navigation' ] ); // 	Navegación
	unset( $blocks[ 'core/site-logo' ] ); // 	Logotipo del sitio
	unset( $blocks[ 'core/site-title' ] ); // 	Título del sitio
	unset( $blocks[ 'core/site-tagline' ] ); // 	Eslogan del sitio
	unset( $blocks[ 'core/query' ] ); // 	Bucle de consulta
	unset( $blocks[ 'core/posts-list' ] ); // 	Lista de publicaciones
	unset( $blocks[ 'core/avatar' ] ); // 	Avatar
	unset( $blocks[ 'core/post-title' ] ); // 	Título de la publicación
	unset( $blocks[ 'core/post-excerpt' ] ); // 	Extracto de la publicación
	unset( $blocks[ 'core/post-featured-image' ] ); // 	Publicar imagen destacada
	unset( $blocks[ 'core/post-content' ] ); // 	Contenido de la publicación
	unset( $blocks[ 'core/post-author' ] ); // 	Autor de la entrada
	unset( $blocks[ 'core/post-date' ] ); // 	Fecha de publicación
	unset( $blocks[ 'core/post-terms' ] ); // 	Categorías de entradas,Etiquetas de entradas
	unset( $blocks[ 'core/post-navigation-link' ] ); // 	Publicación siguiente,Publicación anterior
	unset( $blocks[ 'core/read-more' ] ); // 	leer más
	unset( $blocks[ 'core/comments-query-loop' ] ); // 	Bucle de consulta de comentarios
	unset( $blocks[ 'core/post-comments-form' ] ); // 	Formulario de comentarios de publicación
	unset( $blocks[ 'core/loginout' ] ); // 	Inicio de sesión/cierre de sesión
	unset( $blocks[ 'core/term-description' ] ); // 	Descripción del término
	unset( $blocks[ 'core/query-title' ] ); // 	Título del archivo
	unset( $blocks[ 'core/post-author-biography' ] ); // 	Biografía del autor de la publicación

	// Categoría de incrustaciones:
	unset( $blocks[ 'core/embed' ] ); // Embed, Twitter, Youtube, Redes Sociales, etc...

	// Devuelve la nueva lista de bloques permitidos
	return array_keys( $blocks );
}

// Agrega el filtro para desactivar los bloques allowed_block_types_all
add_filter( 'allowed_block_types_all', 'jlmr_desactivador_blocks' );
