@extends('layout.mainx_template')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@section('content')
@include('styles.spr')

<section class="fondo-image-footer">
    <video autoplay loop muted playsinline class="video-bg">
        <source src="{{ asset('/fondo/sedos.mp4') }}" type="video/mp4">
    </video>

    <div class="contenido-fondo">
        
        <h2 class="titulo"> DESCRIPCIÓN </h2>
        <br><br>
        <p>Herramienta de gestión de datos solares que permite monitorear en 
            tiempo real el voltaje y la corriente de paneles solares, 
            optimizando su rendimiento y eficiencia.</p>
<br><br><br><br>
            <h2 class="titulo"><span> CARACTERÍSTICAS </span></h2>
            <br><br>
            <p class="uno"> ° Monitoreo en tiempo real de datos clave</p>
            <p class="uno"> ° Interfaz intuitiva y fácil de usar</p>
            <p class="uno"> ° Alertas inteligentes por anomalías</p>
            <p class="uno"> ° Acceso remoto desde cualquier dispositivo</p>
    </div>
</section>
  
<section style="background-image: url('/fondo/uno.png'); background-size: cover; background-color: #000000d7;">
    <br>
    <div class="container3 flex">
        <div class="left">
            <div class="main_image">
                <img src="{{ asset('/fondo/solaris.jpg') }}" alt="Imagen principal" class="slide img">
            </div>
            <div class="option flex">
                @foreach (['solaris.jpg', 'solaris1.jpg', 'solaris4.jpg', 'solaris2.jpg', 'solaris3.jpg'] as $image)
                    <img src="{{ asset('/fondo/' . $image) }}" onclick="changeImage(this)" class="img">
                @endforeach
            </div>
        </div>
        <div class="right">
            <h3>CONOCE NUESTRA APP</h3>
            <h4>¡ Controla tus dispositivos con un solo toque !</h4>
            <p class="p">Solaris te ofrece la posibilidad de encender y apagar dos dispositivos de manera remota, gracias a nuestros botones de control integrados. ¡Disfruta de la comodidad y la flexibilidad de gestionar tus sistemas fotovoltaicos desde cualquier lugar!
               <br><br><small>
                Disponible para Android.</small> <br>
                <a href="https://drive.google.com/uc?export=download&id=1I_gM7Eanj-VqNNuiDa94OK0DZvcTGGJ9"
   style="display: inline-block; background: #ff8000; color: #000; text-decoration: none; padding: 10px 20px; border-radius: 5px;">
    Descarga Ahora
</a>
        </div>
    </div>
    <br><br><br>
</section>

<script>
    function changeImage(imgElement) {
        document.querySelector('.slide').src = imgElement.src;
    }
</script>
@include('fragments.footera')