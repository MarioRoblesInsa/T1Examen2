# Ejercicio 1 (Obligatorio) - Repositorios (0.5 puntos)

* Crea un repositorio en github que se llame **T1Examen2**
    * Repositorio privado
    * En las opciones de creación marca **Add a README file**
* Desde la página de github edita **README.md** y añade **Nombre y apellidos haciendo el examen 2** y haz el commit que se sugiere al final de la página.
* En **Settings -> Manage access** invíta al profesor (**xulioxesus@gmail.com**) a colaborar en tu repositorio.
* Clona tu repositorio en la máquina de desarrollo
* A partir de este momento ya debes trabajar en la máquina de desarrollo
* Copia el enunciado y el directorio **e3** a tu repositorio. Haz un commit y un push. Podrás ver de forma más clara el enunciado.


# Ejercicio 2 - PHP desde cero (3 puntos)

Crea un fichero **e2.php**

* El fichero debe estar basado en la plantilla de bootstrap
* El código php debe estar en el body de dicha plantilla
* Crea un número de párrafos aleatorio entre 1 y 20. Puedes utilizar la función **random_int** para ello.
* Cada párrafo debe contener un número aleatorio también de caracteres. El texto del que debes hacer subcadenas es:
    * "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    * Mínimo 10 letras. Máximo la longitud del texto anterior.
* Observarás que cada vez que recargues la página el contenido cambia.

# Ejercicio 3 - Depurar y corregir (3 puntos)

En el directorio **e3** está la aplicación de blog con multitud de errores. ¡Alguien la ha destrozado! Debes reparar la aplicación con todos los fallos que encuentres.

* Empieza probando **index.php**
* Comenta cada modificación que hagas poniendo al inicio del comentario tus iniciales. **JJLP** sería mi caso.
* Utilizar el depurador te ayudará bastante.

# Ejercicio 4 - PHP desde cero (3 puntos)

* Crea **index.php**:
    * Debe estar basado en la plantilla de bootstrap.
    * Debe contener un formulario que tiene que estar creado como un componente aparte. Debe aparecer en una carpeta components.
    * El formulario debe tener tres campos.
        * **x**: para poner un número real.
        * **y**: para poner otro número real.
        * **operacion**: para poder escribir **suma**, **resta**, **division**, **multiplicacion**
    * El formulario debe tener un botón para ser procesado por **controller.php**
* **controller.php**
    * Debe llamar a una función **comprobarErrores** que valide que la operacion es una de las indicadas.
    * Si la función anterior devuelve un error, debe redireccionar a una página **error.php** que indica que se ha producido un error. Se debe guardar la cadena de la operación que ha producido el error en un fichero **error.txt**.
    * Si la función anterior es correcta, debe calcular el resultado de la operación y escribirlo en un fichero **exito.txt**. En este caso el controlador redirecciona a exito.php que tiene un mensaje de que la operación se ha realizado con éxito.
    * Las páginas de **error.php** y **exito.php** deben tener un enlace que permita volver a **index.php**.
    * El controlador debe contener el mínimo código posible. Crea las funciones que te hagan falta e inclúyelas en una libreria **controller.lib.php** que debe estar en el directorio **lib**.
    * Para las conversiones de los cadenas de texto a números reales puedes utilizar la función **floatval**.

# Ejercicio 5 (Obligatorio) - Finalizar y entregar el examen (0.5 puntos)

* Realiza un commit y un push a tu repositorio.