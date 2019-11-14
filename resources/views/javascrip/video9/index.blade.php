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

    <h1 id="edad"></h1>


</div>
</div>
<script>

var numeroMaximo = function(valor1, valor2){
    if(valor1 > valor2 ){
        return valor1;
    }
       return valor2;
}
 document.write("El numero maximo es : " + numeroMaximo(1,7));



// function saludo(nombre){
//     document.write("Hola Bienvenodo a Chamocell" + nombre);
// }

// saludo( " Arturo" );

//  var suma = function suma(numero1,numero2){
//     var numero1 = numero1;
//     var numero2 = numero2;
//     return numero1 + numero2;
// }

// document.write( suma(0.02525254,0.14747058));

// document.write("<br>");

// document.write(suma(10,70));

</script>
@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>

@endsection

