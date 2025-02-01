<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('user/store')}}" method="post">
        @csrf
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name"><br>
        </div>
        <div>
            <label for="email">email</label><br>
            <input type="email" name="email"><br>
        </div>
        <div>
            <label for="phone">phone</label><br>
            <input type="text" name="phone"><br> <br>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
