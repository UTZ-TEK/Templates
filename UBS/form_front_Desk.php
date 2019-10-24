<?php
require 'include/header_no_sidebar.php';
?>
    <section class="content content--full">
    
	    <div class="card">
	        <header class="content__title">
	            
	            <!-- Row 1-->
	            <div class="row">
	                <div class="col-md-2" align="center" id="generar">
	                	<div class='result'></div>
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
		               3
		            </div>

	            </div>
	        </header>
	    </div>

    </section> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- App functions and actions -->
    <script type="text/javascript" src="js/qr.js"></script>
    <!-- App Fechas -->
        <!-- Vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <script src="vendors/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
        <script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
        <script src="vendors/bower_components/dropzone/dist/min/dropzone.min.js"></script>
        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/flatpickr/dist/flatpickr.min.js"></script>
        <script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>
        <script src="vendors/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
        <script src="vendors/bower_components/trumbowyg/dist/trumbowyg.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>

<?php
require 'include/footer.php';
?>