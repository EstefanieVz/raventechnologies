
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");
.footer {
  position: relative;
  width: 100%;
  background: #ff5500;
  min-height: 100px;
  padding: 20px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}

.wave {
  position: absolute;
  top: -100px;
  left: 0;
  width: 100%;
  height: 100px;
  background:url('/fondo/wave.svg');
  background-size: 1000 100px;
}

.wave:nth-of-type(1){
    z-index: 1000;
    opacity: 1;
    bottom: 0;
    animation: animateWaves 8s linear infinite;
}
.wave:nth-of-type(2){
    z-index: 999;
    opacity: 0.5;
    bottom: 10px;
    animation: animateWaves 7s linear infinite !important;
}
.wave:nth-of-type(3){
    z-index: 1000;
    opacity: 0.2;
    bottom: 15px;
    animation: animateWaves 6s linear infinite !important;
}
.wave:nth-of-type(4){
    z-index: 999;
    opacity: 0.7;
    bottom: 20px;
    animation: animateWaves 5s linear infinite !important;
}
@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

</style>
<br>
<footer class="footer">
    
    <div class="waves">
      <div class="wave" id="wave"></div>
      <div class="wave" id="wave"></div>
      <div class="wave" id="wave"></div>
      <div class="wave" id="wave"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.facebook.com/share/1XjLoBY6ka/">
        <img src="{{ asset('/fondo/facebook.gif') }}" width="50px" height="50px" alt="GIF">
        </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="{{route('support')}}">
          <img src="{{ asset('/fondo/email.gif') }}" width="50px" height="50px" alt="GIF">
          </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.instagram.com/raven_technologies1/">
        <img src="{{ asset('/fondo/insta.gif') }}" width="50px" height="50px" alt="GIF">
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="{{route('welcome')}}">Inicio</a></li>
      {{-- <li class="menu__item"><a class="menu__link" href="{{route('panel')}}">Panel</a></li> --}}
      <li class="menu__item"><a class="menu__link" href="{{route('about')}}">Sobre Nosotros</a></li>
      <li class="menu__item"><a class="menu__link" href="{{route('product')}}">Producto</a></li>
      <li class="menu__item"><a class="menu__link" href="{{route('support')}}">Soporte</a></li>

    </ul>
    <p>&copy;2025 Raven Technologies | All Rights Reserved</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>