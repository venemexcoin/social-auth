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
     <div class="row">
        <div class="col-md-6 offset-2 ">
            <div class="card border-primary mb-3 text-center shadow-lg p-3 mb-6 bg-white rounded" style="max-width: 25rem; ">
                <div class="card-header">
                    <h3 class="CalcuT">Carlculadora</h3>
                </div>
                <div class="card-body text-center c-calcu">
                    <div class="row">
            <label class="col-md-3 calcuE">Valor1 </label>
            <input class="col-md-4 offset-1" type="text" id="numero1">
        </div>
        <div class="row mt-3">
            <label class="col-md-3 calcuE">Valor2 </label>
            <input class="col-md-4 offset-1" type="text" id="numero2">
        </div>
        </div>
            <div class="card-footer">
                <input  class="btn btn-secondary btn-lg btn-block" type="button" value="Sumar" onclick="alert(suma(10,50));">
            </div>
        </div>
        </div>
    </div>
<script>
var suma = function(numero1, numero2){
    var numero1 = parseFloat(document.getElementById("numero1").value);
    var numero2 = parseFloat(document.getElementById("numero2").value);

    var resultado = numero1 + numero2;

    return resultado;
}


</script>
@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>


@endsection

