      
        <div id="footer" class="footer">
            <div class="container">
                <div class="row">                    
					<div class="col-md-12">					
						<div class="col-md-6">							
							<div class="col-md-10">
								<h4 class="footer-header">SUSCRIBETE PARA RECIBIR PROMOCIONES</h4>
								<div class="subscription-form">
									<div class="input-group">
										<input type="text" class="form-control" name="email" placeholder="Ingrese su correo" />
										<div class="input-group-btn">
											<button type="submit" class="btn btn-inverse btnColorAmarillo"><i class="fa fa-angle-right"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
							</div>
						</div>
                    
						<div class="col-md-4">
							<h4 class="footer-header">HORARIO DE ATENCIÓN</h4>
							<ul class="fa-ul">
								<li><i class="fa fa-li fa-angle-right"></i>Lunes a Viernes  :  9:00 AM a 10:00 PM</li>
								<li><i class="fa fa-li fa-angle-right"></i>Sábado y Domingo :  9:00 AM a  6:00 PM</li>
							</ul>
						</div>
						
						<div class="col-md-2">
							<h4 class="footer-header">SIGUENOS EN</h4>
							<i class="fa fa-facebook f-s-14"></i>
							<i class="fa fa-envelope-open-o f-s-14"></i>
							<i class="fa fa-instagram f-s-14"></i>
						</div>                    
					</div>
                </div>
            </div>
        </div>
        <div id="footer-copyright" class="footer-copyright">
            <div class="container">
                <div class="payment-method">
                    <img src="<?php echo base_url();?>assets/img/payment/payment-method.png" alt="" />
                </div>
                <div class="copyright">
                    Copyright &copy; 2017 SeanTheme. All rights reserved.
                </div>
            </div>
        </div>
    </div>
	<script src="<?php echo base_url();?>assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/bootstrap3/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="<?php echo base_url();?>assets/js/e-commerce/apps.min.js"></script>
	<!-- <script src="<?php echo base_url();?>assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
	<script src="<?php echo base_url();?>assets/js/demo/form-wizards.demo.min.js"></script> -->
	<script src="<?php echo base_url();?>assets/js/blog/apps.min.js"></script>


	<!--INICIALIZAR VARIABLES GLOBALES-->
	<script type="text/javascript">
		var BASE_URL = "<?php echo base_url();?>";
		var URL_PANEL_ADMIN = "<?php echo utf8_decode($this->config->item('RUTA_ADMINISTRADOR')); ?>";
		//var COBERTURA = false;
	</script>
	
	<script src="<?php echo base_url();?>assets/js/panelAdministrador/servicios.js"></script>
	<script src="<?php echo base_url();?>assets/js/panelAdministrador/emailCotizaciones.js"></script>
	<script src="<?php echo base_url();?>assets/js/panelAdministrador/generico.js"></script>
	<script src="<?php echo base_url();?>assets/js/panelAdministrador/producto.js"></script>	
	<script>
	    $(document).ready(function() {
	        App.init();
		});
	</script>
</body>
</html>