# larave-livewire-template

Una plantilla inicial para construir aplicaciones Laravel con Livewire.

## Características
- Laravel 12.x
- Livewire 3.x
- Tailwind CSS for styling
- Pre-configured authentication scaffolding
- Example Livewire components

## Instalación
1. Clone el repositorio:
   ```bash
   git clone
   
2. Navegar al directorio del proyecto:
   ```bash
   cd larave-livewire-template
   ```
3. Instalar las dependencias de Composer y NPM:
   ```bash
    composer install
    npm install
   
4. Copiar el archivo de entorno y configurar las variables:
Crear una base de datos llamada store y ponerla en las variables de entorno .env
   ```bash
   cp .env.example .env
   ```
Actualice el archivo `.env` con su base de datos y otras configuraciones.
5. Genera la application key:
   ```bash
   php artisan key:generate
   ```
6. Ejecute las migraciones de la base de datos:
7. ```bash
   php artisan migrate
   ```
8. Inicie el servidor de desarrollo:
9. ```bash
   composer run dev
   ```
10. En el navegador: `http://localhost:8000`
12. Veras en funcionamiento la aplicación Laravel con Livewire.
13. ## Uso de Livewire
14. - Crear un nuevo componente Livewire:
-   ```bash
    php artisan make:livewire ComponentName
    ```
- Reemplace `ComponentName` con el nombre deseado para su componente.
- Luego, puede usar el componente en sus vistas de Blade:
-  ```blade
    <livewire:component-name />
    ```
- Reemplace `component-name` con la versión kebab-case del nombre de su componente.
