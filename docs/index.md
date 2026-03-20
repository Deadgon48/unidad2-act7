# Sistema de Registro de Estudiantes

Bienvenido a la documentación técnica del Sistema de Registro de Estudiantes.

## Vista de Contexto (C4 Nivel 1)

```mermaid
graph TD
    User((Estudiante / Aspirante))
    subgraph Sistema_Registro [Sistema de Registro Escolar]
        Web[Aplicación de Captura de Datos]
    end
    ControlEscolar[Oficina de Control Escolar]

    User -->|Llena formulario| Web
    Web -->|Envía datos validados| User
    Web -.->|Provee información de nuevo ingreso| ControlEscolar
    
