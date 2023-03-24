# Ejercicio 2 - Redes y Almacenamiento

## Despliegue de contenedores en red: Adminer y MariaDB

* Crea un red bridge 

  ```bash
  docker network create dbnet
  ```

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_02\capturas\cap01.png)

* Debemos crear un contenedor con una imagen `mariaDB`conectado a la red creada anteriormente y con un volumen de datos persistente. En este caso lo haremos usando volúmenes docker.

  Primero creamos el volumen.

  ```bash
  docker volume create dataDB
  ```

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_02\capturas\cap02.png)

​	Y después creamos el contenedor conectado a la red

```bash
docker run -d --name midb --network bdnet -v dataDB:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=root mariadb
```

​	

```

```

