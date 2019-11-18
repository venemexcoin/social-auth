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
    <div class="principal">
		<div class="wrap">
			<form class="formulario" action="">
				<input type="text" id="tareaInput" placeholder="Agrega tu tarea">
				<input type="button" class="boton" id="btn-agregar" value="Agregar Tarea">
			</form>
		</div>
	</div>

	<div class="tareas">
		<div class="wrap">
			<ul class="lista" id="lista">
                <li><a href="#">1 Lorem ipsum dolor sit amet.</a></li>
				<li><a href="#">2 Lorem ipsum dolor sit amet.</a></li>
				<li><a href="#">3 Lorem ipsum dolor sit amet.</a></li>
            </ul>

		</div>
	</div>

</div>



@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>
<script>
(function(){
    var lista = document.getElementById("lista"),
    tareaInput = document.getElementById("tareaInput"),
    btnNuevaTarea = document.getElementById("btn-agregar");



// Funciones
var agregarTarea = function (){
    var tarea = tareaInput.value,
        nuevaTarea = document.createElement("li"),
        enlace = document.createElement("a"),
        contenido = document.createTextNode(tarea);

        if(tarea === ""){
            tareaInput.setAttribute("placeholder", "agregar una tearea valida");
            tareaInput.className = "error";
            return false;
        }
        // Agregamos el contenido al enlace
        enlace.appendChild(contenido);
        //le establesemos un atributo href
        enlace.setAttribute("href", "#");
        //agregamos el enlace (a) a la nueva tarea(li)
        nuevaTarea.appendChild(enlace);
        //Agregamos la nueva tarea a la lista
        lista.appendChild(nuevaTarea);

        tareaInput.value = "";

        for (var i = 0; i <= lista.children.length -1; i++){
            lista.children[i].addEventListener("click", function(){
                this.parentNode.removeChild(this);
            });
        }
};

var complobarInput = function () {
    tareaInput.className = "";
    tareaInput.setAttribute("placeholder", "Agrega tu tarea");
};

var eliminarTarea = function () {
    this.parentNode.removeChild(this);
};

// Eventos

//Agregar tarea
btnNuevaTarea.addEventListener("click", agregarTarea);

//Comprobar Imput
tareaInput.addEventListener("click", complobarInput);

//Borrando elemento de la lista
for (var i = 0; i <= lista.children.length - 1; i++) {
    lista.children[i].addEventListener("click", eliminarTarea);

};

}());


</script>


@endsection




