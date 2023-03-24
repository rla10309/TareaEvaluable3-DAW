# Ejercicio 3 - Imagen con Dockerfile

## Crear una imagen con un servidor web que sirva un sitio web

* Mostramos la carpeta con los ficheros del sitio web y el Dockerfile

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_03\capturas\cap01.png)

* Contenido del archivo Dockerfile

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_03\capturas\cap02.png)

* Mostramos la creación de la nueva imagen

  ```bash
  docker build -t pilarfn/myimage:v1
  ```

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_03\capturas\cap03.png)

* Creamos el contenedor a partir de nuestra imagen

  ```bash
  docker run -d --name mi_servidor -p 9000:80 pilarfn/myimage:v1
  ```

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_03\capturas\cap04.png)

* Acceso al navegador con el sitio web servido

  ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_03\capturas\cap05.png)

* Procedemos a distribuir la imagen usando Docker Hub

  * Autenticación

    ```bash
    docker login
    ```

    ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_03\capturas\cap06.png)

  * Distribución de la imagen

    ```bash
    docker push pilarfn/myimage:v1
    ```

    ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_03\capturas\cap07.png)

  * Imagen distribuida en el repositorio

    ![](C:\Users\aprei\OneDrive\Documentos\TAREA_DOCKER\Ejercicio_03\capturas\cap08.png)