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
container 


<script>
//tipos de datos
var edad = "51"
// String - Cadenas de texto
var nombre = "Eduardo";
var apellido = "liendo";
// var texto = "Los mejores videos son de \"chamocell\" ";
// Arrayy Arreglos
var amigos = ["Carlos", "Alejandro", "Cesar"];

document.write(amigos[2]);



</script>

@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>

@endsection
