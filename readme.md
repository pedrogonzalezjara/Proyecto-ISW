Instalación Proyecto Curriculum
Grupo: 07 
Neftali Madariaga C.
Marco Palacios F.

Paso 1: Instalar servidor de pruebas Apache2
$sudo apt-get install apache2
Paso 2: Instalar los módulos básicos de PHP5
$sudo apt-get install php5 libapache2-mod-php5 php5-curl php5-mcrypt php5-cli
	Para que se encuentren habilitados (mcrypt, por ejemplo requiere habilitación manual):
	$sudo php5enmod mcrypt
Paso 3: Reiniciar el servidor Apache
$sudo service apache2 restart
Paso 4: Ahora sigue instalar composer, para lo cual es recomendable instalar curl
$sudo add-apt-repository ppa:costamagnagianfranco/ettercap-stable-backports
$sudo apt-get update
$sudo apt-get install curl
Paso 4: Instalamos Composer
curl -sS https://getcomposer.org/installer | php
Te  debe aparecer un cuadro con info referente a la instalación correcta y que existe el archivo 'composer.phar', pero aquí hay un detalle, ya que composer de esta manera solo es funcional para el directorio donde se está instalando, por lo tanto te recomiendo moverlo a una ubicación donde pueda ser llamado desde cualquier punto del sistema:
$sudo mv composer.phar /usr/local/bin/composer
Con lo cual podemos llamar a composer desde cualquier lugar, y las veces que sea.
Paso 5: Instalar el gestor de base de datos PostgreSQL, 
Para ello se ejecuta el siguiente comando:
$sudo apt-get install postgresql postgresql-client postgresql-contrib libpq-dev
Luego ejecutamos el siguiente comando y definimos una contraseña para el usuario “postgres”
$sudo –u postgres psql
Aparecerá la siguiente línea
Postgres=#
Ahí se escribe el comando para definir la contraseña:
ALTER USER postgres PASSWORD  ‘tucontraseña’;   (con comillas)
Ahora se escribe \q para salir,
Paso 6: PGADMIN3
Para usar PostgreSQL en modo grafico es necesario instalar pgadmin3, para esto:
$sudo apt-get install pgadmin3
Paso 7: Configurar
Es necesario cargar la base de datos para ejecutar el proyecto:
Se abre pgadmin3 
Click en File->Add server y completar los campos
Name: por ejemplo Ubuntu (por poner algo)
Host: localhost
Port: 5432
Service: Se deja en blanco
Maintenance DB: postgres
Username: postgres
Password: (aquí va la password anteriormente definida)
Y Aceptar
Donde dice Databases click derecho en New Database, se define un nombre, ejemplo ‘mibasededatos’ sin comillas, click en la pestaña que dice SQL, click en File->Open y se carga el archivo dump.sql del proyecto y ejecutarlo con el icono verde similar al Play.
Paso 8: Descarga del Proyecto
Para descargar el proyecto hay que ir a la siguiente direccion en el navegador:
https://github.com/nmadariaga/Proyecto-ISW  y al lado derecho darle click a Download ZIP.
Descomprimir el proyecto y para llevarlo al directorio donde se ejecutara necesitamos ir como superusuario, para esto ejecutamos en un terminal 
$sudo nautilus 
Vamos a la direccion /var/www/html y pegamos la carpeta del proyecto.
	Paso 9: Unir base de datos al proyecto
Para conectarla base de datos al proyecto es necesario abrir la carpeta del proyecto e ir a
/app/config/ y abrir el archivo database.php con algun editor de texto y buscamos esta parte del codigo:
 
En ‘database’ va el nombre de la base de datos anteriormente creada.
En ‘username’ escribimos postgres y en ‘password’ la contraseña anteriormente definida.
Guardar cambios y cerrar.
Por terminal vamos al directorio del proyecto de la siguiente manera:
Cd /var/www/html/Proyecto-ISW-master y ejecutamos el siguiente comando:
$sudo php artisan serve con esto se ejecuta el servidor localhost:8000
Paso 10: Finishim!
Ahora por el navegador web ingresamos a localhost:8000/login y estaremos en la pantalla de inicio del proyecto.


