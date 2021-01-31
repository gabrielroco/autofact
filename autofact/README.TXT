Aplicacion creada en Laravel 8.x

Instalacion y Handler de Usuarios en Breeze (ver Laravel Breeze para info)
    - composer require laravel/breeze --dev
    - composer install breeze
    - npm install
    - npm update

Login/Register default de Laravel 8.x
Usuario puede ingresar e ir a ver Formulario para contestar respuestas.
Agregado el Select tipo de usuario en el registro para obviar un handler que me permita tener el primer usuario como
administrador y tener un mantenedor de usuarios para tener el resto como usuarios normales.
Email de usuario es unico

El usuario registra respuestas y luego solo puede ver las respuestas que el usuario en sesion ha creado.
El Administrador tiene acceso a "ver todas las respuestas"

Se usa consoletvs/charts como graficos.


Metodos de prueba:

Se crea usuario admin y usuario normal.

Se verifica que el usuario normal solo pueda tener acceso a ver sus propios datos
Se verifica que el usuario administrador pueda ver todas las respuestas

Rutas:

Localhost:

questions/ -> ver respuestas de uno
questions/create -> ir al Formulario
questions/ver -> ver desde admin todas las respuestas
