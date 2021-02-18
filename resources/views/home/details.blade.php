<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details User</title>
</head>
<body>
    <h1>Details User</h1>


		<fieldset>
			<h2><a href="/home">Back</a></h2>
			<table>
				<tr>
					<td>Username : {{ $user->username }}</td>
				</tr>
                <tr>
					<td>Email : {{ $user->email }}</td>
				</tr>
                <tr>
					<td>Password : {{ $user->password }}</td>
				</tr>
			</table>
		</fieldset>

</body>
</html>
