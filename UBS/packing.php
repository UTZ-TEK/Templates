<?php
require 'include/header.php';
require 'include/connection.php';
        
echo '  
    <section class="content">

        <!--Esta CABECERA neceito que sea estatica como el header y va a tener que salir de la base de datos-->
        <div class="card sticky-ubs">
            <header class="content__title">
                <div class="row" style="padding-top: 10px">
                    <div class="col-sm-8 col-md-8">
                        <h2>'.$name_windows_general.' Packing</h2>
                    </div>

                    <div class="col-sm-4 col-md-4 nav justify-content-end">
                        <button class="btn btn-light btn--icon-text"><i class="fa fa-qrcode"></i>&nbsp; SCAN</button>                        
                    </div>  
                   
                </div>
            </header>
        </div>

        <!-- TABLA-->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table" class="table">
                        <thead class="thead-default">
                            <tr>
                                <th>DATE</th>
                                <th>UTZ ID</th>
                                <th>CLIENT NAME</th>
                                <th>SERVICE UTZ</th>
                                <th>WEIGHT (kg)</th>
                                <th>SALES PRICE ($)</th>
                                <th>COUNTRY</th>
                                <th>SUPPLIER</th>
                                <th>ZONE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2011/04/25</td>
                                <td>U-192030PL-0301</td>
                                <td>Stela (9)($)</td>
                                <td>World Easy</td>
                                <td>30</td>
                                <td>$320,800</td>
                                <td>USA</td>
                                <td>UPS</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2011/04/25</td>
                                <td>U-192030PL-0301</td>
                                <td>Stela (9)($)</td>
                                <td>World Easy</td>
                                <td>30</td>
                                <td>$320,800</td>
                                <td>USA</td>
                                <td>UPS</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2011/04/25</td>
                                <td>U-192030PL-0301</td>
                                <td>Stela (9)($)</td>
                                <td>World Easy</td>
                                <td>30</td>
                                <td>$320,800</td>
                                <td>USA</td>
                                <td>UPS</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2011/04/25</td>
                                <td>U-192030PL-0301</td>
                                <td>Stela (9)($)</td>
                                <td>World Easy</td>
                                <td>30</td>
                                <td>$320,800</td>
                                <td>USA</td>
                                <td>UPS</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2011/04/25</td>
                                <td>U-192030PL-0301</td>
                                <td>Stela (9)($)</td>
                                <td>World Easy</td>
                                <td>30</td>
                                <td>$320,800</td>
                                <td>USA</td>
                                <td>UPS</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2011/04/25</td>
                                <td>U-192030PL-0301</td>
                                <td>Stela (9)($)</td>
                                <td>World Easy</td>
                                <td>30</td>
                                <td>$320,800</td>
                                <td>USA</td>
                                <td>UPS</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2011/04/25</td>
                                <td>U-192030PL-0301</td>
                                <td>Stela (9)($)</td>
                                <td>World Easy</td>
                                <td>30</td>
                                <td>$320,800</td>
                                <td>USA</td>
                                <td>UPS</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2011/04/25</td>
                                <td>U-192030PL-0301</td>
                                <td>Stela (9)($)</td>
                                <td>World Easy</td>
                                <td>30</td>
                                <td>$320,800</td>
                                <td>USA</td>
                                <td>UPS</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2011/04/25</td>
                                <td>U-192030PL-0301</td>
                                <td>Stela (9)($)</td>
                                <td>World Easy</td>
                                <td>30</td>
                                <td>$320,800</td>
                                <td>USA</td>
                                <td>UPS</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2011/04/25</td>
                                <td>U-192030PL-0301</td>
                                <td>Stela (9)($)</td>
                                <td>World Easy</td>
                                <td>30</td>
                                <td>$320,800</td>
                                <td>USA</td>
                                <td>UPS</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>       
        ';

require 'include/footer.php';
?>
