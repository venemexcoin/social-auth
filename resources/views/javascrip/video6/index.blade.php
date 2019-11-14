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
 var nombre = "Eduardo Alfonso Liendo Berrotera",
 edad = 8;

//  if(nombre == "Eduardo"){
//      document.write(" Bienvenido" + " " + nombre);
//  }else{
//      document.write(" Bienvenido Anonimo" );

//  }

// if(edad >= 18){
//     document.write("jodere eres un culo cagado");

// }else if(nombre == "Eduardo Alfonso Liendo Berroteran"){

//   document.write("Usted es el patron que quiere que diga")

// }else{
//     document.write("Puede pasar usted");
// }



</script>
@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>

@endsection

