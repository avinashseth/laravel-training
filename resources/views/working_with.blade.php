<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working with Blade</title>
    <style>
        .red {
            background: red;
            color: white;
            padding: 5px;
        }
    </style>
</head>
<body>
    @foreach ($users as $user)
        @if ($loop->first)
            This is the first iteration.
        @endif
    
        @if ($loop->last)
            This is the last iteration.
        @endif

        <p>This is user {{ $user->id . ' ' . $loop->index }}</p>

    @endforeach
</body>
</html>