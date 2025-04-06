# 🍔 Sistema de Menús con Laravel Blade  
Sistema de navegación con herencia de plantillas Blade que incluye 4 vistas interactivas y resaltado dinámico de menú.

## 🚀 Características
- **Vista Principal** con tarjetas de acceso
- **3 Secciones** (Inicio, Fotos, Contacto)
- Resaltado automático de opción activa
- Diseño responsive con Bootstrap 5
- Footer persistente en todas las vistas
- Sistema de rutas nombradas en Laravel

## ⚙️ Instalación
```bash
git clone https://github.com/SebastianProHacker/activity11menus.git
cd activity11menus
composer install
php artisan serve
🌐 Rutas Disponibles
Ruta	Descripción
/	Menú principal
/inicio	Página de inicio
/fotos	Galería de fotos
/contacto	Formulario de contacto
📂 Estructura del Proyecto
Copy
resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php         # Layout base
│   ├── menu.blade.php            # Vista principal
│   ├── home.blade.php            # Contenido de inicio
│   ├── fotos.blade.php           # Galería (usa Lorem Picsum)
│   └── contacto.blade.php        # Formulario básico
routes/
└── web.php                       # Definición de rutas
🛠️ Tecnologías Utilizadas
Frontend:
Bootstrap
Font Awesome

Backend:
Laravel
PHP

Herramientas:
Git
Composer

👨💻 Autor
Sebastián Navarro
GitHub
📧 contacto@sebastiannavarro.com

📄 Licencia
MIT License - Ver archivo LICENSE para detalles completos.
