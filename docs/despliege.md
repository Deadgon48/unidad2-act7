# Guía de Despliegue

## Sistema de Registro de Estudiantes

---

## 1. Introducción

Este documento describe el proceso técnico necesario para desplegar el sistema web de 
Registro de Estudiantes, desarrollado con **HTML5 y JavaScript**.

El sistema permite capturar, validar y mostrar información de alumnos de nuevo ingreso 
mediante formularios web, sin necesidad de un backend.

---

## 2. Objetivo

Establecer un procedimiento claro y estructurado para la ejecución del sistema en un 
entorno local o productivo.

---

## 3. Arquitectura del Sistema

El sistema sigue una arquitectura **cliente (frontend puro)**:

* Cliente: Navegador web
* Lógica: JavaScript (ejecución en el navegador)
* Comunicación: No requiere servidor (local)

---

## 4. Requisitos del Sistema

### Software

* Navegador web moderno (Chrome, Edge, Firefox)
* Editor de código: WebStorm (recomendado)

### Hardware (mínimo)

* RAM: 2 GB
* Procesador: Dual Core
* Almacenamiento: 100 MB libres

---

## 5. Estructura del Proyecto

```
registro-estudiantes/
│
├── registro.html
```
Tanto el Javascriot como el css estan dentro del mismo registro.html
---

## 6. Configuración del Entorno

### Paso 1: Abrir en WebStorm

1. Abrir WebStorm u otro programa que maneje programacion web
2. Seleccionar **Open Project**
3. Elegir la carpeta `registro-estudiantes`

---

## 7. Ejecución del Sistema

### Opción 1: Directa (más simple)

1. Abrir el archivo `registro.html`
2. Ejecutar con navegador (doble clic o botón *Run*)

---

### Opción 2: Servidor local de WebStorm (recomendado)

1. Clic derecho en `registro.html`
2. Seleccionar **Open in Browser**
3. WebStorm levantará un servidor local automático

---

## 8. Flujo de Ejecución

1. Usuario accede al formulario
2. Ingresa datos
3. JavaScript valida la información
4. Se procesan los datos en el navegador
5. Se muestran resultados en pantalla

---

## 9. Pruebas del Sistema

### Prueba funcional

| Campo    | Valor      |
| -------- |------------|
| Nombre   | Humberto   |
| Control  | 23456789   |
| Carrera  | Ing. Sistemas |
| Semestre | 8          |
| Correo   | [z@gmail.com] |

**Resultado esperado:**

* Datos mostrados correctamente en pantalla
* Validaciones funcionando

---

### Prueba de validación

| Caso               | Resultado esperado |
| ------------------ | ------------------ |
| Campo vacío        | Error              |
| Correo inválido    | Rechazo            |
| Nombre con números | No permitido       |

---

## 10. Seguridad

Se recomienda implementar:

* Validación de datos en JavaScript
* Uso de expresiones regulares (Regex)
* Evitar inserción de código malicioso (XSS)

---

## 11. Despliegue en Producción

### Opción 1: Hosting estático

* Subir archivos a:

    * GitHub Pages
    * Netlify
    * Vercel

---

### Opción 2: Servidor web

* Subir archivos a:

    * Apache o Nginx
* No requiere configuración de backend

---

## ⚠️ 12. Problemas Comunes

| Problema            | Solución                  |
| ------------------- | ------------------------- |
| No se ejecuta JS    | Revisar consola (F12)     |
| Archivo no carga    | Verificar rutas           |
| Error de validación | Revisar expresiones regex |

---

