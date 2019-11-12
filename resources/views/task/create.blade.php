@extends("theme1.$theme5.layouts")

@section("titles")
Foro
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
{{ route('chat.create')}}
@endsection
@section("otros1") {{-- Nompre de la ruta--}}

Crear

@endsection
@section("otros2") {{--class par poner--}}
breadcrumb-item active
@endsection

@section("styles")

@endsection

@section("recapcha")
 {!! htmlScriptTagJsApi(['action' => 'homepage']) !!}
@endsection

@section("content")

  <h1>llegastes completo</h1>

{!!Form::open(['route' => 'task.store','files' => true]) !!}
        @include('task.partials.form')

    {!!Form::close() !!}




@endsection

@section('scripts')

@endsection