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

    </div>
</div>
<script>
       <h1 id="titulo">Titulo de nustro sitio web</h1>
    

</script>

@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>


@endsection

