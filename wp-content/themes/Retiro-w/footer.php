<!-- Modal Contact -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="main-banner__form">
              <div class="main-banner__title">
                <p>Fomulario de Contáctanos</p>
              </div>
              <form action="">
                <div class="form-group">
                    <input class="form-control" id="formGroupExampleInput" placeholder="Nombre *" type="text">
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="formGroupExampleInput2" placeholder="Correo *" type="text">
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="formGroupExampleInput2" placeholder="Celular *" type="tel">
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="formGroupExampleInput2" placeholder="Ciudad" type="text">
                  </div>

                  <div class="form-group">
                    <textarea placeholder="Mensaje" rows="8"></textarea>
                  </div>
                  <div class="custom-control custom-checkbox my-1 mr-sm-2">
                    <input class="custom-control-input" id="customControlInline" type="checkbox">
                    <label class="custom-control-label" for="customControlInline">
                        Acepto
                      </label>
                    <a class="text-link" target="_blank" href="<?php echo get_template_directory_uri();?>/assets/img/MANUAL_DE_POLITICAS_PROMOTORA.pdf">
                        <strong>
                          política de privacidad
                        </strong>
                      </a>
                  </div>
                  <div class="float-left btn-box">
                    <button class="btn_custom btn--medium btn--filled">
                        Enviar
                      </button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
   <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script> 
   <script src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
   <script src="<?php echo get_template_directory_uri();?>/assets/js/setting-slick.js"></script>
   <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
</body>
</html>