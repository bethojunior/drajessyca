@extends('layouts.page')
@section('css')
    {{--    <link rel="stylesheet" href="{{ asset('css/home/init.css') }}">--}}
@endsection
@section('title', 'Painel ')
@section('content_header')
    <h1 class="m-0 text-dark">Slides</h1>
@stop

@section('content')
    @include('includes.alerts')

    <form class="row gol-lg-12" method="POST" enctype="multipart/form-data" action="{{route('home.createSlider')}}">
        @csrf
        <div class="col-lg-4 form-group ">
            <label>Escolher imagem</label>
            <input name="image" type="file" class="form-control" id="customFile">
        </div>
        <div class="col-lg-12">
            <input class="btn btn-success" type="submit" value="Salvar">
        </div>
    </form>

    <hr>

    @foreach($slides as $slide)
        <img src="{{  url('storage/api/public').'/'.$slide->image }}">
    @endforeach
@stop

@section('js')
    <script src="{{ asset('js/controllers/Schedule/ScheduleController.js') }}"></script>
    <script src="{{ asset('js/modules/schedule/init.js') }}"></script>
@endsection

