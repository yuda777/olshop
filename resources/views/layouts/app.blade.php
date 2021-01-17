<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="dns-prefetch" href="//font.gstatic.com">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>olshop</title>
</head>
<body>
    @yield('content')
    <script src="{{ asset('js/app.js') }}" ></script>
    <script>
        var kijang3 = "kijang_3";
        console.log(kijang3);
    </script>
</body>
</html>
