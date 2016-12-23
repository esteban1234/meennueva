<?php include 'headdos.php';?>

  <article class="reglacabeza">
    <article class="nombrecabeza">
      <span class="icon-text-document"></span>&nbsp;&nbsp;CONSTRUCTORA
    </article>
     <article class="nombrecabeza2">
      <span class="icon-mail"></span>&nbsp;&nbsp;<b>MAIL:</b>&nbsp;&nbsp;info@meen.com.mx
    </article>
  </article>

  <article class="header">
    <nav>
      <ul>
        <li><a href="../index.php"><span class="icon-home"></span>&nbsp;INICIO</a></li>
        <li><a href="nosotros.php"><span class="icon-users"></span>&nbsp;QUIENES SOMOS</a></li>
        <li><a href="servicios.php"><span class="icon-suitcase"></span>&nbsp;SERVICIOS</a></li>
        <li class="active"><a href="contacto.php"><span class="icon-old-phone"></span>&nbsp;CONTACTO</a></li>
      </ul>
    </nav>
  </article>

  <h1 class="contacto">Contáctanos</h1>
  <p class="textoconta">Gracias por ser su primera opción.
        Muy pronto estaremos respondiendo su correo. Escribanos cualquier comentario por este medio.</p>

  <form id="contacto" action="envia.php" method="POST">
      <label class="ema">Nombre (s):</label><br>
      <input class="emai" type="text" name="nombre" size="60" maxlength="40" placeholder="Nombre completo" required/><br><br>

      <!-- <label class="ema">Apellidos:</label><br>
      <input class="emai" type="text" name="apellido" size="60" maxlength="40" placeholder="Apellidos" required/><br><br> -->

      <div id="cote">
          <div class="izq">
              <label class="ema">Correo electronico:</label><br>
              <input class="emai" type="email" name="correo" size="40" maxlength="40" placeholder= "ejemplo@correo.com" required/>

          </div>
          <div class="der">
             <label class="ema">Teléfono:</label><br>
             <input class="emai" type="text" name="telefono" size="30" maxlength="10"  placeholder="Numero Telefónico" required/>
          </div>
      </div> <br>

      <label class="ema">Escríbenos tu comentario:</label><br>
      <textarea id="areac" class="emai"  name="comentario" rows="" cols="" placeholder="Escríbenos tus comentarios" required/></textarea><br>
       <input  id="enviar2" class="enviar" type="submit" value="ENVIAR">
  </form>

        <article class="mapa">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9991156425053!2d-89.56921984360365!3d20.992672567537397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5670b5e2d0ec0b%3A0xdebf609a00d27530!2sCalle+14+320%2C+Leandro+Valle%2C+97143+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1479933946622" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

        </article>

        <article class="datos">
          <article class="direc">
          <p class="text_datos">DIRECCIÓN</p>
          <p class="text_datosd">Calle 14 #320 entre 47 y 49. Col. Leandro Valle. Mérida, Yucatán, México.</p>
          </article>
          <article class="tel">
            <p class="text_datos">TELEFONO</p>
          <p class="text_datosd">Pendiente.</p>
          </article>
          <article class="hor">
            <p class="text_datos">HORARIO</p>
          <p class="text_datosd">Lunes a Viernes de 9am a 6pm.</p>
          </article>
          <article class="cor">
            <p class="text_datos">CORREO</p>
          <p class="text_datosd">info@meen.com.mx</p>
          </article>
        </article>



    <span class="ir-arriba icon-arrow-bold-up"></span>

    <?php include 'Pie.php';?>

    <script type="text/javascript" src="../js/jquery.js"></script>
    <script src="../js/menu.js"></script>
    <script type="text/javascript" src="../js/iconoarriba.js"></script>
  </body>
</html>
