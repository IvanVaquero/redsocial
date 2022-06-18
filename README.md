# Ivan Vaquero - Red Social

## Stack

- **Docker** -> mysql, php, nginx
- **Front** -> Vue, Boostrap
- **Back** -> Laravel, PHP
- **BBDD** -> sql
- **Version control** -> Git

## Explicación de app

Esta aplicación esta basada en un modelo **Modelo Vista Controlador**, de forma que tenemos la siguiente estructura:
#### Modelos
- **Post** - Post que se suben en la red social
- **Type**  - Tipo de post
- **User**  - Usuario registrado en la red social
#### Controladores
- **PostsController** - Controla las interacciones y meotdos que se hace con los Post
- **TypesController**  - Controla las interacciones y meotdos que se hace con los Tipos
- **UsersController**  - Controla las interacciones y meotdos que se hace con los Usuarios
#### Vistas
- **Redsocial** - Blade principal de Laravel
- **App**  - Vista vue donde se llama la app y sus paginas 
- **Login**  - Pagina donde se visualiza el form de login
- **Register**  - Pagina donde se visualiza el form de registro
- **Home**  - Pagina principal donde se cargan todos los posts

## Funcionamiento

1. Primero de todo debemos iniciar los contenedores.
2. Seguidamente instalamos npm
3. Una vez instalado, realizamos un "artisan serve"
4. Ejecutamos las migraciones del back
5. Ejecutamos los seeders que nos rellenaran las tablas de la base de datos
6. Finalmente ya tendremos la aplicación corriendo con los datos añadidos
