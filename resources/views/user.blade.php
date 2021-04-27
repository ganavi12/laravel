<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <form action="usercontroller" method="post">
        <h1>User login</h1>
        <input type="text" name="email"><br><br>
        <input type="password" name="password"><br><br>
        <input type="text" name="adress" placeholder="adress" required>
        <!--@error('address')
<span style = color:red>{{$message}}</span>
@enderror -->
        <br><br>
        <input type="text" name="city" placeholder="city" required`><br><br>
        {{@csrf_field()}}
        <button type="submit">login</button>
    </form>

</body>

</html>