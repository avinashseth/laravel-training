<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with Ajax</title>
</head>
<body>
    <p><input type="text" name="email" id="email"/></p>
    <p style="color:red;" id="feedback"></p>
    <p><button id="verfiy">Check Email</button></p>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $('#verfiy').click(function() {
            $.ajax({
                method: "post",
                url: '/v1/user/verify-user',
                data: {"email": $('#email').val()},
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    if(data.status) {
                        $('#feedback').html(data.message)
                    }
                }
            });
        });
    </script>
</body>
</html>