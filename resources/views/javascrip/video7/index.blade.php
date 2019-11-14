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

// for(i = 1; i <= 100; i++ ){
//     document.write(i + '<br/>')
// }

// var numeroDeUsuarios = 50;

//  for(i = 1; i <= numeroDeUsuarios; i++ ){
//      document.write(i + "<br/>");
//  }

var dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];

for( i = 0; i <= dias.length - 1; i++){
    document.write( dias[i] + "<br/>")
}


</script>
@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>

@endsection

