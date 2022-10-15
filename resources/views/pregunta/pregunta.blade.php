@extends('layout.control')

@section('panel')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Juguemos la trivia</h1>
            {{-- <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Crear cliente</button>
                </div>
                                   <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                       <span data-feather="calendar" class="align-text-bottom"></span>
                                       This week
                                    </button>
            </div>--}}
        </div>
        @foreach ($preguntasArray as $pregunta)
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item active">{{$pregunta[pregunta]}}</li>
                </ul>
            </div>

        @endforeach

        {{-- @include('partial.pregunta.lista_pregunta'); --}}
    </main>
@endsection