# Instrucciones

## Para Laravel + vue

### Intalación y configuración

Para configurar un usuario y base de datos por defecto use el comando `$ npm run configure` ó `$ sudo ./install.sh`

Luego instale las dependencias de npm y composer con `$ composer install && npm install`

Para copiar el archivo de entorno `.env` y usar los datos por defecto ejecute `$ cp .env.example .env` y luego `$ php artisan key:generate`

### Consumo de api y filtro de hoteles

La ruta de filtros es `hoteles/filtro/{filtro}` tipo post
en donde el parámetro `{filtro}` define el dato de filtro

Filtros: nombre, precio, país, ciudad, estrellas

El filtro por defecto según la nomenclatura API REST también se puede buscar con id `/api/hoteles/{id}`
