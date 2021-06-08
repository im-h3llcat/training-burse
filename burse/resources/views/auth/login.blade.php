@extends('layouts.auth')

@section('title', @trans('auth.loginTitle'))

@section('container')
<h3 class="is-size-4 mb-3">{{ trans('auth.loginTitle') }}</h3>

<form action="{{ url('auth/login') }}" method="POST">
	{{ csrf_field() }}

	<div class="field">
		<label class="label">{{ trans('auth.formLogin') }}</label>

		<div class="control">
			<input class="input" type="text" name="login" placeholder="mail@example.com">
		</div>
	</div>

	<div class="field">
		<label class="label">{{ trans('auth.formPassword') }}</label>

		<div class="control">
			<input class="input" type="password" name="password" placeholder="••••••••">
		</div>
	</div>

	<div class="field">
		<div class="control">
			<label class="checkbox">
				<input type="checkbox" name="agree">

				{!! trans('auth.iAgreeWith', [
					'a' => trans('auth.termsConditionsLink', ['link' => url('/legal/' . Config::get('app.locale') . '/terms')]),
					'b' => trans('auth.privacyPolicyLink', ['link' => url('/legal/' . Config::get('app.locale') . '/privacy')]),
				]) !!}
			</label>
		</div>
	</div>

	<div class="control">
		<button type="submit" class="button is-link">{{ trans('auth.buttonLogin') }}</button>
	</div>
</form>
@endsection