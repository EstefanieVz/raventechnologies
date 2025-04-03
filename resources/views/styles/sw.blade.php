<style>
    :root{
    --orange:#ff8000;
}
    *{
    margin: 0; padding: 0;
    box-sizing: border-box;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    outline: none; border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}
    header{
    position: fixed;
    top: 0; left: 0; right: 0;
    background: #000000;
    padding: 1rem 5%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow:0 .5rem 1rem rgb(255, 127, 15);
    height: 90px;
}
header .logo{
    font-size: 1.5rem;
    color: #858585;
    font-weight: bolder;
}

header .logo span{
    color:var(--orange);
}

header .navbar a{
    font-size: 1.5rem;
    padding: 0 1rem;
    color:rgb(255, 255, 255);
}

header .navbar a:hover{
    color:var(--orange);
}

header  #toggler{
    display:none;
}

header .fa-bars{
    font-size:3rem;
    color:#6e6e6e;
    border-radius: .5rem;
    padding: .5rem 1.5rem;
    cursor: pointer;
    border: .1rem solid rgba(0,0,0, 1); 
    display: none;
}

.section{
    padding:2rem 9%;
}

.home{
    display: flex;
    align-items: center;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(fondo/hone.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    /*filter: brightness(50%); para oscurecer una imagen*/
    background-color: cover;
    background-position: center;
}

.home .content{
    margin: auto;
    text-align: center;
    max-width: 50rem;
}

.home .content h3{
    font-size: 3rem;
    color: white;
}

.home .content span{
    color:var(--orange);
}

.home .content p{
    font-size: 1.5rem;
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
    .section{
        padding: 2rem;
    }
    .home{
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

.home .content h3{
    font-size: 5rem;
}

}
</style>