<style>
    .equipo{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    min-height: 70vh;
    background: rgb(0, 0, 0);
    }
    .card {
    position: relative;
    width: 300px;
    height: 350px;
    margin: 20px;
}

.card .face {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border-radius: 10px;
    overflow: hidden;
    transition: .5s;
}

.card .front {
    transform: perspective(600px) rotateY(0deg);
    box-shadow: 0 5px 10px #000;
}

.card .front img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card .front h3 {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 45px;
    line-height: 45px;
    color: #fff;
    background: rgba(0,0,0,.4);
    text-align: center;
}

.card .back {
    transform: perspective(600px) rotateY(180deg);
    background: rgb(255, 153, 0);
    padding: 15px;
    color: #000000;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: justify;
    box-shadow: 0 5px 10px #000;
}

.card .back .link {
    border-top: solid 1px #f3f3f3;
    height: 50px;
    line-height: 50px;
}

.card .back .link a {
    color: #f3f3f3;
}

.card .back h3 {
    font-size: 30px;
    margin-top: 20px;
    letter-spacing: 2px;
}

.card .back p {
    letter-spacing: 1px;
} 

.card:hover .front {
    transform: perspective(600px) rotateY(180deg);
}

.card:hover .back {
    transform: perspective(600px) rotateY(360deg);
}



</style>