<?php
require 'include/header.php';
?>
    <section class="content">
        <header class="content__title">
                    <h1>All Package</h1>

                    <div class="actions">
                    		<button class="btn btn-success btn--icon-text"><i class="zmdi zmdi-select-all"></i> Scan</button>
                            <!--<a href="" class="actions__item zmdi zmdi-trending-up"></a>
                            <a href="" class="actions__item zmdi zmdi-check-all"></a>

                            <div class="dropdown actions__item">
                                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item">Refresh</a>
                                    <a href="" class="dropdown-item">Manage Widgets</a>
                                    <a href="" class="dropdown-item">Settings</a>
                                </div>
                            </div>-->
                        </div>
                </header>
                
                <div class="card">
                    <div class="card-body">
                        <!--<h4 class="card-title">Basic example</h4>
                        <h6 class="card-subtitle">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.</h6>-->

                        <div class="table-responsive">
                            <table id="data-table" class="table">
                                <thead>
                                    <tr>
                                        <th>DATE</th>
                                        <th>UTZ ID</th>
                                        <th>CLIENT NAME</th>
                                        <th>SERVICE UTZ</th>
                                        <th>WEIGHT(kg)	</th>
                                        <th>SALE PRICE($)</th>
                                        <th>COUNTRY</th>
                                        <th>SUPPLIER</th>
                                        <th>ZONA</th>
                                        <th>VIEW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>25/aug/2019</td>
                                        <td>U-192030PL-3020</td>
                                        <td>STELA(9)($)</td>
                                        <td>SAVER</td>
                                        <td>10.0</td>
                                        <td>$30.00</td>
                                        <td>GERMANY</td>
                                        <td>UPS</td>
                                        <td>1</td>
                                        <td><button class="btn btn-success btn--icon-text"><i class="zmdi zmdi-more-vert"></i> edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>25/aug/2019</td>
                                        <td>U-192030PL-3020</td>
                                        <td>STELA(9)($)</td>
                                        <td>EXPEDITED</td>
                                        <td>20.0</td>
                                        <td>$70.00</td>
                                        <td>CANADA</td>
                                        <td>UPS</td>
                                        <td>3</td>
                                        <td><button class="btn btn-success btn--icon-text"><i class="zmdi zmdi-more-vert"></i> edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>25/aug/2019</td>
                                        <td>U-192030PL-3020</td>
                                        <td>STELA(9)($)</td>
                                        <td>WORLD EASY</td>
                                        <td>1.0</td>
                                        <td>$20.00</td>
                                        <td>USA</td>
                                        <td>UPS</td>
                                        <td>1</td>
                                        <td><button class="btn btn-success btn--icon-text"><i class="zmdi zmdi-more-vert"></i> edit</button></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>	       
    </section>
<?php
require 'include/footer.php';
?>