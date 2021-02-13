<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome home!</h1>
    <h1>{{ session('msg') }}</h1>
    <a href="/home/create">Create user</a> |
    <a href="/home/userlist">View user list</a> |
    <a href="/logout">logout</a>


</body>
</html>
