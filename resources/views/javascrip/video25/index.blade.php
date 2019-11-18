@extends("theme1.$theme5.layouts")

@section("titles")
Timers, Timaout e interbalos
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


</div>

@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>
<script>
(function(){

    var contador = 0;
    //Timeout
 var saludo = function(){
    contador++;
    console.log(contador);
    setTimeout(saludo, 3000);

//     if(contador === 5){
//         clearInterval(intevalo);
//     }
 };
//saludo();

// //  setTimeout(saludo, 3000);

// //Interval

// var intevalo =setInterval(saludo, 3000);

}());




</script>


@endsection




