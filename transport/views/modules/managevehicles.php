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
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Manage Vehicles</h1>  
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
                                        <div class="col-md-4">
                                            <button  type="submit" class="btn btn-success btn-block loginbtn" data-toggle="modal" data-target="#PrimaryModalalert">New Vehicle</button>
                                        </div>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                
                                                <th data-field="vid">VehID</th>
                                                <th data-field="name" data-editable="true">Make & Model</th>
                                                <th data-field="seats" data-editable="true">Seats</th>
                                                  <th data-field="plate" data-editable="true">License Plate</th>
                                                  <th data-field="status" data-editable="true">Status</th>
                                                 <th data-field="action" data-editable="true">Action</th>
                                                 <th data-field="editavailability" data-editable="true"></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        // if () {
                                          
                                       
                                            $item = null;
                                            $value = null;
                                            $departs = vehiclesmanagectrl::vehiclesmanagectrlshow($item,$value); 
                                        
                                        foreach ($departs as $key => $value) {
                                            $vid = $value["id"];
                                            
                                           
                                            echo '<tr>
                                                
                                                <td>'.$value["id"].'</td>
                                                <td>'.$value["make"].' '.$value["model"].'</td>
                                                <td>'.$value["seats"].'</td>
                                                <td>'.$value["plate"].'</td>
                                                <td>'.$value["availability"].'</td>
                                                <td>
                                                <button class="btn btn-danger deletevehicle" dpid="'.$value["id"].'">DEL</button>
                                                <button class="btn btn-warning edituser" data-toggle="modal" data-target="#editvehicle">EDIT</button></td>
                                                <td><button  type="submit" class="btn btn-success" data-toggle="modal" data-target="#editavailability">STATUS</button>
                                                </td>
                                                </td>
                                            </tr>';
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
                                       
                                        <h2>Add New Vehicle</h2>
                                        <form method="POST">
                                        <div class="basic-login-form-ad">
                                            <div class="form-group-inner">
                                                    <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Make</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="make" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                    <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Model</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="model" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Number of Seats</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="seats" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                    <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Car License Plate</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="plate" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                   

                                        </div>
                                    
                                    <div class="modal-footer">                                
                                        <button class="btn btn-danger"data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-success" type="submit">SAVE</button>
                                    </div>
                                      <?php
                                     $useradd = new vehiclesmanagectrl();
                                     $useradd ->vehiclesmanagectrladd();
                                        ?>  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                         <div id="editvehicle" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                       
                                        <h2>Edit Vehicle Details</h2>
                                        <form method="POST">
                                        <div class="basic-login-form-ad">
                                        <div class="form-group-inner">
                                                    <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Vehicle ID</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" id="editid" name="editid" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                         <div class="form-group-inner">
                                                    <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Make</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" id="editmake" name="editmake" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Model</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" id="editmodel" class="form-control" name="editmodel" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                    <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Number of Seats</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" id="editseats" name="editseats" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                    <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Car License Plate</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" id="editplate" name="editplate" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Availability</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="chosen-select-single mg-b-20">
                                                            <select data-placeholder="Choose a Country..." class="form-control" name="availability"  class="chosen-select" tabindex="-1" required="">
                                                            <option value=""></option>
                                                           
                                                            <option name="availability" value="AVAILABLE">AVAILABLE</option>
                                                            <option name="availability" value="BROKEN DOWN">BROKEN DOWN</option>
                                                            <option name="availability" value="OUT">OUT</option>
                                                                                                                        
                                                            </select>

                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                    
                                    <div class="modal-footer">                                
                                        <button class="btn btn-danger"data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-success" type="submit">SAVE</button>
                                    </div>
                                      <?php
                                     $useradd = new vehiclesmanagectrl();
                                     $useradd ->vehiclesmanagectrledit();
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

 <div id="editavailability" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                       
                                        <h2>EDIT STATUS</h2>
                                        <form method="POST">
                                        <div class="basic-login-form-ad">
                                           <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Vehicle ID</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="chosen-select-single mg-b-20">
                                                            <input type="text" class="form-control" name="editid" required="" / required=""> 
                                                        
                                                                                                                   
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Status</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="chosen-select-single mg-b-20">
                                                            <select data-placeholder="Choose a Country..." class="form-control" name="editavailability"  class="chosen-select" tabindex="-1" required="">
                                                            <option value=""></option>
                                                           
                                                            <option name="editavailability" value="AVAILABLE">AVAILABLE</option>
                                                            <option name="editavailability" value="BROKEN DOWN">BROKEN DOWN</option>
                                                            
                                                                                                                        
                                                            </select>

                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                </div>
                                    
                                    <div class="modal-footer">                                
                                        <button class="btn btn-danger"data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-success" type="submit">EDIT</button>
                                    </div>
                                       <?php
                                     $useradd = new vehiclesmanagectrl();                                     
                                     $useradd ->vehiclesmanagectrlavailability();
                                        ?> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                   