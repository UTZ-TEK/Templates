<?php
require 'include/header.php';
?>
    <section class="content content--full">
        <header class="content__title">
            <h1 class="text-center">UTZ BOX</h1>
            <small class="text-center">Descripción</small>
        </header>
        <div class="row">
        	<div class="col-lg-6">
        		<h2 class="text-center">Cotizar</h2>
        		
        		<div class="form-group">
				    <input type="text" class="form-control" placeholder="Dimensiones" id="dimensiones">
				    <i class="form-group__bar"></i>
				</div>
				<div class="form-group">
				    <input type="text" class="form-control" placeholder="Peso" id="peso">
				    <i class="form-group__bar"></i>
				</div>
				<div class="form-group">
				    <div class="select">
				        <select class="form-control">
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
        	<div class="col-lg-6">
        		<h2 class="text-center">Recolectar</h2>
        	</div>
        </div>       
    </section>
<?php
require 'include/footer.php';
?>