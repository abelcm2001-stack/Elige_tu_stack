1. Cliente vs Servidor.

La diferencia principal es que el cliente es el navegador donde se ejecuta el HTML, CSS y JavaScript, mientras que el servidor recibe la petición del HTTP del usuario y procesa PHP y accede a la base de datos sí es necesario.
Nunca se debe confiar en los datos del cliente porque el usuario puede inspeccionar y modificar los datos antes de enviarlo. Toda validación debe realizarse en el servidor, independientemente de lo que se haga en el navegador.

2. Web estática vs Dinámica.

Una web estática muestra exactamente el contenido creado (fichero .html), son simples y rápidas mientras que una página web dinámica genera el contenido (HTML) adaptandolo según el usuario, sus preferencias o los datos almacenados en la base de datos.
Para una tienda online, la web dinámica permite gestionar productos, usuarios, carritos, pedidos, precios e inventario desde una base de datos, esto facilita actualizar el contenido sin necesidad de modificar manualmente las páginas.

3. La infraestructura (Servidores).

Apache recibe las peticiones HTTP y las gestiona, mientras que PHP-FPM ejecuta el código PHP mediante un conjunto de procesos reutilizables.
PHP-FPM es más eficiente que el CGI (modelo antiguo para ejecutar programas) porque evita crear un nuevo proceso PHP para cada petición.
Laravel actúa como framework de aplicación, proporcionando rutas, controladores, autenticación, acceso a datos y otras funcionalidades, es decir, es una herramienta que ayuda al programador a construir y organizar una página web sin tener que empezar desde 0.

4. Evaluación de Herramientas y Frameworks.

Se elige PHP por su amplia utilización en aplicaciones web, su ecosistema maduro y su compatibilidad con servidores como Nginx y Apache.
Laravel 12 facilita el desarrollo mediante el patrón MVC, separando modelos, vistas y controladores y también proporciona mecanismos de seguridad, validación y una estructura de directorios organizada que simplifica el mantenimiento del proyecto.
