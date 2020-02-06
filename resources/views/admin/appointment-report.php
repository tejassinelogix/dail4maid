<html>
    <head>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>
       <!--  <style>
            .invoice-title h2, .invoice-title h3 {
                display: inline-block;
            }

            .table > tbody > tr > .no-line {
                border-top: none;
            }

            .table > thead > tr > .no-line {
                border-bottom: none;
            }

            .table > tbody > tr > .thick-line {
                border-top: 2px solid;
            }
        </style> -->
        <!------ Include the above in your HEAD tag ---------->
    </head>
    <body>

        <!-- <div class="container"> -->
            
            <!-- <div class="row"> -->
                <!-- <div class="col-md-12"> -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Appointment Report</strong></h3>
                        </div>
                        <!-- <div class="panel-body"> -->
                            <div class="table-responsive">
                                <table class="table" id="appoinment_report" border="1">
                                    <thead>
                                        <tr>
                                    <th>Crew Name</th>                                                                        
                                    <th>Start Time</th>
                                    <th>Stop Time</th>
                                    <th>Hours</th>
                                    <th>Code</th>
                                    <th>Materials</th>
                                    <th>Customer Name</th>
                                    <th>Address</th>
                                    <th>Payment Method</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Instruction</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $i = 1;
                                    // echo '<pre>';
                                    // print_r($appointments);
                                     foreach($appointments as $appointment) {?>
                                        <tr>
                                    <td><?php echo $appointment->name ; ?></td> 
                                    <td>{{ $appointment->c_from_time_slot }}</td>
                                    <td>{{ $appointment->c_to_time_slot }}</td>   
                                    <td>{{ $appointment->c_stay_hours }}</td> 
                                    <td></td>
                                    <td>{{ $appointment->c_material }}</td>                                    
                                    <td></td>
                                    <td>{{ $appointment->address }}</td>
                                    <td>{{ $appointment->pay_method }}</td>
                                    <td>{{ $appointment->amount }}</td>
                                    <td>{{ $appointment->status }}    
                                    <td></td>
                                </tr>
                                    <?php }?>    
                                        
                                  </tbody>
                                </table>
                            <!-- </div> -->
                        </div>
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </body>
</html>
