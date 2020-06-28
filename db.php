<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'
);
?>
<!--- Puede usar el siguiente código para probar al principio la conexión con la DB:
if (isset($conn)) {
    echo 'DB is connected';
};
--->