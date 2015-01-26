=======
# PBI-PERÚ
Landing page with animations webdesign responsive
website : [marcasperuanasdelfuturo](http://www.marcasperuanasdelfuturo.com)




## Requirements
Generar documento excel con todo lo gente registrada en la pagina:

1. formulario de ingreso. **Descarga el Ranking aquí**.

    index.html

2. Generacion del reporte.

    excel.php


## Developer
1. **Configura correo FROM:**

en el archivo send-mail.php:41
ver codigo en:

    /**_layout mail***/
    $to = $mailVisit;
    $fromName = ''; // Enter mail Comapny contacto@dominio.com 
    $message = $messageLab;

2. **Limpiar base de datos**

Eliminar o limpiar la base de datos existe un archivo donde se almacenan todos los
usuarios que realizan la solicitu de *Descarga el ranking*
Eliminar este archivo.
    
    mysqlitedb.db



## Resouce dev animations
 
1. [linsten scroll jquery](http://api.jquery.com/scroll/)

