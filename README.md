# Sistema de Gestión Escolar con Laravel

Este proyecto se centra en el desarrollo de un sistema de gestión escolar utilizando el framework **Laravel**, un popular framework de PHP para el desarrollo web. El sistema está diseñado para administrar información esencial de una institución educativa, incluyendo estudiantes, materias, cursos, comisiones y profesores.

## ¿Para qué sirve?

El sistema ofrece una solución integral para la gestión de datos académicos, permitiendo:

- **Organizar la información de los estudiantes:**  
  Registrar y actualizar datos personales de los estudiantes, incluyendo su nombre, correo electrónico y las comisiones y cursos en los que están inscritos.

- **Gestionar cursos y materias:**  
  Crear, modificar y eliminar cursos y materias. También permite la asignación de profesores a comisiones específicas dentro de cada curso.

- **Controlar las inscripciones:**  
  Facilitar el proceso de inscripción de estudiantes en cursos y comisiones, asegurando que no haya duplicados o conflictos de horario.

- **Generar reportes:**  
  Ofrece la capacidad de generar reportes con información relevante, como la lista de estudiantes inscritos en cada curso, los cursos que corresponden a cada materia, los horarios de las comisiones y la asistencia de los profesores.

- **Facilitar la búsqueda de información:**  
  Permite a los usuarios buscar y filtrar información de estudiantes, cursos, comisiones y profesores de forma rápida y eficiente.

## ¿Cómo se hizo?

El sistema se construyó utilizando una combinación de tecnologías web modernas:

- **Laravel:**  
  Proporciona la estructura base del sistema, incluyendo el enrutamiento, la gestión de controladores y modelos, y la integración con la base de datos.

- **Eloquent ORM:**  
  Facilita la interacción con la base de datos mediante la abstracción de las consultas SQL, permitiendo trabajar con los datos como objetos.

- **Blade:**  
  Motor de plantillas de Laravel que permite crear vistas dinámicas con lógica de presentación.

- **Bootstrap:**  
  Framework CSS que proporciona estilos y componentes preconstruidos para la interfaz de usuario, asegurando una apariencia consistente y responsiva.

El proceso de desarrollo se llevó a cabo de forma iterativa:

1. **Diseño de la base de datos:**  
   Se definieron las relaciones entre las entidades (estudiantes, cursos, materias, etc.).

2. **Creación de modelos, controladores y vistas:**  
   Se implementaron las funcionalidades **CRUD** (Crear, Leer, Actualizar, Eliminar) y las lógicas de negocio para cada entidad.

3. **Uso de migraciones y seeders:**  
   Migraciones para gestionar el esquema de la base de datos y seeders para poblarla con datos de prueba.

4. **Implementación de filtros y búsquedas:**  
   Para facilitar el acceso a la información.

5. **Generación de reportes:**  
   Visualización de datos relevantes para la institución educativa.

6. **Diseño de la interfaz de usuario:**  
   Integración de Bootstrap para asegurar un diseño responsivo y consistente.

El código fuente del proyecto se gestionó con **Git** y se alojó en **GitHub** para facilitar la colaboración y el control de versiones.
