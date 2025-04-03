<style>  
    .section{
        padding:2rem 9%;
    }
    .hom{
        display: flex;
        align-items: center;
        min-height: 70vh;
        background-image: url('/fondo/soporte.jpg'); 
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        /*filter: brightness(50%); para oscurecer una imagen*/
        background-color: cover;
        background-position: center;
    }
    
    .hom .conten{
        margin: auto;
        text-align: center;
        max-width: 50rem;
    }
    
    .hom .conten h3{
        font-size: 3rem;
        color: white;
    }
    
    .hom .conten span{
        color:var(--orange);
    }
    
    .hom .conten p{
        font-size: 15px;
        color: #ffffff;
        padding: 1rem 0;
        line-height: 1.5;
    }
    
    @media (max-width:991px){
        html{
            font-size: 55%;
        }
        header{
            padding: 2rem;
        }
        .sectio{
            padding: 2rem;
        }
        .hom{
            background-position:left;
        }
    }
    @media (max-width:800px){
    
    header .fa-bars{
        display: block;
        
    }
    
    header .navbar{
        position: absolute;
        top: 100%; left: 0; right: 0;
        background: #1d1d1d;
        border-top: .1rem solid rgba(0,0,0, 1);
    }
    
    header #toggler:checked~ .navbar{
    display: none;
    }
    
    header .navbar a{
        margin: 1rem;
        padding: 1rem;
        background: #1d1d1d;
        border: .1rem solid rgb(0, 0, 0);
        display: block;
    }
    
    .homs .conten h3{
        font-size: 5rem;
    }
    
    }
    
    /*     Segunda sección     */
    .container {
  background-color: #000000;
  max-width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  overflow-x: hidden;
}

.gif-derecha {
  clip-path: polygon(0 0, 50% 0, 50% 100%, 0 100%);
  width: 20%;
  height: 100%;
  overflow: hidden;
  margin-right: -10%;
}

.gif-izquierda {
  clip-path: polygon(50% 0, 100% 0, 100% 100%, 50% 100%);
  width: 20%;
  height: 100%;
  overflow: hidden;
  margin-left: -10%;
}

.centro {
  display: flex;
  justify-content: space-between;
  text-align: center;
  color: #ffffff;
  align-items: center;
  width: 60%;
}

.div-1 {
  background-color: #1d1d1d;
  padding: 20px;
  width: 45%;
}

.div-2 {
  background-color: #1d1d1d;
  padding: 20px;
  width: 45%;
}


    /*     Tercera sección     */
/* Tercera sección */
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
  background-image: url('/fondo/faqs.png'); /* reemplaza con tu imagen */
  background-size: cover;
  background-position: center;
}
.contenido-fondo {
  position: absolute;
  top: 50%;
  left: 0;
  height: 100%;
  width: 65%;
  background-color: rgba(0, 0, 0, 0.5); /* fondo traslúcido */
  color: #fff;
  padding: 20px;
  transform: translateY(-50%);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  text-align: left;
}




@media (min-width: 991px) {
  .contenido-fondo {
    top: 50%;
  left: 0;
  height: 100%;
  width: 65%;
  }
}

/* Estilos para pantallas con un ancho entre 800px y 991px */
@media (min-width: 800px) and (max-width: 991px) {
  .contenido-fondo {
    text-align: center;
    align-items: center;
    top: 50%;
  left: 0;
  height: 100%;
  width: 65%;
  }
}
@media (max-width: 799px) {
  .contenido-fondo {
    text-align: center;
    align-items: center;
    width: 100%;
    height: 100%;
    position: relative;
    top: 0;
    transform: none;
    left:0;
  }
}


/* FAQS */
.ques{
    background-color: #333;
    padding: 30px;
    font-size: 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor:pointer;
    transition: all .3s ease-in-out;
}
.ques:hover{
    background-color: #ff8000;
}
.ques p{
  font-size: 20px;
}
.ans{
    max-height: 0px;
    width: 100%;
    overflow: hidden;
    transition: max-height .3s ease-in-out;
}
.faq-list{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 10px;
}
.faq i{
    transition: all .3s ease-in-out;
}
.faq.active .ans{
    max-height: 300px;
}
.faq.active i{
    transform: rotate(45deg);
}
.ans p{
    background-color: #333;
    padding: 30px;
    font-size: 20px;
    border-top: 1px solid #000;
}
    </style>