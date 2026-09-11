<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
</head>
<body>

    <h1>Welcome to Laravel Blade</h1>

    @if($user->isAdmin())
        <p>Welcome, Admin!</p>
    @else
        <p>Welcome, User!</p>
    @endif

</body>
</html>