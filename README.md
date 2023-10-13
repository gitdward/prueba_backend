<h1>Prueba de backend API, entre PHP con Laravel y Mongo</h1> 

<h3>Especificaciones del proyecto</h3> 

<ul>
    <li>PHP 8.1</li>
    <li>Composer</li>
    <li>Laravel 10</li>
    <li>Mongo (Para BD, conectado a la nube)</li>
    <li>Git (Para versionado)</li>
</ul>

<h3>Manual</h3>

Para correr el proyecto, correr

<code>php artisan serve</code>

El cual abrirá el proyecto en 

<code>localhost:8000</code>

<h3>Listado de rutas</h3>
Para probar la siguiente API, se usó el software Postman
<br>
<br>
<b>GET</b> localhost:8000/api/ping
<br>
Revisa la conexión a la BD en Mongo. Una conexión exitosa regresará "Mongo accesible", de lo contrario regresará "Mongo inaccesible"

<b>GET</b> localhost:8000/api/tasks
<br>
Regresa un listado de las tareas. Si la BD está vacía, regresara un 204

<b>POST</b> localhost:8000/api/tasks
<br>
Inserta una tarea nueva en la BD. 
-Para esto, en el body/form-data debe llevar los keys "titulo" y "descripcion". 
-Si alguno de los 2 está vacío, el sistema regresara un mensaje con el error. 
-Si la tarea ya existe, regresara un mensaje de error. 
-Si el campo "titulo" es mayor a 50 caracteres, el sistema regresará error.

Culquier otra url ingresada y no enlistada en este Readme, el sistema regresará un error 404 "Invalid URL"
