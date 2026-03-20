# Guía de Despliegue

## Sistema de Registro de Estudiantes

---

## 1. Introducción

Este documento describe el proceso técnico necesario para desplegar el sistema web de Registro de Estudiantes, desarrollado con HTML5 y PHP.

El sistema permite capturar, validar y mostrar información de alumnos de nuevo ingreso mediante formularios web.

---

## 2. Objetivo

Establecer un procedimiento claro y estructurado para la instalación, configuración y ejecución del sistema en un entorno local o productivo.

---

## 3. Alcance

Esta guía aplica para:

* Entornos locales (XAMPP, WAMP, Laragon)
* Servidores web con soporte PHP
* Implementaciones académicas

---

## 4. Arquitectura del Sistema

El sistema sigue una arquitectura simple cliente-servidor:

* Cliente: Navegador web
* Servidor: Apache + PHP
* Comunicación: HTTP (POST)

---

## 5. Requisitos del Sistema

### Software

* PHP 7.4 o superior
* Servidor Apache o Nginx
* Navegador web moderno

### Hardware (mínimo)

* RAM: 2 GB
* Procesador: Dual Core
* Almacenamiento: 500 MB libres

---

## 6. Estructura del Proyecto

```
registro-estudiantes/
│
├── registro.html
├── procesar.php
```

---

## 7. Instalación del Entorno

### Paso 1: Instalar XAMPP

1. Descargar desde: https://www.apachefriends.org
2. Instalar en el sistema
3. Iniciar:

   * Apache

---

## 8. Despliegue del Sistema

### Paso 1: Copiar archivos

Ubicar el proyecto en:

```
C:\xampp\htdocs\
```

Ejemplo:

```
C:\xampp\htdocs\registro-estudiantes
```

---

### Paso 2: Verificar estructura

Asegurarse de que existan:

* registro.html
* procesar.php

---

## 9. Ejecución del Sistema

Abrir navegador y acceder a:

```
http://localhost/registro-estudiantes/registro.html
```

---

## 10. Flujo de Ejecución

1. Usuario accede al formulario
2. Ingresa datos
3. Se envían mediante POST
4. PHP procesa información
5. Se muestra resumen en tabla

---

## 11. Pruebas del Sistema

### Prueba funcional

| Campo    | Valor                                   |
| -------- | --------------------------------------- |
| Nombre   | Gerardo                                 |
| Control  | 23456789                                |
| Carrera  | Ing. Sistemas                           |
| Semestre | 3                                       |
| Correo   | [z@gmail.com]

**Resultado esperado:**

* Tabla con datos
* Mensaje especial mostrado

---

### Prueba de validación

| Caso               | Resultado esperado |
| ------------------ | ------------------ |
| Campo vacío        | Error              |
| Correo inválido    | Rechazo            |
| Nombre con números | No permitido       |

---







