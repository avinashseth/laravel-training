<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working with Alerts</title>
    <style>
        .alert-box {
            color: white;
            background: red;
            padding: 5px;
        }
        .alert-green {
            color: white;
            background: green;
            padding: 5px;
        }
    </style>
</head>
<body>
    <x-alert alerttype="danger" message="Invalid Login Credentials" />
    <x-alert alerttype="success" message="Payment done succesffuly" />

    <x-login formurl="https://google.com" />
</body>
</html>