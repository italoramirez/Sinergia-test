<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requerimientos para correr el programa

- PHP 8.1
- Docker (opcional)
- Node
## Docker
- docker-compose build
- docker-compose up -d
- docker exec -it sinergia-api composer install
- docker exec -it sinergia-api php artisan migrate o docker exec -it sinergia-api php artisan migrate --seed
- docker exec -it sinergia-api php artisan db:seed
- 
## Instalación Laravel
- composer install
- php artisan migrate
- php artisan db:seed

## Instalación Frontend
- npm install
- npm run dev

