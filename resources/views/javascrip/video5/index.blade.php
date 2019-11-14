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
<div class="container">

<h1> </h1>
</div>
<script>
var amigos = ["Carlos","Cesar","Alex", "manuel"];

// document.write("Tienes " + amigos.length + " amigos");

// amigos[amigos.length] = "Fernando";

// amigos.push("Fernado", "Luis", "Favian", "godoy");

// amigos.pop();

// amigos2 = ["Luis", "Favio", "Godoy", " Fernanda"];

// amigos3 = amigos .concat(amigos2);

// amigos2 = amigos.join(" | ")

// document.write(amigos2);

var ordenados = amigos.sort();

document.write(ordenados)
</script>
@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>

@endsection

