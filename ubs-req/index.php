<?php
require 'include/header.php';
?>
    <section class="content content--full">
        <header class="content__title">
            <!--<h1 class="text-center">UTZ BOX</h1>-->
            <div class="text-center">
            	<img src="images/logo.png" class="rounded" alt="Logo image" width="8%">
            </div>
            <!--<small class="text-center">Descripción</small>-->
        </header>
        <div class="row">
<!----------------------------LADO iZQUIERDO------------------------- -->
        	<div class="col-lg-6 card">
        		<h2 class="text-center">Cotizar</h2>
        		<div class="row">
        		  <div class="col">
				    <div class="form-group">
				        <input type="text" class="form-control" placeholder="Ancho" id="ancho">
				        <i class="form-group__bar"></i>
				    </div>
				  </div>
				  <div class="col">
				    <div class="form-group">
						<div class="select">
					        <select class="form-control" id="ancho_medida">
					            <option>cm</option>
					            <option>inch</option>
					        </select>
					    </div>				    
					</div>
				  </div>
				  <div class="col">
				    <div class="form-group">
				        <input type="text" class="form-control" placeholder="Largo" id="largo">
				        <i class="form-group__bar"></i>
				    </div>
				  </div>
				  <div class="col">
				    <div class="form-group">
						<div class="select">
					        <select class="form-control" id="largo_medida">
					            <option>cm</option>
					            <option>inch</option>
					        </select>
					    </div>				    
					</div>
				  </div>
				  <div class="col">
				    <div class="form-group">
				        <input type="text" class="form-control" placeholder="Alto" id="alto">
				        <i class="form-group__bar"></i>
				    </div>
				  </div>
				  <div class="col">
				    <div class="form-group">
						<div class="select">
					        <select class="form-control" id="alto_medida">
					            <option>cm</option>
					            <option>inch</option>
					        </select>
					    </div>				    
					</div>
				  </div>
        		</div>
				<div class="form-group">
				    <input type="text" class="form-control" placeholder="Peso" id="peso">
				    <i class="form-group__bar"></i>
				</div>
				<div class="form-group">
				    <div class="select">
				        <select class="form-control" id="tipo_producto">
				            <option>Tipo de producto</option>
				            <option>Option 1</option>
				            <option>Option 2</option>
				            <option>Option 3</option>
				            <option>Option 4</option>
				            <option>Option 5</option>
				        </select>
				    </div>
				</div>
				<div class="form-group">
				    <input type="text" class="form-control" placeholder="Correo" id="correo">
				    <i class="form-group__bar"></i>
				</div>
        	</div>
<!----------------------------LADO DERECHO------------------------- -->
        	<div class="col-lg-6 card">
        		<h2 class="text-center">Recolectar</h2>

        		<div class="form-group">
				    <input type="text" class="form-control" placeholder="Dirección" id="direccion_recolecta">
				    <i class="form-group__bar"></i>
				</div>

				<div class="form-group">
				    <input type="text" class="form-control" placeholder="Código de cliente" id="codigo_cliente">
				    <i class="form-group__bar"></i>
				</div>
			
				<div class="text-center">
					<button type="button" class="btn btn-outline-primary">Enviar</button>
					<button type="button" class="btn btn-outline-info">No tengo código de cliente</button>
				</div>

        	</div>
        </div>       
    </section>
<?php
require 'include/footer.php';
?>