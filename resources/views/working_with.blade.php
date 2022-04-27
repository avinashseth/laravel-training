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
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>
    <div id="app">
        {{ $message }}
    </div>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello World from Laravel + Vue!'
            }
        })
    </script>
</body>
</html>