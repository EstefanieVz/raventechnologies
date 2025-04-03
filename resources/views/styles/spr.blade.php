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
  background-image: url('/fondo/sedos1.png'); reemplaza con tu imagen
  background-size: cover;
  background-position: center;
}

.contenido-fondo {
  position: absolute;
  top: 50%;
  right: 0;
  height: 100%;
  width: 40%;
  background-color: rgba(0, 0, 0, 0.8); /* fondo traslúcido */
  color: #fff;
  padding: 80px;
  transform: translateY(-50%);

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: justify;
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

.container3 {
  max-width: 75%;
  margin: auto;
  height: 70vh;
  margin-top: 3%;
  background: rgb(0, 0, 0);
  box-shadow: 5px 5px 10px 3px rgba(0, 0, 0, 0.3);
}

.right {
  width: 50%;
  padding: 30px;
}

.flex {
  display: flex;
  justify-content: space-between;
}

.flex1 {
  display: flex;
}
.left {
  width: 50%;
  padding: 30px;
  display: flex;
  flex-direction: column;
  align-items: center;
  overflow: hidden; /* Evita desbordamientos */
}

.main_image {
  width: 100%;
  max-height: 300px; /* Ajusta según el tamaño que desees */
  display: flex;
  justify-content: center;
  align-items: center;
}

.main_image img {
  max-width: 100%;
  max-height: 100%;
  height: auto;
  object-fit: contain;
}

.option {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 10px; /* Espaciado entre imágenes */
  margin-top: 15px;
}

.option img {
  width: 75px;
  height: 75px;
  padding: 5px;
  cursor: pointer; /* Cambia el cursor para indicar clic */
  transition: transform 0.2s;
}

.option img:hover {
  transform: scale(1.1); /* Efecto al pasar el mouse */
}


.right {
  padding: 50px 100px 50px 50px;
}

h3 {
  color: #ff8000;
  margin: 20px 0 20px 0;
  font-size: 25px;
}

h5,
.p,
small {
  color: #837D7C;
}

h4 {
  color: rgb(255, 123, 0);
}

.p {
  margin: 20px 0 50px 0;
  line-height: 25px;
}

h5 {
  font-size: 15px;
}

label,
.add span,
.color span {
  width: 25px;
  height: 25px;
  background: #000;
  border-radius: 50%;
  margin: 20px 10px 20px 0;
}

.color span:nth-child(2) {
  background: #181818;
}

.color span:nth-child(3) {
  background: #ff8000;
}

.color span:nth-child(4) {
  background: #ff952a;
}

.color span:nth-child(5) {
  background: #686868;
}

.color span:nth-child(6) {
  background: #b3b3b3;
}

.add label,
.add span {
  background: none;
  border: 1px solid #C1908B;
  color: #C1908B;
  text-align: center;
  line-height: 25px;
}

.add label {
  padding: 10px 30px 0 20px;
  border-radius: 50px;
  line-height: 0;
}

button {
  width: 100%;
  padding: 10px;
  border: none;
  outline: none;
  background: #C1908B;
  color: white;
  margin-top: 20%;
  border-radius: 30px;
}

@media only screen and (max-width:768px) {
  .container3 {
    max-width: 90%;
    margin: auto;
    height: auto;
  }

  .left, .right {
    width: 100%;
  }

  .container3 {
    flex-direction: column;
  }
}

@media only screen and (max-width:511px) {
  .container3 {
    max-width: 100%;
    height: auto;
    padding: 10px;
  }

  .left, .right {
    padding: 0;
  }

  img {
    width: 100%;
    height: 100%;
  }

  .option {
    display: flex;
    flex-wrap: wrap;
  }
}

  </style>