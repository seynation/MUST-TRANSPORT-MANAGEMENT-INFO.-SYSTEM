    <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="home">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Users</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Transport Request Form</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <form method="POST">
                                        <div class="basic-login-form-ad">
                                           
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Full Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" placeholder="Full Name" name="FullName" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php 
                                                    echo ' <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Department</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                 <div class="chosen-select-single mg-b-20">
                                                            <select class="form-control"  class="chosen-select" name="department" tabindex="-1">
                                                            <option value="">Select Department</option>';
                                                                
                                                                $item = null;
                                                                $value = null;
                                                                $departs = departctrl::departctrlshow($item,$value); 
                                                            foreach ($departs as $key => $value) {
                                                                echo '<option value="'.$value["name"].'">'.$value["name"].'</option>';
                                                                }
                                                            echo '</select>
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                
                                                    ?>

                                                   

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Destination</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="destination" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>                                                                                            
                                                    
                                                
                                            <div class="form-group-inner">
                                                    <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Departure Date</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="Date" class="form-control" name="date" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Nature of Work</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="nature" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                     

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">No. of Passengers</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="passengercount" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Passengers(Apart from you)</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="passengernames">
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                    </div>
                                                   

                                        

                                    
                                    <div class="modal-footer">                                
                                        <button class="btn btn-danger"data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-success" type="submit">SEND</button>
                                    </div> 
                                     <?php
                                     $tportreq = new transportctrl();
                                     $tportreq ->transportctrladd();
                                        ?> 
                                      

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



                                 