@extends('layouts.page')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home/init.css') }}">
@endsection
@section('title', 'Painel ')
@section('content_header')
    <h1 class="m-0 text-dark">Info</h1>
@stop

@section('content')
    @include('includes.alerts')
        <form class="row col-lg-12" method="POST" enctype="multipart/form-data" action="{{route('info.create')}}">
            @csrf
            <div class="col-lg-12">
                <div class="form-group col-lg-6 col-sm-12">
                    <span>Página inicial</span>
                    <textarea name="home" class="form-control col-lg-12" ></textarea>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group col-lg-6 col-sm-12">
                    <span>Especialidades</span>
                    <textarea name="about" class="form-control col-lg-12" ></textarea>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <input class="btn btn-success" type="submit" value="Atualizar">
                </div>
            </div>
        </form>
@stop

@section('js')
    <script src="{{ asset('js/modules/home/init.js') }}"></script>
@endsection

