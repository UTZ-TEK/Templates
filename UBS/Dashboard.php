<?php
require 'include/header.php';
require 'include/connection.php';
?>

    <!--Esta CABECERA neceito que sea estatica como el header y va a tener que salir de la base de datos-->
    <div class="card">
        <header class="content__title">
            <div class="row" style="padding-top: 10px">
                <div class="col-sm-8 col-md-8">
                    <h2>Dashboard</h2>
                </div>

                <div class="col-sm-4 col-md-4 nav justify-content-end">
                    <button class="btn btn-light btn--icon-text"><i class="zmdi zmdi-apps"></i>Entrar</button>                        
                </div>  
               
            </div>
        </header>
    </div>

    <div class="row">
	    <div class="col-sm-6 col-md-3">
	        <div class="quick-stats__item">
	            <div class="quick-stats__info">
	                <h2>987,459</h2>
	                <small>Total Paquetes enviados mes actual.</small>
	            </div>

	            <div class="quick-stats__chart peity-bar">6,4,8,6,5,6,7,8,3,5,9</div>
	        </div>
        </div>

	    <div class="col-sm-6 col-md-3">
	        <div class="quick-stats__item">
	            <div class="quick-stats__info">
	                <h2>987,459</h2>
	                <small>Peso total enviado mes actual.</small>
	            </div>

	            <div class="quick-stats__chart peity-bar">6,4,8,6,5,6,7,8,3,5,9</div> <!--Estos numeros podrian ser los mese-->
	        </div>
        </div>

	    <div class="col-sm-6 col-md-3">
	        <div class="quick-stats__item">
	            <div class="quick-stats__info">
	                <h2>987,459</h2>
	                <small>Total de clientes que han enviado mes actual.</small>
	            </div>

	            <div class="quick-stats__chart peity-bar">6,4,8,6,5,6,7,8,3,5,9</div>
	        </div>
        </div>

	    <div class="col-sm-6 col-md-3">
	        <div class="quick-stats__item">
	            <div class="quick-stats__info">
	                <h2>987,459</h2>
	                <small>Total de ingresos mes actual.</small>
	            </div>

	            <div class="quick-stats__chart peity-bar">6,4,8,6,5,6,7,8,3,5,9</div>
	        </div>
        </div>

	</div>
	
    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Total de Paquetes Enviados por Servicio.</h4>

                    <div class="flot-chart flot-line"></div>
                    <div class="flot-chart-legends flot-chart-legends--line"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Peso Total Enviado por Servicio.</h4>

                    <div class="flot-chart flot-bar"></div>
                    <div class="flot-chart-legends flot-chart-legends--bar"></div>
                </div>
            </div>

        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Top 10 Clients del Mes</h4>

                    <div class="flot-chart flot-donut"></div>
                    <div class="flot-chart-legends flot-chart-legend--donut"></div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Total de Ingresos por Mes.</h4>

                    <div class="flot-chart flot-curved-line"></div>
                    <div class="flot-chart-legends flot-chart-legends--curved"></div>
                </div>
            </div>

        </div>

    </div>

    <div class="row">

      <!--MAPA PAISES-->
      <div class="col-md-6">

		<div class="card widget-visitors">
		    <div class="card-body">
		        <h4 class="card-title">Paises a los que Hemos Enviado Año actual.</h4>

		        <div class="widget-visitors__stats">
		            <div>
		                <strong>20</strong>
		                <small>Total de Paises Año Actual.</small>
		            </div>
		            <div>
		                <strong>7</strong>
		                <small>Total de Paises Mes Actual.</small>
		            </div>
		        </div>

		        <div class="widget-visitors__map map-visitors"></div>
		    </div>

		</div>

	  </div>

      <!--MAPA PAISES-->
      <div class="col-md-6">
	  
        <div class="card">
	        <div class="card-body">
	            <h4 class="card-title">Top 10 Paises.</h4>
	            <h6 class="card-subtitle"> Lista ordenada de mayor a menor.</h6>

	            <table class="table mb-3">
	                <thead  class="thead-default">
	                <tr>
	                    <th>No.</th>
	                    <th>Country</th>
	                    <th>Envios</th>
	                    <th>Mes mas Envios</th>
	                </tr>
	                </thead>
	                <tbody>
	                <tr>
	                    <th scope="row">1</th>
	                    <td>USA</td>
	                    <td>100</td>
	                    <td>Agosto</td>
	                </tr>
	                <tr>
	                    <th scope="row">2</th>
	                    <td>Mexico</td>
	                    <td>80</td>
	                    <td>Agosto</td>
	                </tr>
	                <tr>
	                    <th scope="row">3</th>
	                    <td>Reino Unido</td>
	                    <td>80</td>
	                    <td>Septiembre</td>
	                </tr>
	                <tr>
	                    <th scope="row">4</th>
	                    <td>Canada</td>
	                    <td>50</td>
	                    <td>Agosto</td>
	                </tr>
	                <tr>
	                    <th scope="row">5</th>
	                    <td>Inglaterra</td>
	                    <td>40</td>
	                    <td>Agosto</td>
	                </tr>
	                <tr>
	                    <th scope="row">6</th>
	                    <td>Argentina</td>
	                    <td>10</td>
	                    <td>Septiembre</td>
	                </tr>
	                </tbody>
	            </table>

	        </div>
        </div>

  		
	  </div>

    </div>

<?php
require 'include/footer.php';
?>
