<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luhgin</title>
</head>
<body>
    <h2>You are now in Login view</h2>
    <form action="/welcome.blade.php">
        <label for="email">Email</label><br>
        <input type="text" name="email" id="email" placeholder="Enter email here"><br>
        <label for="password">Password</label><br>
        <input type="text" name="password" id="password" placeholder="Enter password here">
        <input type="submit" value="Login">
    </form>
</body>
