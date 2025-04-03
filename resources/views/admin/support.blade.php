@extends('layout.mainx_template')

@section('content')
@include('styles.spo')

<br><br>
<section class="hom sectio" id="hom">
    <div class="conten">
        <h3>SOPORTE <span> TÉCNICO </span></h3>
        <p>ASISTENCIA TÉCNICA PERSONALIZADA: RESOLVEMOS TUS PROBLEMAS PARA QUE PUEDAS SEGUIR ADELANTE.</p>
    </div>
</section>


<section style="background: black;"><br><br><br>
    <div class="container">
      <img src="{{ asset('/fondo/mundo.gif') }}" class="gif-izquierda">

      <div class="centro">
        <div class="div-1">
            <br><br>
            <i class="fa-solid fa-users-gear fa-2xl"></i><br><br>
            <h2 class="titulo1"> Contacto </h2>
            <br><br>
            <p>Lunes a viernes de 9:00 a.m - 6:00 p.m</p><br>
            <p>Teléfono y whatsapp: 7841406409</p><br>
        </div>
                
        <div class="div-2">
            <br><br>
            <i class="fa-solid fa-envelope fa-2xl"></i><br><br>
            <h2 class="titulo1"> Vía Correo </h2>
            <br><br>
            <p>Para asuntos técnicos, fallas de equipo o dudas, puedes ponerte en contacto a:</p><br>
            <p>raventechnologies1@gmail.com</p>
        </div>
      </div>

      <img src="{{ asset('/fondo/mundo.gif') }}" class="gif-derecha">
    </div>
    <br><br><br></section>

<section class="fondo-image-footer">
    <div class="contenido-fondo">
        <h2 class="titulo"> <span> PREGUNTAS </span> FRECUENTES <span> . </span> </h2>
        <br><br><br><br>
        
<div class="container1">
    <div class="faq-list">
        <div class="faq">
            <div class="ques">
                <p>¿Qué tipo de datos puedo monitorear con Solaris?</p>
                <i class="fa-solid fa-plus"></i>
            </div>
            <div class="ans">
                <p>Puedes monitorear datos esenciales como voltaje, corriente y nivel de carga de tu sistema solar, lo que te permite evaluar su rendimiento de forma precisa.</p> 
            </div>
        </div>

        <div class="faq">
            <div class="ques">
                <p>¿Cómo puedo interpretar los datos de Solaris?</p>
                <i class="fa-solid fa-plus"></i>
            </div>
            <div class="ans">
                <p>La plataforma presenta los datos de forma clara y sencilla, con gráficos y métricas que facilitan su comprensión, incluso si no tienes experiencia técnica avanzada.</p> 
            </div>
        </div>

        <div class="faq">
            <div class="ques">
                <p>¿Solaris ayuda a mejorar la eficiencia de mi sistema solar?</p>
                <i class="fa-solid fa-plus"></i>
            </div>
            <div class="ans">
                <p>Sí, al ofrecer datos precisos en tiempo real, te permite identificar áreas de mejora, optimizar el uso de energía y detectar posibles fallos en el sistema.</p> 
            </div>
        </div>


    </div>
</div>

    </div>
</section>


@include('fragments.footera')

<script>
    const faqs=document.querySelectorAll(".faq");

faqs.forEach((faq)=>{
    faq.addEventListener("click",()=>{
        if(faq.classList.contains("active")){
            faq.classList.remove("active");
        }else{
            faq.classList.add("active");
            faqs.forEach((otherFaq)=>{
                if(otherFaq != faq){
                    otherFaq.classList.remove("active");
                }
            })
        }
    })
});
</script>