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

    </div>
</div>
<script>
        //console.log("video12");

          var texto = "Eduardo Alfonso Liendo";
        //var nuevoTexto = texto.length;
        //var nuevoTexto = texto.substring(3); // coeta la cadena de texto al principio
        //var nuevoTexto = texto.substr(0,7); //corta y deja el numero de caracteres indicados
        // var texto2 = texto.indexOf("n") + 1;
        // var nuevoTexto = texto.indexOf("n", texto2); //busuqda de caracteres (con parametro de Busqueda)

        // var nuevoTexto = texto.lastIndexOf("n"); //cuenta la cadena de tecto desde el final a sia delante

        // var  nuevoTexto = texto.replace(texto, "Jodete ahora"); //remplaza la cadena o una parte del texto
         //var nuevoTexto = texto.toUpperCase();  //coloca toda la cadena de texto en mayuscula
         var nuevoTexto = texto.toLowerCase();  //coloca toda la cadena de texto en minuscula

          document.write(nuevoTexto);

</script>

@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>


@endsection

