<style>
.welcome{
width:100%;
display: flex;
flex-wrap: wrap;
}
.welcome-1{
background-color: #191919;
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
width: 50%;
}
.welcome-2{
width: 50%;
padding:135px 100px 150px 100px; 
background-color: #000000;
}
h2{
    text-align: center;
font-size: 35px;
line-height: 50px;
color: #ffffff;
text-transform: uppercase;
margin-bottom: 15px;
font-optical-sizing: auto;
font-weight: <weight>;
font-style: normal;
}
p{
font-size: 18px;
}
.b1{
color: #c5c5c5;text-align: justify;
}
.welcome .welcome-2 h2 span{
color:var(--orange);
}
.welcome-2 .botones{
    display: flex;
  justify-content: center;
  align-items: center;
}
.btn {
  border: none; font-size: 18px;
  color: rgb(255, 255, 255); 
  padding: 14px 28px; 
  cursor: pointer; 
  border-radius: 5px; 
  margin-right: 10px;
}

.warning {background-color: rgb(0, 0, 0); border: 2px solid #ff8000;} 
.warning:hover {background: #ff8000; color: white;}

@media (max-width:991px){
    .welcome-1 img{
        width: 733px;
        height: 600px;
    }
    .welcome-2{
        width: 100%;
    }
}
@media (max-width:800px){
    .welcome-1{
        width: 100%;
    }
    .welcome-2{
        width: 100%;
    }
}

</style>

@include('styles.sw')
<section class="home section" id="home">
    <div class="content">
        <h3>TU ALIADO EN GESTIÓN DE DATOS <span> SOLARES </span></h3>
        <p>MONITOREA CORRIENTE Y VOLTAJE EN TIEMPO REAL EN RAVEN TECHNOLOGIES.</p>
    </div>
</section>

<section class="welcome">
    <div class="welcome-1">
        <img src="{{ asset('/fondo/mitad2.jpg') }}" alt="" align="left">
    </div>
    <div class="welcome-2">
        <h2 class="oswal">LA IMPORTANCIA DE <span> ADMINISTRAR </span> TU ENERGÍA <span> SOLAR </span></h2><br>
        <p class="b1">En Raven Technologies, sabemos que un sistema solar eficiente depende de datos precisos. Con Solaris, 
            monitorear voltaje y corriente en tiempo real te permite maximizar el rendimiento y prolongar la vida útil 
            de tus paneles solares, asegurando un aprovechamiento óptimo de la energía solar.
        </p>
        <br>
        <br>
        <div class="botones">
        <a class="btn warning" href="{{route('login')}}">Iniciar Sesión</a>
        <a class="btn warning" href="{{route('register')}}">Crear Cuenta</a>
        </div>
    </div>
</section>
@include('fragments.lore')
@include('fragments.ende')



