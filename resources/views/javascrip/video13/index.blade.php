@extends("theme1.$theme5.layouts")

@section("titles")

@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("layoutR")
{{ route('blog')}}
@endsection
@section("homeT")
Home
@endsection
@section("layout")
Blog
@endsection
@section("otros")  {{--} ruta--}}

@endsection
@section("otros1") {{-- Nompre de la ruta--}}

@endsection
@section("otros2") {{--class par poner--}}

@endsection

@section("styles")

@endsection

@section('content')

<div id="app">
    <div class="container">
        <h1 id="titulo">Titulo de nustro sitio web</h1>
        <p>1. Lorem ipsum dolor sit amet, consectetur adipisicing
             elit. Odio quasi magnam iste, obcaecati nesciunt culpa
             placeat sed! Assumenda, amet error, veniam minima unde
             soluta, beatae velit vero fugiat distinctio explicabo.</p>

        <p id="segundo">2. Lorem ipsum dolor sit amet, consectetur adipisicing
             elit. Odio quasi magnam iste, obcaecati nesciunt culpa
             placeat sed! Assumenda, amet error, veniam minima unde
             soluta, beatae velit vero fugiat distinctio explicabo.</p>

        <p>3. Lorem ipsum dolor sit amet, consectetur adipisicing
             elit. Odio quasi magnam iste, obcaecati nesciunt culpa
             placeat sed! Assumenda, amet error, veniam minima unde
             soluta, beatae velit vero fugiat distinctio explicabo.</p>

    </div>
</div>


@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>
<script>
      var elementosP = documet.getElementByName()


</script>

@endsection

