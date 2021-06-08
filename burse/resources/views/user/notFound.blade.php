<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Пользователь не найден | {{ config('app.name') }}</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="initial-scale=1, width=device-width, shrink-to-fit=no" />
</head>
<body>

	Username: {{ $username }}, ID: {{ $id }}

</body>
</html>