<html>
<head>
<title>Mensaje Recibido</title>
</head>
<body>
<p>Ha recibido un mensaje de: {{ $msg['nombre_contacto' ] }} </p>
<p>email: {{ $msg['mail'] }}</p>
<p> Contenido: {{ $msg['contenido' ] }}</p>
</body>
</html>