# Diccionario de Datos - Sistema de Registro de Estudiantes

## Descripción
Este diccionario documenta los elementos de datos del sistema de registro de estudiantes, incluyendo definiciones, tipos, restricciones y reglas de negocio.

---

## Dataset: Registro de Estudiantes

### Tabla Lógica: estudiante

---

## Campos del Dataset

### 1. nombre

| Propiedad        | Valor |
|------------------|------|
| Nombre           | nombre |
| Tipo de dato     | VARCHAR |
| Longitud         | 100 |
| Obligatorio      | Sí |
| Descripción      | Nombre completo del estudiante |
| Valores válidos  | Letras y espacios |
| Formato          | `[A-Za-z\s]+` |
| Ejemplo          | Juan Pérez |
| Regla de negocio | No puede estar vacío |

---

### 2. n_control

| Propiedad        | Valor |
|------------------|------|
| Nombre           | n_control |
| Tipo de dato     | VARCHAR |
| Longitud         | 20 |
| Obligatorio      | Sí |
| Descripción      | Identificador único del estudiante |
| Valores válidos  | Letras y números |
| Formato          | `[A-Za-z0-9]+` |
| Ejemplo          | L19120001 |
| Regla de negocio | No puede estar vacío |

---

### 3. carrera

| Propiedad        | Valor |
|------------------|------|
| Nombre           | carrera |
| Tipo de dato     | VARCHAR |
| Longitud         | 50 |
| Obligatorio      | Sí |
| Descripción      | Carrera del estudiante |
| Valores válidos  | Ing. Sistemas, Ing. Industrial, Ing. Gestión Empresarial |
| Ejemplo          | Ing. Sistemas |
| Regla de negocio | Debe seleccionarse una opción |

---

### 4. semestre

| Propiedad        | Valor |
|------------------|------|
| Nombre           | semestre |
| Tipo de dato     | INT |
| Rango permitido  | 1 - 12 |
| Obligatorio      | Sí |
| Descripción      | Semestre actual del estudiante |
| Ejemplo          | 3 |
| Regla de negocio | Debe seleccionarse un valor |

---

### 5. correo

| Propiedad        | Valor |
|------------------|------|
| Nombre           | correo |
| Tipo de dato     | VARCHAR |
| Longitud         | 100 |
| Obligatorio      | Sí |
| Descripción      | Correo electrónico institucional |
| Formato          | email válido |
| Ejemplo          | alumno@correo.com |
| Regla de negocio | Debe cumplir formato de correo |

---

## Reglas Generales

- Todos los campos son obligatorios
- Validación en frontend (HTML5) y backend (PHP)
- No se permite envío de datos vacíos
- Validación de seguridad recomendada: sanitización (`htmlspecialchars()`)

---

## Reglas de Negocio

| Regla ID | Descripción |
|---------|------------|
| RN-01 | Todos los campos deben estar llenos |
| RN-02 | Si carrera = "Ing. Sistemas" → mostrar mensaje especial |
| RN-03 | El correo debe tener formato válido |
| RN-04 | El semestre debe estar entre 1 y 12 |

---

## Salida de Datos

| Campo | Descripción |
|------|------------|
| Campo | Nombre del dato |
| Valor Capturado | Información ingresada por el usuario |

---

## Notas Técnicas

- No existe persistencia en base de datos
- Los datos se procesan mediante `$_POST`
- Se recomienda futura integración con MySQL
