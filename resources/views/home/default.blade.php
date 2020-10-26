@include('layouts.home')
@laravelPWA
<title>Dra Jessyca Martins</title>

<div class="content row col-lg-12">
    @include('nav.default')
</div>

<footer class="page-footer" style="background-color: #c199a4!important">
    <div class="container">
        <div class="row col l12 s12 ">
            <div class="col l5 s12">
                <h4 class="isMobileCenter">Dra Jessyca Martins</h4>
                <h6 class="isMobileCenter">CREMEC 17858 </h6>
                <h6 class="isMobileCenter">CRM PB 10409</h6>
{{--                <img class="isMobileCenter" src="{{ asset('assets/images/logo/logo-white.png') }}">--}}
            </div>
            <div class="col l3 s12 ">
                <h4 class="isMobileCenter">Servicos</h4>
                <p class="">
                    <li class="isMobileCenter"><a class="" style='cursor: pointer; color:white;'>Estética avançada</a></li>
                    <li class="isMobileCenter"><a class="" style='cursor: pointer; color:white;'>Dermatologia</a></li>
                    <li class="isMobileCenter"><a class="" style='cursor: pointer; color:white;'>Nutrologia</a></li>
                </p>
            </div>
            <div class="col l4 s12">
                <h4 class="isMobileCenter" >SIGA-NOS</h4>
                    <p>
                <li class="isMobileCenter"><a  style=" color: white;" href="https://api.whatsapp.com/send?phone=5583991122973&text=Ol%C3%A1,%20vim%20atrav%C3%A9s%20do%20Site,%20pode%20me%20atender%3F%20%F0%9F%98%83" target="_blank" ><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                <li class="instagram isMobileCenter"><a style=" color: white;" class="" href="https://www.instagram.com/dra.jessycamartins/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li class="isMobileCenter"><a  style=" color: white;" href="https://www.facebook.com/drajessycamartins-111337597035701" target="_blank" ><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <p>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container center">
            ©<a class="white-text" href="https://madgic.com.br" target="_blank">Powered by Madgic 2020</a>
        </div>
    </div>
</footer>
<script src="{{ asset('js/modules/home/init.js') }}"></script>
