<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>เข้าสู่ระบบ</title>
	<link rel='stylesheet' href='{{asset('assets/css/wp.css')}}' type='text/css' media='all' />
	<meta name='robots' content='noindex,noarchive' />
	<meta name='referrer' content='strict-origin-when-cross-origin' />
	<meta name="viewport" content="width=device-width" />
</head>
	<body class="login login-action-login wp-core-ui  locale-en-us" style="background: url({{asset('assets/img/bg.jpg')}}); background-size: cover;">
		<div id="login">
			<h1><a href="https://wordpress.org/" title="Powered by WordPress" tabindex="-1">Powered by WordPress</a></h1>
			{{-- <div id="login_error">	Please log in again.<br />
			</div> --}}
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<p>
					<label for="user_login">อีเมล์<br />
					<input type="text" name="email" class="input" value="" size="20" /></label>
				</p>
				<p>
					<label for="user_pass">รหัสผ่าน<br />
					<input type="password" name="password" class="input" value="" size="20" /></label>
				</p>
					{{-- <p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Remember Me</label></p> --}}
				<p class="submit">
					<input type="submit" class="button button-primary button-large" value="เข้าสู่ระบบ" />
				</p>
			</form>

			<p id="nav">
				@if (Route::has('password.request'))
					<a href="{{ route('password.request') }}">ลืมรหัสผ่าน?</a>
				@endif
			
			</p>
		</div>
		<div class="clear"></div>
	</body>
</html>
