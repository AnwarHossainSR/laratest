<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User List</title>
</head>
<body>

    <h1>User list</h1>
    <h1>{{ session('msg') }}</h1>
    <a href="/home">Back</a> |
    <a href="/logout">logout</a>

    <br>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>PASSWORD</td>
            <td>TYPE</td>
            <td>ACTION</td>
        </tr>
        @foreach($list as  $value)
        <tr>
            <td>{{ $value['id'] }}</td>
            <td>{{ $value['username'] }}</td>
            <td>{{ $value['email'] }}</td>
            <td>{{ $value['password'] }}</td>
            <td>{{ $value['type'] }}</td>
            <td>
                <a href="/home/details/{{ $value['id'] }}">Details</a> |
                <a href="/home/edit/{{ $value['id'] }}">Edit</a> |
                <a href="/home/delete/{{ $value['id'] }}">Delete</a>
            </td>
        </tr>
        @endforeach

        {{-- @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['id'] }}</td>
            <td>{{ $list[$i]['name'] }}</td>
            <td>{{ $list[$i]['email'] }}</td>
            <td>{{ $list[$i]['password'] }}</td>
            <td>
                <a href="/home/edit/{{ $list[$i]['id'] }}">Edit</a> |
                <a href="/home/delete/{{ $list[$i]['id'] }}">Delete</a>
            </td>
        </tr>
        @endfor --}}
    </table>
</body>
</html>
