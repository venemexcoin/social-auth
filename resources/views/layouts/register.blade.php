<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/3226d1ef96.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('fron/css/app.css')}}">

</head>
<body>

    @if(Session::has('message'))
    <div class="container">
        <div class="alert alert-{{ Session::get('typealert') }}" style="display:none">
            {{Session::get('message') }}
            @if($errors->any())
            <ul>
                @foreach ($errors->all as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            <script>
                $('alert').slideDown();
                setTimeout(function () {
                    $('alert').slideUp();
                }, 10000);

            </script>
        </div>
    </div>
    @endif

    @section('content')



    @show


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('fron/js/app.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
