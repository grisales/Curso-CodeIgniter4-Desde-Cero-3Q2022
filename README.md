# Notas Aulas 
## Sección 3 - Creando nuestro CRUD
### Aula 44 - Más características del findAll()
Todo Ok 
### Aula 43 - Crear la vista del listado de peliculas
Todo Ok 
### Aula 42 - Intro a la sección 3
Todo Ok 

<details><summary>Sección 2 - primeros pasos con Codeigniter 4</summary>

## Sección 2 - primeros pasos con Codeigniter 4
### Aula 38 - El archivo .env en codeigniter 4
Todo Ok, Especial atención al uso de la extensión PHP NameResolver en VS Code 
### Aula 37 - Modelo: Crear modelo para las categorias
Todo Ok, Especial atención al uso de la extensión PHP NameResolver en VS Code 
### Aula 36 - Modelo: Crear modelo para conectar a la base de datos
Todo Ok, Especial atención al uso de la extensión PHP NameResolver en VS Code para importar las clases.
### Aula 35 - Seeder: Generar muchos registros de prueba
Todo Ok 
### Aula 34 - Seeder: Truncar la tabla desde los seeder
Todo Ok
### Aula 33 - Seeder: Generar datos de prueba
En la video aula el archivo de clase MovieSeeder es creado manualmente, sin embargo en mi practica lo generé usando el comando spark 'make:seeder MovieSeeder', no hubo problema.
### Aula 32 - Migraciones: Revertir cambios / Rollback
Todo Ok
### Aula 31 - Migraciones: Crear la tabla categories
Todo Ok
### Aula 30 - Migraciones: Crear la tabla movies
Todo Ok
### Aula 29 - Presentación de la línea de comandos de CodeIgniter
En las aulas anteriores la ruta de navegación de "category" habia sido definida en el controlador como
```[$routes->get( **'/dashboard/category'** , 'dashboard\CategoryController::index');]```
para dejarla dentro del dashboard.

Sin embargo, en el transcurso de la video aula 29 aparece como:
```[$routes->get(**'/category'**, 'dashboard\CategoryController::index');]```
### Aula 28 - Crear la conexión a la base de datos
Todo Ok
### Aula 27 - Presentación de las migraciones para planificación de la Base de datos
Todo Ok
### Aula 26 - Bug en las rutas
[No hay bugs de este tipo en la version 4.2.1 de codeigniter], en la clase dice que habia un Bug al usar NamedRoutes para ubicar controladores con argumento (parametros) 4.0(RC) con la que se hiso el video. Sin embargo, al replicar el ejercicio todo esta ok en la versión 4.2.1.
### Aula 25 - Rutas: Rutas con nombre
Todo Ok
### Aula 24 - Rutas: Navegación entre páginas
Todo Ok
### Aula 23 - Rutas: Pasar datos a func. de controlad.
Todo Ok
### Aula 22 - Paso de datos controladores/vista
Todo Ok
### Aula 21 - Trabajar con multiples vistas
Todo Ok
### Aula 20 - Segundo controlador en carpeta aparte
Todo Ok
### Aula 19 - Segunda ruta, método en el controlador
Todo Ok
### Aula 18 - Primer controlador y ruta asociada
Todo Ok
### Aulas 9 a 17 - Teoria y presentacion del framework  parte II.
Conceptos básicos Ok
</details>

<details><summary>Sección 1 - Introduccion al curso</summary>

## Sección 1 - Introduccion al curso
### Aulas 1 a 8 - Teoria y presentacion del framework parte I.
Conceptos básicos Ok 
</details>

<details><summary>Contenido original del ReadMe inicial</summary>

# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](http://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
</details>