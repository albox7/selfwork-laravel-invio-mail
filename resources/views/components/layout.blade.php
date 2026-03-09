<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>{{ $title ?? 'Gorillas ~ un blog bestiale' }}</title>
		<link rel="shortcut icon" href="/favicon.ico">

		@vite('resources/css/app.css')
		
	</head>
	<body>

		{{ $slot }}

		@vite('resources/js/app.js')
	</body>
</html>