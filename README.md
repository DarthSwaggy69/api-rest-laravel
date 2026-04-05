# Student API - Laravel

API REST básica desarrollada con Laravel para la gestión de estudiantes.  
Permite realizar operaciones CRUD completas sobre el modelo `Student`.

##  Tecnologías utilizadas

- PHP
- Laravel
- MySQL / SQLite
- Composer

---

##  Instalación

Clonar el repositorio:

```bash
git clone https://github.com/TU_USUARIO/api-rest-laravel.git
cd api-rest-laravel

instalar dependencias:
composer install

configurar entorno:
cp .env.example .env
php artisan key:generate

Ejecutar migraciones:
php artisan migrate

Iniciar servidor:
php artisan serve

##  Endpoints
Obtener todos los estudiantes
GET /api/students

Obtener un estudiante por ID
GET /api/students/{id}

Crear estudiante
POST /api/students

Actualizar estudiante (completo)
PUT /api/students/{id}

Actualizar estudiante (parcial)
PATCH /api/students/{id}

Eliminar estudiante
DELETE /api/students/{id}

@DarthSwaggy69