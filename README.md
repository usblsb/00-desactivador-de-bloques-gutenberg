# Desactivador de Bloques Gutenberg para WordPress

## Descripción
Este plugin de WordPress, "Desactivador de Bloques Gutenberg", permite a los administradores de sitios web deshabilitar selectivamente bloques específicos en el editor Gutenberg. Ideal para restringir el uso de ciertos bloques, ya sea por preferencias de diseño o para mantener una consistencia en el contenido. Añade o comenta en el código los bloques que deseas activar o desactivar.

## Tabla de Contenidos
1. Instalación
2. Uso
3. Ejemplos de Personalización
4. Documentación Adicional
5. Advertencias
6. Licencia
7. Estado del Proyecto
8. Créditos
9. Capturas de Pantalla

## Instalación
1. Descarga el archivo del plugin desde [este enlace](https://webyblog.es/).
2. Inicia sesión en tu sitio WordPress y ve a la sección de 'Plugins'.
3. Elige 'Añadir Nuevo' y luego 'Subir Plugin'.
4. Selecciona el archivo descargado y haz clic en 'Instalar Ahora'.
5. Una vez instalado, activa el plugin.

## Uso
El plugin se utiliza para deshabilitar bloques específicos en el editor Gutenberg de WordPress. Es útil para administradores que desean restringir ciertos bloques para mantener una consistencia en el diseño o el contenido de su sitio.

## Ejemplos de Personalización
Puedes personalizar los bloques habilitados editando el código del plugin. Por ejemplo:
- Para deshabilitar el bloque de párrafo, asegúrate de que la línea `unset( $blocks[ 'core/paragraph' ] );` esté descomentada.
- Para habilitar un bloque, comenta la línea correspondiente, por ejemplo, `// unset( $blocks[ 'core/image' ] );` para habilitar el bloque de imagen.

## Documentación Adicional
Para más información sobre el uso de Gutenberg y la gestión de bloques, visita la [documentación oficial de WordPress](https://wordpress.org/support/article/wordpress-editor/).

## Advertencias
Este plugin se proporciona "tal cual", sin garantías de ningún tipo. El autor no se hace responsable de cualquier daño o pérdida de datos que pueda ocurrir debido a su uso.

## Licencia
Este plugin está licenciado bajo la [Licencia Pública General de GNU (GPLv3)](https://www.gnu.org/licenses/gpl-3.0.html).

## Estado del Proyecto
El proyecto está actualmente en desarrollo. Se recomienda revisar regularmente las actualizaciones para obtener mejoras y correcciones de errores.

## Créditos
Desarrollado por Juan Luis Martel. Visita su sitio web para más proyectos interesantes: [webyblog.es](https://www.webyblog.es).

## Capturas de Pantalla
*Capturas de pantalla del plugin en acción serán añadidas próximamente.*