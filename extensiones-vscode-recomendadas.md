# Extensiones Recomendadas para Visual Studio Code - Proyecto Laravel

## Extensiones Esenciales para Laravel

### 1. **Laravel Extension Pack**
- **ID**: `onecentlin.laravel-extension-pack`
- **Descripción**: Paquete completo con múltiples extensiones para Laravel
- **Incluye**: Laravel Blade Snippets, Laravel Artisan, Laravel Snippets

### 2. **PHP Intelephense**
- **ID**: `bmewburn.vscode-intelephense-client`
- **Descripción**: IntelliSense avanzado para PHP
- **Características**: Autocompletado, navegación, refactoring

### 3. **Laravel Blade Snippets**
- **ID**: `onecentlin.laravel-blade`
- **Descripción**: Snippets para archivos Blade de Laravel
- **Incluye**: Directivas @if, @foreach, @include, etc.

### 4. **Laravel Artisan**
- **ID**: `ryannaddy.laravel-artisan`
- **Descripción**: Ejecutar comandos Artisan desde VS Code
- **Comandos**: make:controller, make:model, migrate, etc.

### 5. **PHP Debug**
- **ID**: `xdebug.php-debug`
- **Descripción**: Depuración de PHP con Xdebug

## Extensiones para Frontend (Vite/JavaScript)

### 6. **ES7+ React/Redux/React-Native snippets**
- **ID**: `dsznajder.es7-react-js-snippets`
- **Descripción**: Snippets para React y JavaScript moderno

### 7. **Auto Rename Tag**
- **ID**: `formulahendry.auto-rename-tag`
- **Descripción**: Renombrar automáticamente etiquetas HTML/XML

### 8. **Bracket Pair Colorizer 2**
- **ID**: `CoenraadS.bracket-pair-colorizer-2`
- **Descripción**: Colorear pares de corchetes para mejor legibilidad

## Extensiones de Productividad

### 9. **GitLens**
- **ID**: `eamodio.gitlens`
- **Descripción**: Funcionalidades avanzadas de Git integradas

### 10. **Prettier - Code formatter**
- **ID**: `esbenp.prettier-vscode`
- **Descripción**: Formateador de código automático

### 11. **Auto Close Tag**
- **ID**: `formulahendry.auto-close-tag`
- **Descripción**: Cerrar automáticamente etiquetas HTML/XML

### 12. **Path Intellisense**
- **ID**: `christian-kohler.path-intellisense`
- **Descripción**: Autocompletado de rutas de archivos

## Extensiones de Tema y UI

### 13. **Material Icon Theme**
- **ID**: `PKief.material-icon-theme`
- **Descripción**: Iconos coloridos para diferentes tipos de archivos

### 14. **One Dark Pro**
- **ID**: `zhuangtongfa.Material-theme`
- **Descripción**: Tema oscuro popular y elegante

## Cómo instalar las extensiones:

### Método 1: Desde VS Code
1. Abrir VS Code
2. Presionar `Ctrl+Shift+X` para abrir el panel de extensiones
3. Buscar cada extensión por nombre o ID
4. Hacer clic en "Install"

### Método 2: Desde la línea de comandos
```bash
# Instalar extensiones desde la terminal
code --install-extension onecentlin.laravel-extension-pack
code --install-extension bmewburn.vscode-intelephense-client
code --install-extension onecentlin.laravel-blade
code --install-extension ryannaddy.laravel-artisan
code --install-extension xdebug.php-debug
code --install-extension dsznajder.es7-react-js-snippets
code --install-extension formulahendry.auto-rename-tag
code --install-extension CoenraadS.bracket-pair-colorizer-2
code --install-extension eamodio.gitlens
code --install-extension esbenp.prettier-vscode
code --install-extension formulahendry.auto-close-tag
code --install-extension christian-kohler.path-intellisense
code --install-extension PKief.material-icon-theme
code --install-extension zhuangtongfa.Material-theme
```

## Configuración recomendada para Laravel:

Crear archivo `.vscode/settings.json` en tu proyecto:

```json
{
    "php.validate.executablePath": "C:\\xampp\\php\\php.exe",
    "php.suggest.basic": false,
    "emmet.includeLanguages": {
        "blade": "html"
    },
    "files.associations": {
        "*.blade.php": "blade"
    },
    "blade.format.enable": true,
    "editor.formatOnSave": true,
    "editor.defaultFormatter": "esbenp.prettier-vscode"
}
```

## Comandos útiles de Laravel Artisan (con la extensión):

- `php artisan make:controller NombreController`
- `php artisan make:model NombreModel`
- `php artisan make:migration create_tabla_table`
- `php artisan migrate`
- `php artisan serve`
- `php artisan route:list`
