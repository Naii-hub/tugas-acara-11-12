<!DOCTYPE html>
<html>
<head>
    <title>Conditional Rendering</title>
</head>
<body>

    @if($status == 'admin')
        <h1>Admin Panel</h1>

    @elseif($status == 'editor')
        <h1>Editor Panel</h1>

    @else
        <h1>User Panel</h1>

    @endif

    <hr>

    @switch($status)
        @case('pending')
            <p>Order Pending</p>
            @break

        @case('completed')
            <p>Order Completed</p>
            @break

        @default
            <p>Unknown Status</p>
    @endswitch

</body>
</html>