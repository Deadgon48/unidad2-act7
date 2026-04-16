# Sistema de Registro de Estudiantes (Nuevo Ingreso)

[![CI de Verificación de Documentación Técnica](https://github.com/Deadgon48/unidad2-act7/actions/workflows/ci-docs.yaml/badge.svg)](https://github.com/Deadgon48/unidad2-act7/actions/workflows/ci-docs.yaml)

Este proyecto es una practica web que esta
diseñada para la gestión y captura de datos
de alumnos de nuevo ingreso.
Permite la recolección de información personal,
académica y de contacto de forma basica,
procesando los datos mediante
una arquitectura Cliente-Servidor básica.

## Funcionalidades

- **Interfaz de Captura:** Formulario en HTML5 con
- validaciones de tipo, patrón y longitud.
- **Procesamiento Dinámico:** Lógica programada en
- JavaScript para permitir el despliegue en
- servidores estáticos (GitHub Pages).
- **Lógica de Negocio:** Mensajes de bienvenida personalizados
- según la carrera seleccionada (Especial para Ing. Sistemas).
- **Visualización:** Generación automática de tablas con el
- resumen de la información capturada sin recargar la página.

## Stack Tecnológico

- **Frontend:** HTML5 / CSS3
- **Lógica de Procesamiento:** JavaScript (ES6+)
- **Documentación:** Markdowns de diagrama C4, Diccionario de Datos y de despliege

## Documentación Técnica (Arquitectura como Código)

La arquitectura del sistema, el diccionario de datos y la guía de despliegue
están disponibles en la pagina de GitHub Pages,
la cual se actualiza automáticamente mediante un Pipeline.

**[Documentación del Proyecto] (<https://Dadgon48.github.io/unidad2-act7/>)**

## Estructura del Repositorio

- `registro.html`: Formulario de entrada.
- `/docs`: Archivos fuente de la documentación (Markdown y uno con codigo Mermaid).
- `.github/workflows/deploy.yaml`: Configuración de la automatización del despliegue.

---
**Autor:** Humberto Carlos Acosta Comparan
