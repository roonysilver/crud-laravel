<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management | update</title>
</head>
<body>
    <form action="/edit/<?php echo $users[0]->id; ?>" method="POST">
        @csrf
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="stud_name" value="<?php echo $users[0]->name; ?>"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Update">
                </td>
            </tr>
        </table>
    </form>
    <a href="/view">Back</a>
</body>
</html>