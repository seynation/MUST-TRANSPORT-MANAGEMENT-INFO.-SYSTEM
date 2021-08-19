
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
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Assign Vehicles</h1>  
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
                                            <option value="">Export Basic</option>
                                            <option value="all">Export All</option>
                                            <option value="selected">Export Selected</option>
                                        </select>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-4"></div>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="ID" data-editable="true">ID</th>
                                                <th data-field="RID" data-editable="true">ReqID</th>
                                                <th data-field="FullName" data-editable="true">Full Name</th>
                                                <th data-field="department" data-editable="true">Department</th>
                                                <th data-field="destination" data-editable="true">Destination</th>
                                                 <th data-field="date" data-editable="true">Date</th>
                                                <th data-field="nature" data-editable="true">Nature</th>
                                                <th data-field="passengercount" data-editable="true">No. of Passengers</th>
                                                <th data-field="passengernames" data-editable="true">Passengers</th>
                                                <th data-field="REPLY" data-editable="true">Assign Vehicle</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        
                                          
                                       
                                            $item = null;
                                            $value = null;
                                            $departs = transportctrl::transportctrlspecialshow($item,$value); 
                                        
                                        foreach ($departs as $key => $value) {
                                            $date = $value["date"];
                                            
                                           
                                            echo '<tr>
                                                <td>'.($key+1).'</td>
                                                <td>'.$value["id"].'</td>
                                               <td>'.$value["FullName"].'</td>
                                                <td>'.$value["department"].'</td>
                                                <td>'.$value["destination"].'</td>
                                                <td>'.$value["date"].'</td>
                                                <td>'.$value["nature"].'</td>
                                                <td>'.$value["passengercount"].'</td>
                                                <td>'.$value["passengernames"].'</td>
                                                <td>';

                                                
                                                    if ($value["vid"] == null || $value["vid"] == "" ){
                                            echo '<button  type="submit" class="btn btn-success btn-block loginbtn" data-toggle="modal" data-target="#PrimaryModalalert" id="'.$value["id"].'">ASSIGN</button>
                                                </td>
                                                </td>
                                            </tr>';
                                        }

                                        elseif ($value["vid"] != null ) {
                                                    echo '<button  type="submit" class="btn btn-success btn-block loginbtn" data-toggle="modal" data-target="#PrimaryModalalert" id="'.$value["id"].'">ASSIGNED</button>
                                                </td>
                                                </td>
                                            </tr>';
                                        }
                                       
                                    }
                                        
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


         <div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                       
                                        <h2>ASSIGN VEHICLE</h2>
                                        <form method="POST">
                                        <div class="basic-login-form-ad">
                                           <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Request ID</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="chosen-select-single mg-b-20">
                                                            <?php echo '<input type="text" class="form-control" name="rid" value="'.$value["id"].'" required="" / required="">'; 
                                                        
                                                        ?>
                                                            
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Date</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="chosen-select-single mg-b-20">
                                                            <input type="date" class="form-control" name="dateout" required="" / required="">
                                                            
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Vehicle</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="chosen-select-single mg-b-20">
                                                           <?php
                                                            echo '<select class="form-control"  class="chosen-select" name="vid" tabindex="-1">
                                                            <option value="">Select Vehicle</option>';
                                                                
                                                                $item = null;
                                                                $value = null;
                                                                $departs = vehiclesmanagectrl::vehiclesmanagectrlspecialshow($item,$value); 
                                                            foreach ($departs as $key => $value) {
                                                                echo '<option value="'.$value["id"].'">'.$value["make"].$value["model"].$value["plate"].'</option>';
                                                                }
                                                            echo '</select>';
                                                        
                                                            ?>
                                                               </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div> 

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Time Out</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="chosen-select-single mg-b-20">
                                                            <input type="time" class="form-control" name="timeout" required="" / required="">
                                                        
                                                        
                                                            
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Time In</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="chosen-select-single mg-b-20">
                                                            <input type="time" class="form-control" name="timein"  required="" / required="">
                                                        
                                                        
                                                            
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Mark</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="chosen-select-single mg-b-20">
                                                            <input type="text" class="form-control" name="availability" value="OUT" required="" / required="">'; 
                                                        
                                                        
                                                            
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                </div>
                                    
                                    <div class="modal-footer">                                
                                        <button class="btn btn-danger"data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-success" type="submit">ASSIGN</button>
                                    </div>
                                      <?php
                                     $useradd = new vehiclesmanagectrl();                                     
                                     $useradd ->vehiclesmanagectrlassign();
                                        ?>  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   