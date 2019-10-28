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
	                	</br>
	                	<H5>U-192030PL-1523</H5>
	                
	                </div>

	                <div class="col-md-2">
	                    <div class="dropdown-demo">                       	
	                        <label>Account Name</label>
	                    	    <select type="button" class="form-control">
	                        	    <option></option>
	                            	<option>Luna Zorro</option>
	                            	<option>Stela (9)</option>
	                          	</select>

	                    </div> 

	                    <div class="dropdown-demo" style="padding-top: 10px">                      	
		                        <label>Selected Service</label>
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
			                        <label>Location</label>
		                                <input type="text" class="form-control" disabled placeholder="Front Desk">

			                    </div>

			                    <div class="dropdown-demo" style="padding-top: 10px">                      	
			                        <label>Status</label>
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
	                        <label>Needs Permit?</label>
	                            <div class="demo-inline-wrapper">
                                    <div class="toggle-switch toggle-switch--green " style="padding-top: 10px">
                                        <input type="checkbox" class="toggle-switch__checkbox">
                                        <i class="toggle-switch__helper"></i>
                                    </div>
	                            </div>

	                    </div>

	                    <div class="dropdown-demo" style="padding-top: 18px">                       	
	                        <label>R-4 Permit</label>
	                            <input type="text" class="form-control">
			            </div>

	                </div> 
	               
		            <div class="col-md-2">
                        <label>Date picker</label>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                            <div class="form-group">
                                <input type="text" class="form-control date-picker">
                            </div>
                        </div>

                        <div class="row" style="padding-top: 10px">
                        	<div class="col-md-6">
			                	<div class="dropdown-demo">                       	
			                        <label>Days on Floor</label>
			                            <input type="text" class="form-control">
			                    </div>
		                    </div>

                        	<div class="col-md-6">		                    
			                	<div class="dropdown-demo">                       	
			                        <label>EST</label>
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
                                <h5>METHOD IN<h5>
                            </a>
                        </div>

                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">

			                	<div class="row">
			                		<div class="col-md-4">
			                			
										<div class="dropdown-demo">                       	
					                        <label>Arrival Method</label>
					                    	    <select type="button" class="form-control">
					                        	    <option></option>
					                            	<option>Pick UP</option>
					                            	<option>Dropoff</option>
					                          	</select>

					                    </div> 

					                    <div class="dropdown-demo" style="padding-top: 10px">                      	
						                        <label>Courier In</label>
						                    	    <select type="button" class="form-control">
						                        	    <option></option>
						                            	<option>GuatEx</option>
						                            	<option>CaEx</option>
						                          	</select>

					                   	</div>

					                    <div class="dropdown-demo input-sm" style="padding-top: 10px">                      	
						                        <label>Local Number Guide</label>
						                    	    <select type="button" class="form-control">
						                        	    <option></option>
						                            	<option>Credito</option>
						                            	<option>Contado</option>
						                          	</select>

					                   	</div>

					                	<div class="dropdown-demo"  style="padding-top: 10px">                       	
					                        <label>Far Off Region</label>
					                            <div class="demo-inline-wrapper">
				                                    <div class="toggle-switch toggle-switch--green" style="padding-top: 11px">
				                                        <input type="checkbox" class="toggle-switch__checkbox">
				                                        <i class="toggle-switch__helper"></i>
				                                    </div>
					                            </div>

					                    </div>

					                    <div class="dropdown-demo" style="padding-top: 15px">                      	
					                        <label>Credit Type of Guide</label>
					                    	    <select type="button" class="form-control">
					                        	    <option></option>
					                            	<option>Yes</option>
					                            	<option>No</option>
					                          	</select>

					                   	</div>

			                		</div>

			                		<div class="col-md-4">
			                			<div class="dropdown-demo">                       	
					                        <label>Charge Amount</label>
				                                <input type="text" class="form-control">

					                    </div>

					                    <div class="dropdown-demo" style="padding-top: 10px">                       	
					                        <label>Weight on Guide</label>
				                                <input type="text" class="form-control">

					                    </div>

					                    <div class="dropdown-demo" style="padding-top: 10px">                       	
					                        <label>Initial UTZ Weight (kg)</label>
				                                <input type="text" class="form-control">

					                    </div>

					                    <div class="dropdown-demo" style="padding-top: 10px">                      	
						                        <label>Type of Packing Upon Arrival</label>
						                    	    <select type="button" class="form-control">
						                        	    <option></option>
						                            	<option>Primium</option>
						                            	<option>Fragil</option>
						                          	</select>

					                   	</div>

					                   	<div class="row">
						                   	<div class="col-md-3">
							                   	<div class="dropdown-demo" style="padding-top: 10px">                       	
							                        <label>Quantity Packs</label>
														<input class="form-control" type="number" value="" min="0" max="1000" step="1">
							                    </div>
							                </div>
						                </div>

			                		</div>

			                		<div class="col-md-4">
								        <div class="card">
					                        <div class="card-body" align="center">
					                            <h4 class="card-title">Image</h4>
					                            <form class="dropzone" id="dropzone-upload"></form>

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
                                <h5>CLIENT INFO<h5>
                            </a>
                        </div>

                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                        	
	                        <div class="card-body">
	                        	<div class="card">
	                        		<div class="card-body">
	                        			<h4 class="card-title">Sender</h4>
			                                <div class="row">
						                		<div class="col-md-4">
						                			<div class="dropdown-demo">                       	
								                        <label>Name Sender (In Guatemala)</label>
							                                <input type="text" class="form-control">

						                   			 </div>

						                   			 <div class="dropdown-demo" style="padding-top: 10px">                       	
								                        <label>Departament or State</label>
							                                <input type="text" class="form-control">

						                   			 </div>

						                		</div>

						                		<div class="col-md-8">
						                			<div class="row">
						                				<div class="col-md-6">
								                			<div class="dropdown-demo">                       	
										                        <label>Street</label>
									                                <input type="text" class="form-control">

								                   			 </div>
							                   			 </div>

						                   			 	<div class="col-md-6">
								                   			 <div class="dropdown-demo">                       	
										                        <label>City</label>
									                                <input type="text" class="form-control">

								                   			 </div>
								                   		</div>

						                			</div>

						                			<div class="row" style="padding-top: 10px">
						                				<div class="col-md-12">
								                			<div class="dropdown-demo">                       	
										                        <label>City</label>
									                                <input type="text" class="form-control">

									                   		</div>
								                   		</div>

													</div>
						                		</div>

						                	</div>
						            </div>
						              
						        </div>
	                        </div>

	                        <div class="card-body">
	                        	<div class="card">
	                        		<div class="card-body">
	                        			<h4 class="card-title">Consignee</h4>
			                                <div class="row">
						                		<div class="col-md-4">
						                			<div class="dropdown-demo">                       	
								                        <label>Company</label>
							                                <input type="text" class="form-control">

						                   			 </div>

						                   			 <div class="dropdown-demo" style="padding-top: 10px">                       	
								                        <label>Full Name</label>
							                                <input type="text" class="form-control">

						                   			 </div>

						                   			 <div class="dropdown-demo" style="padding-top: 10px">                       	
								                        <label>Phone</label>
							                                <input type="text" class="form-control">

						                   			 </div>

						                   			 <div class="row"  style="padding-top: 10px">
						                				<div class="col-md-6">
								                			<div class="dropdown-demo">                       	
										                        <label>E-Mail</label>
									                                <input type="text" class="form-control">

								                   			 </div>
							                   			 </div>

						                   			 	<div class="col-md-6">
								                   			 <div class="dropdown-demo">                       	
										                        <label>Client Order Number</label>
									                                <input type="text" class="form-control">

								                   			 </div>
								                   		</div>

						                			</div>

						                		</div>

						                		<div class="col-md-4">
						                			<div class="dropdown-demo">                       	
								                        <label>Country</label>
							                                <input type="text" class="form-control">

						                   			 </div>

						                   			 <div class="dropdown-demo" style="padding-top: 10px">                       	
								                        <label>Address 1</label>
							                                <input type="text" class="form-control">

						                   			 </div>

								                   	<div class="row"  style="padding-top: 10px">
						                				<div class="col-md-6">
								                			<div class="dropdown-demo">                       	
										                        <label>Address 2</label>
									                                <input type="text" class="form-control">

								                   			 </div>
							                   			 </div>

						                   			 	<div class="col-md-6">
								                   			 <div class="dropdown-demo">                       	
										                        <label>City</label>
									                                <input type="text" class="form-control">

								                   			 </div>
								                   		</div>
								                   	</div>

								                   	<div class="row"  style="padding-top: 10px">
						                				<div class="col-md-6">
								                			<div class="dropdown-demo">                       	
										                        <label>State</label>
									                                <input type="text" class="form-control">

								                   			 </div>
							                   			 </div>

						                   			 	<div class="col-md-6">
								                   			 <div class="dropdown-demo">                       	
										                        <label>ZipCode</label>
									                                <input type="text" class="form-control">

								                   			 </div>
								                   		</div>
								                   	</div>

						                		</div>

						                		<div class="col-md-4">
						                			<div class="row">
						                				<div class="col-md-12">
							                				<div class="dropdown-demo">                       	
											                        <label>ZipCode</label>
										                                <input type="text" class="form-control">

									                   		</div>
									                   	</div>
						                			</div>

						                			<div class="row" style="padding-top: 10px">
						                				<!-- MAPS -->
						                				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.8320857496556!2d-90.7374626855943!3d14.551592989833717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85890e12be9ab117%3A0xd7fcb8919467d65e!2sUTZ!5e0!3m2!1sen!2sgt!4v1572289840637!5m2!1sen!2sgt" width="590" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

						                			</div>

						                		</div>

						                	</div>
						            </div>
						              
						        </div>
	                        </div>

                    	</div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree" align="center">
                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5>ADITIONAL OPTIONS<h5>
                            </a>
                        </div>

                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            
                            <div class="card-body">
	                        	<div class="card">
	                        		<div class="card-body">
		                                <div class="row">
					                		<div class="col-md-4">
		                                		<h5>Packing Type</h5></br>

						                		<label class="custom-control custom-checkbox">
					                                <input type="checkbox" class="custom-control-input">
					                                <span class="custom-control-indicator"></span>
					                                <span class="custom-control-description">No Packing</span>
					                            </label></br></br>

					                            <label class="custom-control custom-checkbox">
					                                <input type="checkbox" class="custom-control-input">
					                                <span class="custom-control-indicator"></span>
					                                <span class="custom-control-description">Normal Packing</span>
					                            </label></br></br>

					                            <label class="custom-control custom-checkbox">
					                                <input type="checkbox" class="custom-control-input">
					                                <span class="custom-control-indicator"></span>
					                                <span class="custom-control-description">Premium Packing</span>
					                            </label>

					                		</div>

					                		<div class="col-md-4">
		                                		<h5>Packing Type</h5></br>

					                            <label class="custom-control custom-checkbox">
					                                <input type="checkbox" class="custom-control-input">
					                                <span class="custom-control-indicator"></span>
					                                <span class="custom-control-description">Fragile Packing</span>
					                            </label></br></br>

					                            <label class="custom-control custom-checkbox">
					                                <input type="checkbox" class="custom-control-input">
					                                <span class="custom-control-indicator"></span>
					                                <span class="custom-control-description">Art Packing</span>
					                            </label>

					                		</div>

					                		<div class="col-md-4">
					                			<h5>Special Paperwork</h5></br>
					                			<label class="custom-control custom-checkbox">
					                                <input type="checkbox" class="custom-control-input">
					                                <span class="custom-control-indicator"></span>
					                                <span class="custom-control-description">FDA</span>
					                            </label></br></br>

					                            <label class="custom-control custom-checkbox">
					                                <input type="checkbox" class="custom-control-input">
					                                <span class="custom-control-indicator"></span>
					                                <span class="custom-control-description">Phitosanitary</span>
					                            </label></br></br>

					                            <label class="custom-control custom-checkbox">
					                                <input type="checkbox" class="custom-control-input">
					                                <span class="custom-control-indicator"></span>
					                                <span class="custom-control-description">R-4 Permits</span>
					                            </label>
					                		</div>

					                	</div>
						            </div>
						              
						        </div>
	                        </div>

	                        <div class="card-body">
	                        	
	                            <div class="row">
	                            	<div class="col-md-7">	                                		
	                            		<div class="card">
						                    <div class="card-body">
						                        <h4 class="card-title">Packing List Summary</h4>

						                        <table class="table mb-3">
						                            <thead  class="thead-default">
						                            <tr>
						                                <th>No.</th>
						                                <th>Product Type</th>
						                                <th>Pieces</th>
						                                <th>Units</th>
						                                <th>Sub Total</th>
						                            </tr>
						                            </thead>
						                            <tbody>
						                            <tr>
						                                <th scope="row">1</th>
						                                <td>Pair of Shoes</td>
						                                <td>10</td>
						                                <td>30</td>
						                                <td>300.0</td>
						                            </tr>
						                            <tr>
						                                <th scope="row">2</th>
						                                <td>Bags</td>
						                                <td>2</td>
						                                <td>50</td>
						                                <td>100.0</td>
						                            </tr>
						                            <tr>
						                                <th scope="row">3</th>
						                                <td>Tote Bags</td>
						                                <td>4</td>
						                                <td>50</td>
						                                <td>100.0</td>
						                            </tr>
						                            </tbody>
						                        </table>

						                    </div>
										</div>

	                            	</div>

	                            	<div class="col-md-5">

	                            		<div class="card">
						                    <div class="card-body">
						                        <h4 class="card-title">UTZ Suggested Value</h4>

						                        <table class="table mb-3">
						                            <thead  class="thead-default">
						                            <tr>
						                                <th>Unit Value</th>
						                                <th>Sub Total</th>
						                            </tr>
						                            </thead>
						                            <tbody>
						                            <tr>
						                                <td>30.0</td>
						                                <td>300.0</td>
						                            </tr>
						                            <tr>
						                                <td>25.0</td>
						                                <td>50.0</td>
						                            </tr>
						                            <tr>
						                                <td>15.0</td>
						                                <td>60.0</td>
						                            </tr>
						                            </tbody>
						                        </table>

						                    </div>
										</div>
	                            	
	                            	</div>

			                	</div>
						           
	                        </div>

                        </div>
                    </div>

                </div>
            </div>
            <!--
					<div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Input Sliders</h4>
                           	
                           	<div class="row">
                                <div class="col-md-6">
                                    <h3 class="card-body__title">Single slider</h3>

                                    <div id="input-slider"></div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="input-slider-value" />
                                                <i class="form-group__bar"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            

                        </div>
                    </div>
			-->
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