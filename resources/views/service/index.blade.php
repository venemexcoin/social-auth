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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div id="app">
  <div class="content-wrapper">


        <!-- Main content -->
        <section class="content ">
          <div class="container-fluid ">
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card ">
                  <div class="card-header">
                    <h3 class="card-titles text-center ">Selecciona tu servisio</h3>

                    <div class="card-tools sidebar-collapse">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                    </div>
                  </div>
                  <div class="card-body">

                    <div class="row">
                      <div class="col-md-12">

                        <!-- select -->
                        <div class="form-group">
                          <label>Selecciona tu servicio</label>


                        <form action="{{ route('selector')}}" name="selector1" method="get" id="forserver">
                            @csrf

                            <div class="row">
                                    <div class="col-md-12">
                                      <!-- select -->
                                      <select class="custom-select" id="buscar1">
                                            <option id="selecOp" selected value="title">Selecciona tu servicio</option>
                                            @foreach ($products as $product)
                                      <option name="opcion" id="nombre" value="nombre"><a href="#"
                                        id="nombre" value="nombre">{{ $product->name}} {{ $product->price }}</a> </option>
                                            @endforeach
                                          </select>
                        </form>
                        </div>
                      </div>
                  </div>
                  <!-- /.card-body -->

                </div>
                <!-- /.card -->

              </div>
            </div>
          </div>
        </section>
 </div>
</div>
@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!'
  }
});

(function(){

    var buscar1 = document.getElementById("buscar1");
    var nombre = document.getElementById("nombre");

    // Funciones
    var nombreNuevo = function(){
        var item = nombre.value;
        alert(item);
    };

    //Eventos

//todos elementos de la lista
for (var i = 0; i <= buscar1.children.length - 1; i++) {
    buscar1.children[i].addEventListener("click", nombreNuevo);

};

}())
</script>
@endsection
