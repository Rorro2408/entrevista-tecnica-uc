# Entrevista Técnica UC.
Respuestas a la Entrevista Técnica para la subdirección de desarrollo informático UC.

##Sección 1

Para ejecutar el código de la sección 1 escribir el siguiente comando en consola: ``php Seccion1.php``

## Sección 3

1) ¿Qué objetivo queremos cumplir con esta nueva plataforma?

2) ¿Quiénes serían los usuarios que usarían esta plataforma?

3) ¿Para cuando es necesario que la plataforma este disponible?

4) ¿Cuánto tenemos contemplado gastar para la construcción de la plataforma?

## Sección 4

1)Bajo el supuesto de que estamos trabajando con un front end Javascript, usaría la librería REACT, React es una buena librería de JS para este proyecto, dado que su construcción de páginas es basada en componentes, esto permite que cada aspecto de una página se mantenga modularizado, por ejemplo la carga de datos a mostrar en la página, y la carga de la página en sí se mantiene separado, y de esa manera disminuye la carga que el navegador sostiene al cambiar de página, permitiendo cambios rápidos entre las páginas del proyecto.

2)Usaría password_hash() función implementada en php que cifra contraseñas de manera segura, y luego guardar el hash de la contraseña en la base de datos, no la contraseña, de esta manera evitamos que en caso de que la base de datos sea comprometida, las contraseñas de nuestros usuarios no.

3)Buscaría librerías que tengan buen reputación y que sean activamente mantenidas por sus desarrolladores, el motivo de esto es para asegurarse qué, en caso de que se encuentren vulnerabilidades de seguridad en las librerías externas usadas, sus equipos de desarrollo estén disponibles para arreglarlas, y así evitamos el trabajo extra que implicaría cambiar la librería, desarrollar workarounds o incluso suspender el uso del proyecto desarrollado.
