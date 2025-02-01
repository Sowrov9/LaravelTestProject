<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<<<<<<< HEAD
    @if (session('S'))
        <h1>{{session('S')}}</h1>
    @endif
    <h1>Roles List</h1>
    <br><br>
    <table border="1" style="border-collapse:collapse">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Role</th>
        </tr>
        @foreach ($roles as $role )
            <tr>
                <td>{{$role["id"]}}</td>
                <td>{{$role["name"]}}</td>
                <td>{{$role["role"]}}</td>
            </tr>
        @endforeach
    </table>
=======
    <h1>Role Index</h1>
    <h1>Role Crud</h1>
    <h1>Updated from Github Remote.</h1>
    <h1>Updated from from local machine Remote.</h1>
    <h1>Updated from gitClone Folder</h1>
>>>>>>> 92ee3d5bc6c2290523660dc0db679fe7e80f0cd5
</body>
</html>
