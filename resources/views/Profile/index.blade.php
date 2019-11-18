@extends("theme1.$theme5.layouts")

@section("titles")
Perfil Usuario
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

@section("styles")
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
@endsection
@section('content')

{{-- reloj digital --}}
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            {{-- Fecha reloj --}}

            <div class="wrap">
                <div class="widget">
                    <div class="fecha">
                        <p id="diaSemana" class="dia semana"></p>
                        <p id="dia" class="dia"></p>
                        <p>de</p>
                        <p id="mes" class="mes"></p>
                        <p>del</p>
                        <p id="year" class="year"></p>
                    </div>
                    {{-- ./Fecha reloj --}}
                    {{-- Reloj Hora --}}

                    <div class="reloj">
                        <p id="horas" class="horas"></p>
                        <p>:</p>
                        <p id="minutos" class="minutos"></p>
                        <p>:</p>
                        <div class="caja-segundos">
                            <p id="ampm" class="ampm"></p>
                            <p id="segundos" class="segundos"></p>
                        </div>
                    </div>
                    {{-- ./Fin de reloj Hora --}}
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-md-8 offset-md-2">
    <!-- Widget: user widget style 1 -->
    <div class="card card-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-info">
        <h3 class="widget-user-username">{{auth::user()->name}}</h3>
        <h5 class="widget-user-desc">{{auth::user()->email}}</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle elevation-2" src="{{auth::user()->avatar}}" alt="User Avatar">
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">{{auth::user()->eth}}</h5>
              <span class="description-text"><a href="#">Saldo</a></span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">{{auth::user()->vmx}}</h5>
              <span class="description-text"><a href="#">Bonos</a></span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">350$</h5>
              <span class="description-text"><a href="#">Adeudo</a></span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <!-- /.col -->



@endsection


@section('scripts')
<script>
(function(){

var actualizarHora = function(){
    var fecha = new Date(),
        horas = fecha.getHours(),
        ampm,
        minutos = fecha.getMinutes(),
        segundos = fecha.getSeconds(),
        diaSemana = fecha.getDay(),
        dia = fecha.getDate(),
        mes = fecha.getMonth(),
        year = fecha.getFullYear();

    var pHoras = document.getElementById('horas'),
        pAMPM = document.getElementById('ampm'),
        pMinutos = document.getElementById('minutos'),
        pSegundos = document.getElementById('segundos'),
        pDiaSemana = document.getElementById('diaSemana'),
        pDia = document.getElementById('dia'),
        pMes = document.getElementById('mes'),
        pYear = document.getElementById('year');

    var semana = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];

    pDiaSemana.textContent = semana[diaSemana];

    pDia.textContent = dia;

    var meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

    pMes.textContent = meses[mes];

    pYear.textContent = year;

    if(horas >= 12) {
        horas = horas -12
        ampm = 'PM';
    }else{
        ampm = 'AM';
    }

    if (horas == 0){
        horas = 12;
    }

   pHoras.textContent = horas;

   pAMPM.textContent = ampm;

   if(minutos < 10){minutos = "0" + minutos};
   if(segundos < 10){segundos = "0" + segundos};

   pMinutos.textContent = minutos;

   pSegundos.textContent = segundos;
};

actualizarHora();
var intervalo = setInterval(actualizarHora, 1000);

}());

</script>

@endsection

