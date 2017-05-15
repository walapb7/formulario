<!DOCTYPE html>

<html>
    <head>
        
        <title>Formulario Tajet</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="formulario/main.css" />
    </head>

    <body>
	    		<h3>Registro</h3>
			<p>
				Ingresa los siguientes datos
			</p>
			<form id="login" class="form form-login" data-curriculum="" novalidate="novalidate">
				<div class="errorHandlerTxt alert alert-danger no-display"></div>
				<fieldset>
					<div class="form-group">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo" maxlength="50">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" maxlength="50">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" maxlength="9" autocomplete="off">
					</div>	
					<div class="form-group row">
						<div class="col-md-6">
							<input type="text" class="form-control" id="edad" name="edad" placeholder="Edad" maxlength="2">
						</div>
						<div class="col-md-6">
							<select class="form-control error" id="anios_experiencia" name="anios_experiencia">
								<option value="0">Años de experiencia</option>
								<option value="1 año">1</option>
								<option value="2 años">2</option>
								<option value="3 años">3</option>
								<option value="4 años">4</option>
								<option value="Más de 5 años">Más de 5 años</option>
							</select><label for="anios_experiencia" class="error">Seleccione una opción.</label>
						</div>
					</div>
					
					<div class="form-group">
						<!--<textarea class="form-control" id="portafolio" name="portafolio" placeholder="Enlaces de portafolio. (Sitio web, Behance, Facebook, otros.)"></textarea>-->
						<input type="hidden" name="portafolio" id="portafolio" value="0">
					</div>
					
					<div class="form-group">
						<textarea name="ultimo_trabajo" id="ultimo_trabajo" class="form-control" cols="30" rows="5" placeholder="Breve descripción de sus últimos trabajos"></textarea>
					</div>	

					<div class="form-group bottom fleft">	
		            	<label class="" for="captcha">* Por Favor,Verifique que es humano.</label>
						<div id="code-g-captcha" class="g-recaptcha" data-sitekey="6LfergwTAAAAAHt_WSXMkYrfOmFjXqyPRVLzb8dF"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LfergwTAAAAAHt_WSXMkYrfOmFjXqyPRVLzb8dF&amp;co=aHR0cDovL3d3dy50YXJnZXQuY29tLm5pOjgw&amp;hl=es&amp;v=r20170503135251&amp;size=normal&amp;cb=51t1rk7i7ncs" title="widget del recaptcha" width="304" height="78" frameborder="0" scrolling="no" name="undefined"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div>
						
					</div>		
					<div class="clearfix"></div>						
					<div class="form-actions boton-absolute">
						<input type="hidden" id="session" name="session" value="hol ">
						<input type="submit" id="submit" class="btn btn-bricky pull-right" value="Enviar">
					</div>
				</fieldset>
			</form>
			
	  		
		
    </body>
</html>
