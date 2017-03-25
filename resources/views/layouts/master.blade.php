<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 一日體驗班 - todo 範例程式</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <style>
        body {
            font-family: 'Raleway';
            margin-top: 25px;
        }

        button .fa {
            margin-right: 6px;
        }

        .table-text div {
            padding-top: 6px;
        }

        .form-inline {
            display: inline;
        }

        .check {
            color: #ccc;
            text-decoration: line-through;
        }
    </style>

    <script>
        $(function () {
            $('#task-name').focus();
        });
    </script>
</head>
<body>

@yield('content')

</body>
</html>
