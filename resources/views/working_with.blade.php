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
    @production
        This is Production Server
    @endproduction

    @env('local')
        This is Localhost
    @endenv

    @env(['local', 'staging'])
        This is localhost and staging server
    @endenv
</body>
</html>