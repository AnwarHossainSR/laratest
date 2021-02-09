<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h1>Login Page</h1>

	<form action="/login" method="post">
        @csrf
		<fieldset>
			<legend>Login</legend>
            <div style="color: red; font-weight:bold;">
                @if(Session::has('empty'))
                <br>
                    {{Session::get('empty')}}

                @endif
            </div>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
