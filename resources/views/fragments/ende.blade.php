<style>
    .titulo{
        font-size: 3rem;
        color: #ffffff;
    }
    span{
        color: #ff8000;
    }
    .fondo-image-footer {
  position: relative;
  width: 100%;
  height: 100vh; /* ajusta el alto a la altura de la pantalla */
  background-image: url('fondo/fonfooter.png'); /* reemplaza con tu imagen */
  background-size: cover;
  background-position: center;
}

.contenido-fondo {
  position: absolute;
  top: 50%;
  right: 0;
  height: 100%;
  width: 40%;
  background-color: rgba(0, 0, 0, 0.5); /* fondo traslúcido */
  color: #fff;
  padding: 20px;
  transform: translateY(-50%);

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}

@media (min-width: 991px) {
  .contenido-fondo {
    top: 50%;
  right: 0;
  height: 100%;
  width: 40%;
  }
}

/* Estilos para pantallas con un ancho entre 800px y 991px */
@media (min-width: 800px) and (max-width: 991px) {
  .contenido-fondo {
    top: 50%;
  right: 0;
  height: 100%;
  width: 40%;
  }
}
@media (max-width: 799px) {
  .contenido-fondo {
    width: 100%;
    height: 100%;
    position: relative;
    top: 0;
    transform: none;
  }
}


</style>
<section class="fondo-image-footer">
    <div class="contenido-fondo">
        
        <h2 class="titulo"> <span> CONECTA </span> CON TUS EQUIPOS <span> . </span> </h2>
        <br><br>
        <p>SOLARIS, LA SOLUCIÓN DE MONITOREO REMOTO DE RAVEN TECHNOLOGIES.</p>

    </div>
</section>

@include('fragments.footer')