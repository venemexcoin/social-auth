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
    <div class="row">
        <div class="col-md-8 offset-2">
            <a id="boton" href="http://www.falconmasters.com">FalconMasters</a>
            {{-- <button id="boton">Boton</button> --}}
            <input type="text" id="input">
        </div>
    </div>

</div>



@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>
<script>
(function(){


    var saludo = function(e){

        // console.log("este evento es de tipo: " + e.target);
        console.log('oh yeah');
        e.preventDefault();
    };
    // var saludo = function() {
    //     console.log('saludo!');
    // };
    // var saludo2 = function() {
    //     console.log('saludo2!');
    // };

    // var saludo = function(){
    //     alert('saludo');
    // };


    //var boton = document.getElementById("boton");
    //boton.addEventListener("click", saludo);

    var boton = document.getElementById("boton");
    boton.addEventListener("click", saludo);

//    boton.removeEventListener("click", saludo);
}())
</script>


@endsection

