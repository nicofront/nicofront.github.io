<?php include('head.php'); ?>

	<div id="stage-simple">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>
						Busca aquí tu Certificado Digital
					</h1>
				</div>
			</div>
		</div>
	</div>

	<section id="buscar-certificado">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<iframe src="https://acg4.acepta.com/cgi-bin/consultar_certificados_gral" width="100%" height="250" frameborder="0"></iframe>
				</div>
				<div class="col-md-12">
					<div class="buscar-item">
						<p>
							Ingrese e-mail del Certificado:
						</p>
						<div class="row">
							<div class="col-md-4">
								<input type="text" placeholder="Ej: nombre@dominio">
							</div>
							<div class="col-md-4">
								<a href="" class="button">Buscar</a>
							</div>
						</div>
					</div>
					<div class="buscar-item">
						<p>
							Ingrese rut del Suscriptor:
						</p>
						<div class="row">
							<div class="col-md-4">
								<input type="text" placeholder="Ejemplo: 12345678-9">
							</div>
							<div class="col-md-4">
								<a href="" class="button">Buscar</a>
							</div>
						</div>
					</div>
					<div class="buscar-item">
						<p>
							Ingrese parte del dominio: (omitir www)
						</p>
						<div class="row">
							<div class="col-md-4">
								<input type="text" placeholder="Ejemplo: acepta.com">
							</div>
							<div class="col-md-4">
								<a href="" class="button">Buscar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include('footer.php'); ?>