@include('layouts.home')

<title>Dra Jessyca Martins - Blog</title>

<div class="content row col-lg-12">
    @foreach($blogs as $blog)
        <div class="col s12 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ url('storage/api/public').'/'.$blog->image }}">
                    <span class="card-title">{{ $blog->title }}</span>
                </div>
                <div class="card-content">
                    <p>
                        {{ $blog->content }}
                    </p>
                </div>
                <div class="card-action">
                    <a href="#">Ler mais</a>
                </div>
            </div>
        </div>
    @endforeach


</div>

<script src="{{ asset('js/modules/home/init.js') }}"></script>
