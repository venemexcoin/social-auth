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
    var fecha = new Date();
    document.write(fecha);

    fecha.getHours();
    console.log(fecha.getHours() - 12);
    console.log(fecha.getMinutes());
    console.log(fecha.getSeconds());

    console.log(fecha.getDay());
    console.log(fecha.getDate());
    console.log(fecha.getMonth());
    console.log(fecha.getFullYear());


}());

</script>

@endsection




