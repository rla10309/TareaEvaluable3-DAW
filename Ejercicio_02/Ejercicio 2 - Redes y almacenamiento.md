# Ejercicio 2 - Redes y almacenamiento



## Despliegue de contenedores en red: Adminer y MariaDB

* Crea una red bridge `bdnet`

  ```bash
  docker network create bdnet
  docker network ls
  ```

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_02\capturas\cap01.png)

* Creamos un volumen para la base de datos `dataDB`

  ```bash
  docker volume create dataDB
  docker volume ls
  ```

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_02\capturas\cap02.png)

* Crea un contenedor con la imagen de `mariadb`con las especificaciones requeridas en el enunciado

  ```bash
  docker run -d --network bdnet --name myDB -e MYSQL_ROOT_PASSWORD=root -v dataDB:/var/lib/mysql mariadb
  ```

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_02\capturas\cap03.png)

* Creamos el contenedor con la imagen del programa Adminer con las especificaciones del enunciado

  ```bash
  docker run -d --network bdnet --name myadminer -p 8080:8080 -e ADMINER_DEFAULT_SERVER=myDB adminer
  ```

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_02\capturas\cap04.png)

* Se muestran los dos contenedores creados y funcionando

  ```bash
  docker ps -a
  ```

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_02\capturas\cap06.png)

* Abrimos *Adminer* para conectar con el servidor de la base de datos en el navegador

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_02\capturas\cap07.png)

* Crea una base de datos llamada ***despliegue***.

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_02\capturas\cap08.png)

* Mostramos los datos generados por el contenedor del servidor de base de datos

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_02\capturas\cap09.png)

* Mostramos el borrado de los contenedores, de la red utilizada y del volumen

  ```bash
  docker rm -f $(docker ps -a -q)
  docker ps -a
  docker network prune
  docker network ls
  docker volume prune
  docker volume ls
  ```

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_02\capturas\cap10.png)