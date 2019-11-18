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



            </div>
        </div>

    </div>



    @endsection

    @section('scripts')
    <script src="{{asset("fron/js/js.js")}}"></script>
    <script>
    (function(){


    }())
    </script>


    @endsection

