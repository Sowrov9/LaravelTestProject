<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User list</h1>
    <br><br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Has Girlfriend?</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user["id"]}}</td>
                <td>{{$user["name"]}}</td>
                <td>{{$user["has-girlfriend"]}}</td>
            </tr>
        
        @endforeach
    </table>
</body>
</html>