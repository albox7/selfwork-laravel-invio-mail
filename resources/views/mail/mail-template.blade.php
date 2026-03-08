<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Mail template</title>
</head>
<body>
	<h1>Hai ricevuto una nuova email ecco i dettagli</h1>
	<p>Nome: {{$contactMail['name']}}</p>
	<p>E-mail: {{$contactMail['email']}}</p>
	<p>Messaggio: {{$contactMail['messaggio']}}</p>
</body>
</html>