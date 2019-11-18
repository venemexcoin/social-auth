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
            <form action="">
                <input type="button" value="Cambio de Tamaño" onclick="zoom()">
            </form>
                <img id="trumb" src="http://lorempixel.com/400/400/" width="400" alt="" class="trumb">
        </div>
    </div>

</div>



@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>
<script>
var zoom = function(){
 var trumb = document.getElementById("trumb");
    if(trumb.className == "trumb"){
        trumb.className = "trumb grande";
    }else{
        trumb.className = "trumb";
    }


}


</script>


@endsection

