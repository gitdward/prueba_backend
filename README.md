h1 Prueba de backend API, entre PHP con Laravel y Mongo. /h1

Especificaciones del proyecto

PHP 8.1
Composer
Laravel 10
Mongo (Conectado a la nube)

Manual

Para correr el proyecto, correr

php artisan serve

El cual abrirá el proyecto en 

localhost:8000

Listado de rutas

GET localhost:8000/api/ping
Revisa la conexión a la BD en Mongo. Una conexión exitosa regresará "Mongo accesible", de lo contrario regresará "Mongo inaccesible"

GET localhost:8000/api/tasks
Regresa un listado de las tareas. Si la BD está vacía, regresara un 204

POST localhost:8000/api/tasks
Inserta una tarea nueva en la BD. 
-Para esto, en el body/form-data debe llevar los keys "titulo" y "descripcion". 
-Si alguno de los 2 está vacío, el sistema regresara un mensaje con el error. 
-Si la tarea ya existe, regresara un mensaje de error. 
-Si el campo "titulo" es mayor a 50 caracteres, el sistema regresará error.

Culquier otra url ingresada y no enlistada en este Readme, el sistema regresará un error 404 "Invalid URL"
