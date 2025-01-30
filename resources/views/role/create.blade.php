<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .department-error{
            border: 1px solid red;
            color: red;
        }
    </style>
    <form action="{{url('role/store')}}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{old('name')}}"><br>
            @error('name')
                <span style="color: red">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="department">Department</label>
            <input class="@error('department') department-error  @enderror " type="text" name="department" value="{{old('department')}}"> <br>
            @error('department')
                <span style="color: red">{{$message}}</span>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
