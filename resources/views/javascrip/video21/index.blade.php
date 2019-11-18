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
            <div class="card  border-primary mb-6 text-center shadow-lg p-3 mb-6 bg-white rounded" style="max-width: 25rem;">
                <div class="card-header text-center">
                    <h3>Formulario</h3>
                </div>
            <form action="formulario" name="formulario" method="get">
                    @csrf

                <div class="card-body">

                        {{-- Explicar requeido --}}
                        <input type="text" name="nombre" id="nombre" minlength="8" maxlength="30" placeholder="Nombre: " >
                        <br>
                        <br>
                        <input type="radio" name="sexo" id="hombre" value="Hombre"> Hombre
                        <input type="radio" name="sexo" id="mujer" value="Mujer"> Mujer
                        <br>
                        <br>
                        <input type="checkbox" name="terminos" id="terminos"> Terminos y condiciones

                </div>
                <div class="card-footer">
                    <input type="submit" id="btn" name="btn" value="Enviar" class="btn btn-secondary btn-lg btn-block">
                </div>
            </form>
            </div>
        </div>
    </div>

</div>



@endsection

@section('scripts')
<script src="{{asset("fron/js/js.js")}}"></script>
<script>
(function(){
 var formulario = document.getElementsByName('formulario')[0];
 elementos = formulario.elements;
 boton = document.getElementById('btn');

var validarNombre = function(e){
    if(formulario.nombre.value == 0){
        alert("completa el campo nombre");
        e.preventDefault();
    }
};

var validarRadio = function(e){
    if(formulario.sexo[0].checked == true|| formulario.sexo[1].checked == true){

    }else {
        alert("Completa el campo sexo");
        e.preventDefault();
    }
};

var validarCheckbox = function(e){
    if(formulario.terminos.checked == false){
        alert("Asepta lo terminos y condiciones");
        e.preventDefault();
    }
};

var validar = function(e){
    validarNombre(e);
    validarRadio(e);
    validarCheckbox(e);
}

 formulario.addEventListener("submit", validar);


}())
</script>


@endsection




