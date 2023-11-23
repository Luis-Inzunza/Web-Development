# Tribunales Amigables - Creador de cuentos infantiles

## Descripción

Este es un proyecto para ayudar en la creacion de cuentos digitales para los ninos. Asi facilitar al usuario en solamente insertar datos y nosotros nos encargamos de generar una pagina ideal para leer y usar la voz sintetizadora para oir.

## Equipo

| Josue Israel Canul Ordonez | Luis Alejandro Cruz Inzunza | Arturo Andres Quezada Suarez | Daniel Méndez Sierra | 
---|---|---|---|
| ![Josue_Canul](/imagenes/Josue_Canul.jpg) | ![Luis_Cruz](/imagenes/Luis_Cruz.png) | ![Arturo_Quezada](/imagenes/Arturo_Quezada.jpg) | ![Daniel_Mendez](/imagenes/Daniel_Mendez.jpg) |


## Consideraciones

Mencionamos un poco el comportamiento especial que tiene cada apartado en este programa

### Login

Login con seguridad Basica

### Registrar

Obtiene los datos que el usuario proporciona para poder crear un nuevo usuario. Asi podra pasar a traves del login y acceder a nuestro servicio.

### Menu Libros

Despues del login, entraras al menu de libros, aqui podras ver todos los libros que has creado, asi como su informacion principal o crear uno nuevo.
[Tecnicamente, la parte visual de un CRUD]

### Crear Libro

Daras un titulo, una imagen y color de fondo para la portada. Al generar el libro, podras iniciar a crear paginas para dicho libro.

### Contenido Libro -Paginas

Es un editor de Paginas, donde solamente debes introducir datos y seleccionar opciones. 

Esta pagina tendra la dinamica de que despues de haberse seleccionado y llenado los campos que se requieran, ebera guardarlos a la base de datos. 

En el caso de haber hecho ya las x paginas que requiere tu libro, puede salir del editor y volver al menu de libros. Desde ahi podras generar la pagina web de tu Libro y solo empezar a usarlo. 

### Base de datos

Por el momento se trabaja en una base de datos LocalHost para la practicidad de hacer nuestras pruebas, igualmente en este repositorio se encuentran las consultas para crear la BD y sus datos artificiales.

#### Usuarios

Quienes son los registrados que pueden acceder. Cada usuario tiene sus propios libros y por el momento no se pueden compartir

#### Libros

Solo mantienen lo escencial para mostrar en el Menu de Libros.

#### Paginas

Tiene el registro de cada pagina generada de todos los libros, estos se pueden identificar por su numero de pagina y del libro del que pertenecen.

Antes de ingresarlos a la base de datos, debemos asegurarnos de que no se repita un numero de pagina, al ser una entidad debil (por su llave primeria de Titulo del libro y su indice) debemos hacerlo nosotros de parte del programa.