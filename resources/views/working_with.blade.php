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
    @isset($users)
        @php
            print_r($users);
        @endphp
    @else
        Users variable not defined <br />
    @endisset

    @empty($users)
        You don't have anybody in your friends list right now
    @else
        You have friends in your friends list
    @endempty
</body>
</html>