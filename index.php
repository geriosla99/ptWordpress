<?php get_header(); ?>
    <div id="contentSlider">
        <div class="slider">
            <div class="slides">
              <div class="slide">
                <img src="<?php bloginfo('template_url');?>/img/descarga (1).jpg" alt="Imagen 1">
              </div>
              <div class="slide">
                <img src="<?php bloginfo('template_url');?>/img/descarga.jpg" alt="Imagen 2">
              </div>
              <div class="slide">
                <img src="<?php bloginfo('template_url');?>/img/descarga.png" alt="Imagen 3">
              </div>
            </div>
            <div class="controls">
              <button class="prev-btn">&#8249;</button>
              <button class="next-btn">&#8250;</button>
            </div>
        </div>          
    </div>
    <div id="cards">
        <div>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque vitae tortor sit amet tincidunt. Sed fermentum, sapien et auctor semper, velit augue egestas felis, sed fermentum nisl nisi in risus.
            </p>
        </div>
        <div id="contentCards">
            <div class="card image-container">
                <div width="320" height="216" class="image-overlay">
                    <h2>Pilar 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque vitae tortor sit amet tincidunt.</p>
                </div>
                <img width="320" height="216" src="<?php bloginfo('template_url');?>/img/barrio-residencial-moderno-techo-verde-balcon-generado-ia.jpg" alt="">
            </div>
            <div class="card">
                <div width="320" height="216" class="image-overlay">
                    <h2>Pilar 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque vitae tortor sit amet tincidunt.</p>
                </div>
                <img width="320" height="216" src="<?php bloginfo('template_url');?>/img/barrio-residencial-moderno-techo-verde-balcon-generado-ia.jpg" alt="">
            </div>
            <div class="card">
                <div width="320" height="216" class="image-overlay">
                    <h2>Pilar 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque vitae tortor sit amet tincidunt.</p>
                </div>
                <img width="320" height="216" src="<?php bloginfo('template_url');?>/img/barrio-residencial-moderno-techo-verde-balcon-generado-ia.jpg" alt="">
            </div>
            <div class="card">
                <div width="320" height="216" class="image-overlay">
                    <h2>Pilar 4</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque vitae tortor sit amet tincidunt.</p>
                </div>
                <img width="320" height="216" src="<?php bloginfo('template_url');?>/img/barrio-residencial-moderno-techo-verde-balcon-generado-ia.jpg" alt="">
            </div>
            <div class="card">
                <div width="320" height="216" class="image-overlay">
                    <h2>Pilar 5</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque vitae tortor sit amet tincidunt.</p>
                </div>
                <img width="320" height="216" src="<?php bloginfo('template_url');?>/img/barrio-residencial-moderno-techo-verde-balcon-generado-ia.jpg" alt="">
            </div>
        </div>
    </div>
    <footer>
        <div>
            <img src="<?php bloginfo('template_url');?>" alt="">
            <img src="<?php bloginfo('template_url');?>" alt="">
            <img src="<?php bloginfo('template_url');?>" alt="">
            <img src="<?php bloginfo('template_url');?>" alt="">
        </div>
        <div>
            <div>
                <a href=""></a><a href=""></a><a href=""></a>
            </div>
            <div>
                
            </div>
        </div>
        <div>
            <p>Copyright &copy; 2023 Compañia Nacional de Chocolates. Todos los derechos reservados | Medellin - Colombia</p>
        </div>
    </footer>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const slides = document.querySelector('.slides');

    let counter = 0;

    nextBtn.addEventListener('click', function() {
      counter++;
      if (counter === 3) {
        counter = 0;
      }
      slides.style.transform = `translateX(-${counter * 100}%)`;
    });

    prevBtn.addEventListener('click', function() {
      counter--;
      if (counter === -1) {
        counter = 2;
      }
      slides.style.transform = `translateX(-${counter * 100}%)`;
    });
  });
</script>
</body>
</html>