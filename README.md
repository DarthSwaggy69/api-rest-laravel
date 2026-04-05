# Student API - Laravel

API REST básica desarrollada con Laravel para la gestión de estudiantes.  
Permite realizar operaciones CRUD completas sobre el modelo `Student`.

##  Tecnologías utilizadas

- PHP
- Laravel
- MySQL / SQLite
- Composer

##  Instalación

Clonar el repositorio:

```bash
git clone https://github.com/TU_USUARIO/api-rest-laravel.git
cd api-rest-laravel
```

instalar dependencias:

```bash
composer install
```

configurar entorno:

```bash
cp .env.example .env
php artisan key:generate
```

Ejecutar migraciones:

```bash
php artisan migrate
```

Iniciar servidor:

```bash
php artisan serve
```

##  Endpoints

Obtener todos los estudiantes
```bash
GET /api/students
```

Obtener un estudiante por ID
```bash
GET /api/students/{id}
```

Crear estudiante
```bash
POST /api/students
```

Actualizar estudiante (completo)
```bash
PUT /api/students/{id}
```

Actualizar estudiante (parcial)
```bash
PATCH /api/students/{id}
```

Eliminar estudiante
```bash
DELETE /api/students/{id}
```

### DarthSwaggy69