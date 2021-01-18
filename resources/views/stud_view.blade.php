<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management | View</title>
</head>
<body>
    <a href="insert">Add</a>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td><a href="edit/{{ $user->id }}">Edit</a></td>
                <td><a href = 'delete/{{ $user->id }}'>Delete</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>