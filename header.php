<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba técnica</title>
    <style>
        *{
    box-sizing: border-box;
}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
ul{
    text-decoration: none;
    list-style: none;
    display: flex;
    justify-content: end;
}
li{
  display: inline-block;
  margin-right: 10px;
  color: #fff;
}
header{
  display: flex;
  background: rgb(14,69,113);
  background: linear-gradient(180deg, rgba(14,69,113,1) 55%, rgba(14,69,113,0.9164040616246498) 65%, rgba(255,255,255,0) 100%);
}
#container-logo{
    margin-left: 5vw;
}
#contentSlider{
  position: absolute;
  top: 15%;
  z-index: -1;
}
.slider {
    position: relative;
    width: 100%;
    height: 300px;
    overflow: hidden;
  }
  
  .slides {
    display: flex;
    width: 300%;
    height: 100%;
  }
  
  .slide {
    flex: 1 0 100%;
    transition: transform 0.5s ease-in-out;
  }
  
  .slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .prev-btn,
  .next-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: transparent;
    border: none;
    color: #fff;
    font-size: 24px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    opacity: 0.8;
    cursor: pointer;
  }
  
  .prev-btn {
    left: 10px;
  }
  
  .next-btn {
    right: 10px;
  }
  
  .prev-btn:hover,
  .next-btn:hover {
    opacity: 1;
    background-color: rgba(128, 128, 128, 0.5);
  }
  .search-container {
    display: flex;
    align-items: center;
  }
  
  .search-input {
    padding: 2px;
    border: none;
    border-radius: 20px;
    background-color: #ccc;
    width: 200px;
  }
  
  .search-button {
    /* background-color: #003e6d; */
    border: none;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    margin-left: -20px;
    cursor: pointer;
    background-image: url("./img/zoom.png");
    background-size: cover;
    background-position: center;
  }
  
  .search-button i {
    color: #fff;
  }
#cards {
  text-align: center;
  margin: 18rem 5rem;
}
#cards p{
  font-size: 1.5rem;
  color: #003e6d;
}
#contentCards{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.card img{
  border-radius: 20px;
  margin: 1rem;
}
.image-container {
  position: relative;
  display: inline-block;
}

.image-overlay {
  /* Estilos originales */
  position: absolute;
  margin: auto;
  padding: 10px;
  width: 320px;
  height: auto;
  background: rgb(36, 66, 112);
  background: linear-gradient(180deg, rgba(36, 66, 112, 1) 0%, rgba(255, 255, 255, 0) 94%);
  border-radius: 20px 20px 0 0;
  z-index: 1;
  transition: box-shadow 0.3s;
}

.image-overlay:hover {
  /* Estilos en el estado hover */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
  border-radius: 20px;
  width: 320px;
  height: 216px;
}

.image-overlay:hover h2 {
  /* Estilos del título en el estado hover */
  font-size: 20px;
  line-height: 1.2;
  color: #fff;
}

.image-overlay p {
  /* Estilos del texto desplegado */
  display: none;
  color: #fff;
}

.image-overlay:hover p {
  /* Estilos del texto desplegado en el estado hover */
  display: block;
  margin-top: 10px;
  color: #fff !important;
  font-size: 14px !important;
  line-height: 1.4 !important;
}

    </style>
</head>
<body>
    <header>
        <div id="container-logo">   
            <img src="<?php bloginfo('template_url');?>/img/Logo_CNCH.png" alt="">
        </div>
        <nav>
            <ul>
                <li>Trabaja con nosotros</li>
                <li>Grupo Nutresa</li>
                <li>Contáctos</li>
                <li>
                    <div class="search-container">
                        <input type="text" class="search-input" placeholder="Buscar...">
                        <button type="submit" class="search-button">
                          <i class="fas fa-search"></i>
                        </button>
                    </div>                      
                </li>
                <li>
                    <img src="<?php bloginfo('template_url');?>/img/facebook.png" alt="">
                </li>
                <li>
                    <img src="<?php bloginfo('template_url');?>/img/logotipo-de-linkedin.png" alt="">
                </li>
                <li></li>
            </ul>
            <ul>
                <li>Nuestra compañia</li>
                <li>Organización conciente</li>
                <li>Marcas</li>
                <li>Internacional</li>
                <li>Negocios Industriales</li>
                <li>Fomento Cacaotero</li>
                <li>Sostenibilidad</li>
            </ul>
        </nav>
    </header>