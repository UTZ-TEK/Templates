<?php
require 'include/header_no_sidebar.php';
?>
    <section class="content content--full">
    
	    <div class="card ">
	        <header class="content__title">
	            
	            <!-- Row 1-->
	            <div class="row">
	                <div class="col-md-2" align="center" id="generar">
	                	<div class='result' style="padding-top: 15px"></div>
	                	<br>
	                	<H5>U-192030PL-1523</H5>
	                
	                </div>

	                <div class="col-md-2">
	                    <div class="dropdown-demo">                       	
	                        <label class="btn btn-light" disabled>Account Name</label>
	                    	    <select type="button" class="form-control">
	                        	    <option></option>
	                            	<option>Luna Zorro</option>
	                            	<option>Stela (9)</option>
	                          	</select>

	                    </div> 

	                    <div class="dropdown-demo" style="padding-top: 10px">                      	
		                        <label class="btn btn-light" disabled>Selected Service</label>
		                    	    <select type="button" class="form-control">
		                        	    <option></option>
		                            	<option>PLUS</option>
		                            	<option>EXPRESS</option>
		                          	</select>

	                   	</div>

	                </div>  

	                <div class="col-md-2">
	                	<div class="row">
	                		<div class="col-md-12">
			                    <div class="dropdown-demo">                       	
			                        <label class="btn btn-light" disabled>Location</label>
		                                <input type="text" class="form-control" disabled placeholder="Front Desk">

			                    </div>

			                    <div class="dropdown-demo" style="padding-top: 10px">                      	
				                        <label class="btn btn-light" disabled>Status</label>
				                    	    <select type="button" class="form-control">
				                        	    <option></option>
				                            	<option>SHIP</option>
				                            	<option>QUOTE</option>
				                          	</select>

			                   	</div>
		                   	</div>
	                   	</div>
	                </div>

	                <div class="col-md-2">
	                	<div class="dropdown-demo">                       	
	                        <label class="btn btn-light" disabled>Needs Permit?</label>
	                            <div class="demo-inline-wrapper">
                                    <div class="toggle-switch toggle-switch--green " style="padding-top: 10px">
                                        <input type="checkbox" class="toggle-switch__checkbox">
                                        <i class="toggle-switch__helper"></i>
                                    </div>
	                            </div>

	                    </div>

	                    <div class="dropdown-demo" style="padding-top: 18px">                       	
	                        <label class="btn btn-light" disabled>R-4 Permit</label>
                                <input type="text" class="form-control">

	                    </div>

	                </div> 
	               
		            <div class="col-md-2">
                        <label class="btn btn-light" disabled>Date</label>
                        <input type="text" class="form-control input-mask" data-mask="00/00/0000" placeholder="dd/mm/yyyy">

		                <div class="row">
		                	<div class="col-md-6">
			                	<div class="dropdown-demo" style="padding-top: 10px">                       	
			                        <label class="btn btn-light" disabled>Days on Floor</label>
			                            <input type="text" class="form-control">
			                    </div>

		                    </div>

		                	<div class="col-md-6">
			                	<div class="dropdown-demo" style="padding-top: 10px">                       	
			                        <label class="btn btn-light" disabled>EST</label>
			                            <input type="text" class="form-control">
			                    </div>

		                    </div>
		                    
		                </div>

	            	</div>

	            	<div class="col-md-2" align="center">
						<button type="button" class="btn btn-success" style="width:160px;">COMMENTS</button>
                        <button type="button" class="btn btn-dark" style="width:160px;">TIMELINE/LOG</button>

	            	</div>

	           	</div>
	        </header>
	    </div>

	    <!-- Row 2 / Acordion -->
        <div class="card">
            <div class="card-body">
                <div class="accordion" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne" align="center">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                METHOD IN
                            </a>
                        </div>

                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">

			                	<div class="row">
			                		<div class="col-md-4">
			                			
										<div class="dropdown-demo">                       	
					                        <label class="btn btn-light" disabled>Arrival Method</label>
					                    	    <select type="button" class="form-control">
					                        	    <option></option>
					                            	<option>Pick UP</option>
					                            	<option>Dropoff</option>
					                          	</select>

					                    </div> 

					                    <div class="dropdown-demo" style="padding-top: 10px">                      	
						                        <label class="btn btn-light" disabled>Courier In</label>
						                    	    <select type="button" class="form-control">
						                        	    <option></option>
						                            	<option>GuatEx</option>
						                            	<option>CaEx</option>
						                          	</select>

					                   	</div>

					                    <div class="dropdown-demo" style="padding-top: 10px">                      	
						                        <label class="btn btn-light" disabled>Local Number Guide</label>
						                    	    <select type="button" class="form-control">
						                        	    <option></option>
						                            	<option>Credito</option>
						                            	<option>Contado</option>
						                          	</select>

					                   	</div>

					                	<div class="dropdown-demo"  style="padding-top: 10px">                       	
					                        <label class="btn btn-light" disabled>Far Off Region</label>
					                            <div class="demo-inline-wrapper">
				                                    <div class="toggle-switch toggle-switch--green" style="padding-top: 11px">
				                                        <input type="checkbox" class="toggle-switch__checkbox">
				                                        <i class="toggle-switch__helper"></i>
				                                    </div>
					                            </div>

					                    </div>

					                    <div class="dropdown-demo" style="padding-top: 15px">                      	
						                        <label class="btn btn-light" disabled>Credit Type of Guide</label>
						                    	    <select type="button" class="form-control">
						                        	    <option></option>
						                            	<option>Yes</option>
						                            	<option>No</option>
						                          	</select>

					                   	</div>

			                		</div>

			                		<div class="col-md-4">
			                			<div class="dropdown-demo">                       	
					                        <label class="btn btn-light" disabled>Charge Amount</label>
				                                <input type="text" class="form-control">

					                    </div>

					                    <div class="dropdown-demo" style="padding-top: 10px">                       	
					                        <label class="btn btn-light" disabled>Weight on Guide</label>
				                                <input type="text" class="form-control">

					                    </div>

					                    <div class="dropdown-demo" style="padding-top: 10px">                       	
					                        <label class="btn btn-light" disabled>Initial UTZ Weight (kg)</label>
				                                <input type="text" class="form-control">

					                    </div>

					                    <div class="dropdown-demo" style="padding-top: 10px">                      	
						                        <label class="btn btn-light" disabled>Type of Packing Upon Arrival</label>
						                    	    <select type="button" class="form-control">
						                        	    <option></option>
						                            	<option>Primium</option>
						                            	<option>Fragil</option>
						                          	</select>

					                   	</div>

					                   	<div class="row">
						                   	<div class="col-md-3">
							                   	<div class="dropdown-demo" style="padding-top: 10px">                       	
							                        <label class="btn btn-light" disabled>Quantity Packs</label>
														<input class="form-control" type="number" value="" min="0" max="1000" step="1">
							                    </div>
							                </div>
						                </div>

			                		</div>

			                		<div class="col-md-4">
			        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Image</h4>
                            <form class="dropzone" id="dropzone-upload"></form>

                        </div>
                    </div>

                    			REVISAR EL HEADER NO SIDEBAR.
                    			<div class="col-sm-4">
                                    <label>Date picker</label>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="form-group">
                                            <input type="text" class="form-control date-picker" placeholder="Pick a date">
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                </div>

			                		</div>

			                	</div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo"  align="center">
                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                CLIENT INFO
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
			                		<div class="col-md-4">
			                			A
			                		</div>

			                		<div class="col-md-4">
			                			B
			                		</div>

			                		<div class="col-md-4">
			                			C
			                		</div>

			                	</div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree" align="center">
                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                ADITIONAL OPTIONS
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
			                		<div class="col-md-4">
			                			A
			                		</div>

			                		<div class="col-md-4">
			                			B
			                		</div>

			                		<div class="col-md-4">
			                			C
			                		</div>

			                	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> 

<!-- Optional JavaScript -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- App functions and actions -->
	<script type="text/javascript" src="js/qr.js"></script>

<?php
require 'include/footer.php';