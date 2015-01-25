<?php 
/**
* @author Anibal Copitan
* @url www.acopitan.blogspot.com
* 
* Page for send mail o other action Ajax.
**/
$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : false;
$mailVisit = $_REQUEST['email'];
$name = $_REQUEST['nombre'];

if ($action == 'mail') {
    // The message
    $message = "
    Gracias por contactarnos $name  \r\n\r\n
    Descarga el Ranking en \r\n
    <a href='https://github.com/enlacee/fbi-peru'>descargar ranking</a> \r\n
    ";

    // In case any of our lines are larger than 70 characters, we should use wordwrap()
    $message = wordwrap($message, 70, "\r\n");

    // Send
    $flag = mail($mailVisit, 'Future Brand descarga ranking', $message);

    if ($flag) {
        echo 1;
    } else {
        echo 0;        
    }
} else {
    echo 0;
}

