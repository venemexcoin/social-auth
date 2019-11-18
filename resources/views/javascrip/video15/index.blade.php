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
       <ol id="lista">
           <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Su</li>
           <li> consectetur adipisicing elit. Su</li>
       </ol>

    </div>
</div>

<script>
        var elemento = document.createElement("li"),
            contenido = document.createTextNode("Nuevo Texto");

            elemento.appendChild(contenido);

            //var padre3 = document.getElementsByTagName("li")[0].parentNode;
            var padre3 = document.getElementById("lista");
            // padre3.appendChild(elemento);
            primerElento = document.getElementsByTagName("li")[1];
            padre3.insertBefore(elemento, padre3);


    </script>

@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>


@endsection

