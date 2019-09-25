# Instrucciones

## Para Laravel + vue

## LARAVEL

### Intalación y configuración

Para configurar un usuario y base de datos por defecto use el comando `$ npm run configure` ó `$ sudo ./install.sh`

Luego instale las dependencias de npm y composer con `$ composer install && npm install`

Para copiar el archivo de entorno `.env` y usar los datos por defecto ejecute `$ cp .env.example .env` y luego `$ php artisan key:generate`

El sistema esta listo para consumir el API REST de hoteles con jwt para un crud con la ruta `/api/hoteles/`.

### Migraciones y Seeder

El seeder es para la tabla `hotels` ejecute `$ php artisan migrate --seed`

### Consumo de api (CRUD disponible) y filtro de hoteles

La ruta de filtros es `api/hoteles/filtro/{filtro}` tipo post
en donde el parámetro `{filtro}` define el dato de filtro

Filtros: nombre, precio, país, ciudad, estrellas

El filtro por defecto según la nomenclatura API REST también se puede buscar con id `/api/hoteles/{id}`

## VUE

### Para ejecutar en modo developer

`$ npm run serve`

El proyecto para producción está en la carpeta distr o ejecutando `$ npm run build`

Los datos de configuración se manejan con vuex, en el archivo `src/store.js`

## Para Nodejs + vue

Solo es necesario ejecutar el comando `$ npm run start` en el directorio.
Tiene las mismas funciones y nomenclatura que la versión en laravel a excepción del api CRUD

La base de datos es la misma que se genero con laravel por tema prácticos
