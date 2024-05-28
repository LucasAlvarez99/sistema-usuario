<?php include ('header.php');?>
	<!--=====================================
	   HERO
	   ======================================-->

	<section class="section-hero">
		<div class="hero">
			<div class="container center">
				<div class="container-form ">
					<div class="card">
						<form onsubmit="return false">
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix">account_circle</i>
							         <input  type="text" id="username" class="validate" autocomplete="off">
							         <label for="username">Ingresa tu Usuario o Email</label>
								</div><!-- Enf col -->


								<div class="input-field col s12">
									<i class="material-icons prefix">lock_outline</i>
							         <input type="password" id="password" class="validate">
							         <label for="password">Contraseña</label>
								</div><!-- Enf col -->


								<div class="col s12">
									<div class="center">
										<input type="submit" class="waves-effect waves-light btn blue" value="Ingresar">
									</div>
								</div>
							</div><!-- End row -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php include ('footer.php');?>