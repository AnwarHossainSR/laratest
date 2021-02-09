<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User, {{ $user['name']}}</h1>

    <form method="post">
        @csrf
		<fieldset>
			<h2>Are you sure ?</h2>
			<table>
				<tr>
					<td>Username : {{ $user['name'] }}</td>
				</tr>
                <tr>
					<td>Email : {{ $user['email'] }}</td>
				</tr>
                <tr>
					<td>Password : {{ $user['password'] }}</td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Delete"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
