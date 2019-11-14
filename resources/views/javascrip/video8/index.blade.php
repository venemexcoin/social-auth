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

var dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];

    var numeroDias = dias.length - 1;
    var i = 0;

    while(i <= numeroDias){
        document.write( dias[i] + "<br/>");
        i++;
    }

    do{
        // Simpre ejecuta al menos una vez
    }while(condicion);


</script>
@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>

@endsection

