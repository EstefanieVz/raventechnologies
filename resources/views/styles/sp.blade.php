<style>
:root{
    --orange:#ff8000;
}
    .welcome{
        width:100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #00000036;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .container{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        gap:40px;
    }
    .container .circle{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 200px;
        height: 200px;
        border-radius: 50%;
    }
    .container .circle::before{
        content: ''; 
        position: absolute;
        inset: 5px;
        border-radius: 50%;
        background: #181818;
        opacity: 0.8;
    }
    .container .circle::after{
        content: ''; 
        position: absolute;
        width: 120px; 
        height: 120px;
        background: #333;
        border: 15px solid #4d4c51;
        border-radius: 50%;
        box-shadow: inset 0 5px 10px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.75),
         0 -2px 2px rgba(255,255,255,0.5), inset 0 4px 2px rgba(0,0,0,0.25),
         inset 0 -2px 2px rgba(255,255,255,0.5);
    }
    .container .circle .number{
        position: relative;
        color: #fff;
        z-index: 10;
        font-size: 2em;
        line-height: 1em;
    }
    .container .circle .number span{
        font-size: 0.5em; font-weight: 500;
    }
    .container .circle h4{
        position: relative;
        color: #fff;
        z-index: 10;
        font-weight: 500;
        font-size: 0.8em;
        text-transform: uppercase;
        line-height: 0.6em;
    }



.welcome-1{
background-color: #191919;
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
width: 30%;
}
.welcome-2{
width: 70%;
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

.b1{
font-size: 18px;
color: 25px 0;
color: #c5c5c5;
text-align: center;
}
.welcome .welcome-2 h2 .s{
color:var(--orange);
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