# Sistema de Registro de Estudiantes (Nuevo Ingreso)

Este proyecto es una practica web que esta diseñada para la gestión y captura de datos de alumnos de nuevo ingreso. 
Permite la recolección de información personal, académica y de contacto de forma basica, procesando los datos mediante 
una arquitectura Cliente-Servidor básica.

## Funcionalidades
- **Interfaz de Captura:** Formulario en HTML5 con validaciones de tipo y patrón.
- **Procesamiento en Servidor:** Script en PHP para la recepción y visualización de datos mediante `$_POST`.
- **Lógica de Negocio:** Mensajes de bienvenida personalizados según la carrera, seleccionada, en este caso solo la de sistemas.
- **Visualización:** Generación de tablas con el resumen de la información capturada.

## Stack Tecnológico
- **Frontend:** HTML5 / CSS3
- **Backend:** PHP 8.x
- **Arquitectura:** Modelo C4 (Documentación automatizada)

## Documentación Técnica (Arquitectura como Código)
La arquitectura del sistema, el diccionario de datos y la guía de despliegue 
están disponibles en la pagina de GitHub Pages, 
la cual se actualiza automáticamente mediante un Pipeline.

**[Documentación del Proyecto] (https://Dadgon48.github.io/unidad2-act7/)**

## Estructura del Repositorio
- `registro.html`: Formulario de entrada.
- `procesar.php`: Lógica de procesamiento de datos.
- `/docs`: Archivos fuente de la documentación (Markdown y uno con codigo Mermaid).
- `.github/workflows/deploy.yaml`: Configuración de la automatización del despliegue.

---
**Autor:** Humberto Carlos Acosta Comparan