<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/checkIn" method="post">
        @csrf
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="">

        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="">

        <label for="email">Email</label>
        <input type="text" name="email" id="">

        <label for="password">Password</label>
        <input type="password" name="password" id="">

        <label for="age">age</label>
        <input type="number" name="age" id="">

        <input type="submit">
    </form>
</body>
</html>