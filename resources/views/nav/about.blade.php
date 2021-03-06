<link rel="stylesheet" href="{{ asset('css/nav/default.css') }}">
<link rel="stylesheet" href="{{ asset('css/about/default.css') }}">
<div class="row col l12 s12 about">
    <div class="col l2"></div>
    <div class="row col l10 ">
        <div class="col l3 s12">
            <img class="responsive-img col l12 s12" src="{{ asset('assets/images/dr3.jpg') }}">
        </div>
        <div class="col l9 s12">
            <h3 class="isMobileCenter" style="color: #ba7c8e">
                <strong>Dra Jessyca Martins</strong>
            </h3>
            <h5 class="isMobileCenter">Dermatologia </h5>
            <h6 class="isMobileCenter" style="color: #ba7c8e">
                CREMEC 17858/ CRM PB 10409
            </h6>
            <p class="isMobileCenter">
                {{ $info->about }}
            </p>
        </div>
    </div>
    <div class="col l2"></div>
</div>
<script src="{{ asset('js/modules/home/init.js') }}"></script>
