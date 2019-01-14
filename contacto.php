    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contactanos</h3>
          <p>
            Para nosotros es un placer atenderte y dar solución a tus necesidades, por favor contáctanos para así
            poderte dar una
            atención personalizada.
          </p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Dirección</h3>
              <address>Calle 8 No. 25 55, Fonseca - La Guajira</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telefono</h3>
              <p><a href="tel:+573022279723">+57 (302) 227 9723</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:tecseelsas@gmail.com">tecseelsas@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Tu mensaje ha sido enviado. ¡Gracias!
          </div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-4">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4"
                  data-msg="Por favor ingrese al menos 4 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-4">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email"
                  data-msg="Por favor introduzca una dirección de correo electrónico válida" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-4">
                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Teléfono" data-rule="phone"
                  data-msg="Por favor introduzca un numero de teléfono válido" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4"
                data-msg="Por favor ingrese al menos 8 caracteres del asunto" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros"
                placeholder="Mensaje"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Enviar mensaje</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->