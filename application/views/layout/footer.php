      
        <div id="footer" class="footer">
            <div class="container">
                <div class="row">          
					<div class="col-md-12">
						<div class="col-md-5">
							<div class="col-md-10 colorAnaranjado divBordedado">
								<center>
								<h4 class="footer-header">Suscribete para recibir Promociones</h4>
								</center>
								<input type="text" class="form-control" name="email" id="txtCorreoSuscripcion" placeholder="Ingrese su correo" />
								</br>
								<center>
									<button type="submit" class="btn btn-inverse colorAmarrillo" id="btnSuscribirse">SUSCRIBIRME</button>
								</center>
								</br>
							</div>
							<div class="col-md-2">
							</div>
						</div>
                    
						<div class="col-md-4">
							<h4 class="footer-header">Horario de Atención</h4>
							<ul class="fa-ul">
								<li><i class="fa fa-li fa-angle-right"></i>Lunes a Viernes  :  9:00 AM a 10:00 PM</li>
								<li><i class="fa fa-li fa-angle-right"></i>Sábado y Domingo :  9:00 AM a  6:00 PM</li>
							</ul>
						</div>
						
						<div class="col-md-3">
							<h4 class="footer-header">
								Siguenos en :
								<a href="https://www.facebook.com/dolceee.salato/" target="_blank"  class="colorBlanco" ><i class="fa fa-facebook f-s-16"></i></a>
								<a href="#" target="_blank" class="colorBlanco"><i class="fa fa-envelope-open-o f-s-16"></i></a>
							</h4>
							
							<i class="fa fa-envelope-open-o f-s-16"></i> contacto@dolcesalato.com</br></br>
							<i class="fa fa-whatsapp f-s-16"></i> 997610443</br></br>
							<i class="fa fa-phone f-s-16"></i> 997610443</br></br>
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
	<script src="<?php echo base_url();?>assets/js/blog/apps.min.js"></script>

	<!--INICIALIZAR VARIABLES GLOBALES-->
	<script type="text/javascript">
		var BASE_URL = "<?php echo base_url();?>";
	</script>
	
	<script src="<?php echo base_url();?>assets/js/panelAdministrador/generico.js"></script>
	<script src="<?php echo base_url();?>assets/js/panelAdministrador/servicios.js"></script>
	<script src="<?php echo base_url();?>assets/js/panelAdministrador/emailCotizaciones.js"></script>	
	<script src="<?php echo base_url();?>assets/js/panelAdministrador/producto.js"></script>	
	<script>
	    $(document).ready(function() {
	        App.init();
		});
	</script>
</body>
</html>