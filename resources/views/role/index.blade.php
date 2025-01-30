<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>
