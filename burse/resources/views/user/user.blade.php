<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>{{ $username }} | {{ config('app.name') }}</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="initial-scale=1, width=device-width, shrink-to-fit=no" />
</head>
<body>

	<h2>{{ trans('user.user') }}</h2>

	Username: {{ $username }}, ID: {{ $id }}

</body>
</html>