# Ejercicio 3 - Imagen con Dockerfile

## Crear una imagen con un servidor web que sirva un sitio web

* Mostramos la carpeta con los ficheros del sitio web y el Dockerfile

  ![](capturas\cap01.png)

* Contenido del archivo Dockerfile

  ![](capturas\cap02.png)

* Mostramos la creación de la nueva imagen

  ```bash
  docker build -t pilarfn/myimage:v1
  ```

  ![](capturas\cap03.png)

* Creamos el contenedor a partir de nuestra imagen

  ```bash
  docker run -d --name mi_servidor -p 9000:80 pilarfn/myimage:v1
  ```

  ![](capturas\cap04.png)

* Acceso al navegador con el sitio web servido

  ![](capturas\cap05.png)

* Procedemos a distribuir la imagen usando Docker Hub

  * Autenticación

    ```bash
    docker login
    ```

    ![](capturas\cap06.png)

  * Distribución de la imagen

    ```bash
    docker push pilarfn/myimage:v1
    ```

    ![](capturas\cap07.png)

  * Imagen distribuida en el repositorio

    ![](capturas\cap08.png)

## WEBGRAFIA

* Apuntes del aula virtual del módulo de DESPLIEGUE DE APLICACIONES WEB

* [Documentación oficial Docker](https://docs.docker.com/reference/)

  