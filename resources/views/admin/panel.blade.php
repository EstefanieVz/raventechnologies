@extends('layout.mainx_template')

@section('content')
@include('styles.sp')

<section class="welcome">
    <div class="welcome-1">
        <img src="{{ asset('/fondo/mitad1.jpg') }}" alt="" align="left">
    </div>
    <div class="welcome-2">
        <h2 class="oswal">PANEL DE <span class="s"> GESTIÓN </span></h2><br>
        <p class="b1">Visualiza en tiempo real el rendimiento de tu sistema solar. 
            Consulta datos precisos para tomar decisiones informadas:</p><br><br>

        <div class="container">
            <div class="circle" data-degree="25" data-color="#ff2972">
                <h2 class="number">25 <span>%</span> </h2>
                <h4>Voltaje</h4>
            </div>
        
            <div class="circle" data-degree="78" data-color="#fee800">
                <h2 class="number">78 <span>%</span> </h2>
                <h4>Corriente</h4>
            </div>
        
            <div class="circle" data-degree="96" data-color="#04fc73">
                <h2 class="number">96 <span>%</span> </h2>
                <h4>Carga</h4>
            </div>
        </div>

        <br><br>
        <p class="b1">Visualiza estos valores de tus paneles y asegurar un rendimiento sostenible.
        </p>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded",function (event){
        let circle = document.querySelectorAll('.circle');
        circle.forEach(function(progress){
            let degree = 0;
            var targetDegree = parseInt(progress.getAttribute ('data-degree'));
            let color = progress.getAttribute('data-color');
            let number= progress.querySelector('.number');

            var interval = setInterval(function(){
                degree += 1;
                if(degree > targetDegree){
                    clearInterval(interval);
                    return;
                }
                progress.style.background = `conic-gradient(${color} ${degree}%, #222 0%)`;
                number.innerHTML = degree + '<span>%</span>';
                number.style.color = color;
            },50)
        })
    });
</script>


@include('fragments.footera')

