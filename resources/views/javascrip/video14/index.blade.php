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
        <h1 id="titulo" class="text-center">Titulo de nustro sitio web</h1>
        <div id="subtitilo"></div>
        <p> 1. Lorem ipsum dolor sit amet, consectetur adipisicing
             elit. Odio quasi magnam iste, obcaecati nesciunt culpa
             placeat sed! Assumenda, amet error, veniam minima unde
             soluta, beatae velit vero fugiat distinctio explicabo.</p>

        <p id="segundo"> 2. Lorem ipsum dolor sit amet, consectetur adipisicing
             elit. Odio quasi magnam iste, obcaecati nesciunt culpa
             placeat sed! Assumenda, amet error, veniam minima unde
             soluta, beatae velit vero fugiat distinctio explicabo.</p>

        <p> 3. Lorem ipsum dolor sit amet, consectetur adipisicing
             elit. Odio quasi magnam iste, obcaecati nesciunt culpa
             placeat sed! Assumenda, amet error, veniam minima unde
             soluta, beatae velit vero fugiat distinctio explicabo.</p>

    </div>
</div>



@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>
<script>

    var elementosP = document.getElementsByTagName("p");
    var segundoParrafo = document.getElementById("segundo");

    // 1. Crear el elemento
    var elemento = document.createElement("h2");
    //2. Crear un nodo de texto
    var contenido = document.createTextNode("Este es nuestro Titilo");
    //3. Añadir el nodo de texto al elemento
    elemento.appendChild(contenido);
    //4. Agregar atributos al fa-elementor
    elemento.setAttribute("align", "center");
    //5.Agregar el elemento al documento
    document.getElementById("subtitilo").appendChild(elemento);  //ejemplo 1
    // document.body.appendChild(elemento);  //para agregarlo al final

</script>

@endsection

