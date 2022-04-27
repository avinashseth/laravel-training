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
            padding: 5px;
        }
        .grey {
            border: 5px solid grey;
        }
        .white {
            color: white;
        }
    </style>
</head>
<body>
    @php
        $isActive = rand(0,1);
        $hasError = rand(0,1);
    @endphp
 
    <span @class([
        'white' => $isActive,
        'grey' => ! $isActive,
        'red' => $hasError,
    ])>Hi</span>

</body>
</html>