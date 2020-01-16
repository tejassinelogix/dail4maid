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
                            <h3 class="panel-title"><strong>Appointment Status Report</strong></h3>
                        </div>
                        <!-- <div class="panel-body"> -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Maid</th>
                                            <th>Date</th>
                                            <th>Time (FROM-To)</th>
                                            <th>Address</th>
                                            <th>Amt</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $i = 1;
                                    // echo '<pre>';
                                    // print_r($appointments);
                                     foreach($appointments as $appointment) {?>
                                        <tr>
                                         <td class="srNo"><?php echo $i++ ; ?></td>
                                    <td><?php echo $appointment->id ; ?></td>
                                    <td><?php echo $appointment->name ; ?></td>
                                    <td>
                                    <?php 
                                    // $m_id = $appointment->maid_id;
                                    foreach ($maid_data as $maid) {
                                    if( $maid->id == $appointment->maid_id)  { ?>
                                       <?php echo $maid->name ; ?>
                                    <?php } } ?>
                                    </td>
                                    <td><?php echo $appointment->c_date ; ?></td>
                                    <td><?php echo $appointment->c_from_time_slot ; ?>-<?php echo $appointment->c_to_time_slot ; ?></td>
                                    <td><?php echo $appointment->address ; ?></td>
                                    <td><?php echo $appointment->amount ; ?></td>

                                    <td><?php echo $appointment->status ; ?></td>
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