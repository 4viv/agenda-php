<?php

// credenciales de la base de datos
define('BD_USUARIO', 'root');
define('BD_PASSWORD', '');
define('BD_HOST', '127.0.0.1');
define('BD_NOMBRE', 'agendaphp');
define('BD_PUERTO', '8081'); // puerto opcional

$conn = new mysqli(BD_HOST, BD_USUARIO, BD_PASSWORD, BD_NOMBRE);

echo $conn->ping();