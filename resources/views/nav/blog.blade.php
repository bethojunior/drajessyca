
<link rel="stylesheet" href="{{ asset('css/blog/list.css') }}" />
<div class="row col l12 s12 blog">
    <div class="col l2"></div>
    <div class="row col l10 s12 container">

            @foreach($blogs as $blog)
            <div class="card row col l12 s12">
                <div class="col l12 s12">
                    <h3 class="default-color isMobileCenter">{{ $blog->title }}</h3>
                </div>
                <div class="col l12 s12">
                    <label class="isMobileCenter">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y')}}</label>
                </div>
                <div class="col l12 s12">
                    <div class="divider"></div>
                </div>
                <br>
                <div class="row col l12 s12 content">
                    <div class="col l3 s12">
                        <img class="responsive-img" src="{{ url('storage').'/'.$blog->image }}">
                    </div>
                    <div class="col l9 s12 isMobileCenter">
                        {{ substr($blog->content,0,400) }} [...]
                    </div>
                </div>
            </div>
            @endforeach

    </div>
    <div class="col l2"></div>
</div>



<script src="{{ asset('js/modules/home/init.js') }}"></script>
