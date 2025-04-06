# Sistema de Menús con Laravel Blade  
Sistema de navegación con herencia de plantillas Blade que incluye 4 vistas interactivas y resaltado dinámico de menú.

##  Características
- **Vista Principal** con tarjetas de acceso
- **3 Secciones** (Inicio, Fotos, Contacto)
- Resaltado automático de opción activa
- Footer persistente en todas las vistas
- Sistema de rutas nombradas en Laravel

## Estructura del Proyecto
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


