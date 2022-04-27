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
    @if($age > 18)
        You can vote
    @elseif($age >= 16 && $age < 18)
        You are not allowed to vote but you can see how to vote
    @else
        You cannot vote
    @endif
</body>
</html>