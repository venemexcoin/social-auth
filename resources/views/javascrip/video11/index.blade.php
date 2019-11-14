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

@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>
<script>
    //funcion auto inbocable preteccion de codigo
(function(){

    var global = "Esta es una variable global";

var miFuncion = function(){

    // var variableLocal = "Esta es una variable local";

    alert(variableLocal);

    var globalM = "Esta es la variable modificada";

    alert(globalM);

    var FuncionLocal = function(){
        var variableLocal = "Esta es una variable local, dentro de una funcion local";

    }
    FuncionLocal();
}



miFuncion();

}())
</script>

@endsection

