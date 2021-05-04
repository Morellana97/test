<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


## Laravel 5.8

componentes del sistema:

- Login y registro
- Perfil del usuario
- Configuración del archivo helpers para funciones globales.
- Creación de clases perzonalizadas (archivos).
- Configuración de vista de menu dinamico.
- Configuración de middleware para protección de rutas.
- Creación de grupos de rutas con protección.
- modo debugbar para mostrar errores y consultas en tiempo real
- CRUDS: Menu > submenu, Roles y Usuarios

## instalacion del sistema

Para instalar el sistema necesita copiar la url del proyecto -> https://gitlab.com/codigo-base-laravel/base.git.

- git clone https://gitlab.com/codigo-base-laravel/base.git.
- cp .env.example .env
- configurar la base de datos
- composer install
- php artisan key:generate
- php artisan migrate:refresh --seed
- php artisan serve
- npm install
- npm run dev

## Paquetes adicionales 

- FORM HTML LARAVEL -> composer require "laravelcollective/html":"^5.6.0"
- DEBUGBAR -> composer require barryvdh/laravel-debugbar --dev
- Laravel FakeID -> https://github.com/Propaganistas/Laravel-FakeId
- Sort column table -> composer require kyslik/column-sortable -> Providers: Kyslik\ColumnSortable\ColumnSortableServiceProvider::class, -> php artisan vendor:publish --provider="Kyslik\ColumnSortable\ColumnSortableServiceProvider" --tag="config" -> link: https://www.itsolutionstuff.com/post/laravel-5-column-sorting-with-pagination-example-from-scratchexample.html

## Grupo de trabajo

- Angel Palacios, Steven Andrade, Hugo Arias, Patricia Diaz, Carlos Pleitez