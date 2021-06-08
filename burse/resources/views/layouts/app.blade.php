<!DOCTYPE html>
<html class="has-background-light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>@yield('title') | {{ config('app.name') }}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, width=device-width, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
	@section('head')
	@show
</head>
<body>
	@section('body')
	@show

	@section('footer')
	<div class="container-fluid has-background-white px-6 py-6 my-6">
		<center>
			<p>&copy; {{ date('Y') }} {{ config('app.name') }}. {{ trans('app.allRightsReserved') }}</p>

			<p>
				{!! trans('app.termsConditionsLink', ['link' => url('/legal/' . Config::get('app.locale') . '/terms')]) !!},
				{!! trans('app.privacyPolicyLink', ['link' => url('/legal/' . Config::get('app.locale') . '/privacy')]) !!}.
			</p>
		</center>
	</div>
	@show
</body>
</html>