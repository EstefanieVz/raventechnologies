@extends('layout.mainx_template')

@section('content')
@include('styles.sa')
<style>
.titulo {
    text-align: center;
    font-size: 3rem;
    color: #ffffff;
}
span {
    color: #ff8000;
}
.par{
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: #ffffff;
    text-align: justify;
}
.fondo-inicio {
    position: relative;
    width: 100%;
    height: 100vh;
    background-image: url('/fondo/about.png');
    background-size: cover;
    background-position: center;
}
.contenido-inicio {
    position: absolute;
    height: 65%;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    padding: 60px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    width: calc(48% - 50px); /* Deja un espacio de 10px entre los divs */
}
.contenido-inicio:first-child {
    left: 60px;
}
.contenido-inicio:last-child {
    right: 60px;
}

    </style>
<section class="fondo-inicio">
    <div class="contenido-inicio">
        <h2 class="titulo"> SOBRE <span> NOSOTROS . </span> </h2>
        <br><br>
        <p class="par" style="font-size: 22px;">En Raven Technologies, somos un equipo de estudiantes de la Universidad Tecnológica de Gutiérrez 
            Zamora, comprometidos con el desarrollo de soluciones tecnológicas para la gestión eficiente de 
            la energía solar. <br>Solaris es el resultado de nuestra pasión por la innovación y la sostenibilidad, 
            diseñado para optimizar el rendimiento de sistemas fotovoltaicos mediante el monitoreo preciso de 
            datos como voltaje y corriente.</p>
    </div>

    <div class="contenido-inicio">
        <h2 class="titulo"> MISIÓN </h2>
        <br><br>
        <p class="par" style="font-size: 18px;">Impulsar el aprovechamiento de la energía solar mediante soluciones tecnológicas innovadoras que permitan a los 
            usuarios visualizar sus recursos energéticos de manera eficiente y en tiempo real.
        </p>

        <br>
        <h2 class="titulo"> <span> VISIÓN </span> </h2>
        <br><br>
        <p class="par" style="font-size: 18px;">Facilitar el acceso a tecnologías de monitoreo solar económicas y de alta calidad, permitiendo a nuestros 
            clientes tomar decisiones informadas para maximizar el aprovechamiento de la energía y reducir gastos.</p>
    </div>
</section>
<div style="background: black;"><br><br><h2 class="titulo"> EQUIPO <span> RAVEN  </span> </h2></div>
<section class="equipo"> 
    <div class="card">
        <div class="face front">
            <img src="{{ asset('fondo/p1.jpg') }}" alt="">
            <h3>José David Atzin Pérez</h3>
        </div>
        <div class="face back">
            <h3 style="text-align: center;">Scrum Master</h3>
            <p>Como Scrum Master, mi objetivo es facilitar y apoyar al equipo para alcanzar su máximo 
                potencial, fomentando un entorno colaborativo, respetuoso y transparente.</p>
            <div class="link">
                
            </div>
        </div>
    </div>

    <div class="card">
        <div class="face front">
            <img src="{{ asset('fondo/p3.jpg') }}" alt="">
            <h3>Estefanie Vázquez Vázquez</h3>
        </div>
        <div class="face back">
            <h3 style="text-align: center;">Diseñador UX y UI</h3>
            <p>Como diseñador de UX y UI, creo experiencias digitales intuitivas y atractivas que satisfacen 
                las necesidades de los usuarios, combinando empatía, creatividad y tecnología.</p>
            <div class="link">
                
            </div>
        </div>
    </div>

    <div class="card">
        <div class="face front">
            <img src="{{ asset('fondo/p2.jpg') }}" alt="">
            <h3>José Antonio Hernández Cruz</h3>
        </div>
        <div class="face back">
            <h3 style="text-align: center;">Especialista en IoT</h3>
            <p>Mi objetivo es diseñar e implementar soluciones innovadoras que conecten dispositivos, datos y 
                personas, mejorando la eficiencia y la experiencia en diversos sectores.</p>
            <div class="link">
                
            </div>
        </div>
    </div>

    <div class="card">
        <div class="face front">
            <img src="{{ asset('fondo/p4.jpg') }}" alt="">
            <h3>Gloria Angélica Díaz Olarte</h3>
        </div>
        <div class="face back">
            <h3 style="text-align: center;">Analista de pruebas</h3>
            <p>Soy analista de pruebas, responsable de asegurar la calidad del software a través de la planificación, ejecución y documentación de pruebas.</p>
            <div class="link">
                
            </div>
        </div>
    </div>
    <br><br><br><br>
</section>

@include('fragments.footera')