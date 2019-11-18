
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
 <div class="content-wrapper">


        {{-- <!-- Main content -->
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
                          <label>HOT AT&T SERVICES</label>
                          <select class="custom-select">

                            @foreach ($products as $product)

                          <option> {{ $product->name}} - ${{$product->price}}</option>

                            @endforeach

                          </select>

                        </div>
                      </div>
                  </div>
                   <a href="{{ route('service.edit', $product->id) }}" class="btn btn-xs btn-default">
                                Editar
                    </a>
                  <!-- /.card-body -->

                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
        </section> --}}
 </div>

@endsection

@section('scripts')
<script>

</script>
@endsection
