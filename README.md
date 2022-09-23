## Rutas

- http://127.0.0.1:8000/api/posts
- http://127.0.0.1:8000/api/save
- http://127.0.0.1:8000/posts
- http://127.0.0.1:8000/post/1

## Ficheros

En la carpeta src/Model se encuentran las clases que hacen de modelo, hacineto peticiones a la API de https://jsonplaceholder.typicode.com/.

En src/service  se enuentran las clases de servicio  que  implementan los casos de uso  de la aplicacíon, en este caso poco más que obtener los datos de los modelos.

En src/Controller, se encuentran las clases que manejan las peticiones.

Las clases se han separado por las entidades con las que trabajan y por responsabilidades, en este caso obtener datos y guardar datos, ademas de validar datos en el caso de DataValidationService.