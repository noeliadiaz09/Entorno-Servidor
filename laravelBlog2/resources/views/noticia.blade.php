@extends("blogBase")

@section("titulo")
    Noticia - {{$noticia->titular}}
@endsection


@section("contenido")
    Titular:{{ $noticia->titular }}<br>
    Cuerpo:{{$noticia->cuerpo}}
@endsection

<br>
<a href=""></a>