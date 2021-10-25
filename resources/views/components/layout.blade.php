<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geek pro Coder | {{ $title }}</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/main.css">


</head>

<body>
    @include('include.header')
    {{ $body }}
    @include('include.footer')

    <script src="./assets/bootstrap/js/bootstrap.js"></script>
    <script src="./assets/js/pages.js"></script>
</body>

</html>
