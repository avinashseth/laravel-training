<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working with Blade</title>
    <style>
    </style>
</head>
<body>

    @php
        $userConsent = true;
    @endphp

    <input name='active' type="checkbox" @checked(old('active', $userConsent)) /> You agree to sell your data

    @php
        $product['versions'] = [1,2,3,4];
    @endphp

    <select name="version">
        @foreach ($product['versions'] as $version)
            <option value="{{ $version }}" @selected(old('version') == $version)>
                {{ $version }}
            </option>
        @endforeach
    </select>
    

</body>
</html>