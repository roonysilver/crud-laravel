<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example</title>
</head>
<body>
    <form action="/user/register" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>UserName</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>PassWord</td>
                <td><input type="text" name="password" id=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="" value="Register">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>