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

        <div class="data-table-area mg-b-20">
            <div class="container-fluid">
                <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Requests Made</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                                                      
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3"></div>
                                        
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                       <?php 

                                        // if () {

                                        if ($_SESSION["role"] == "Head of Department") {

                                            echo '<thead>
                                            <tr>
                                                <th data-field="ID" data-editable="true">ID</th>
                                                <th data-field="FullName" data-editable="true">Full Name</th>
                                                <th data-field="department" data-editable="true">Department</th>
                                                <th data-field="destination" data-editable="true">Destination</th>
                                                                                 
                                                 <th data-field="date" data-editable="true">Date</th>
                                                <th data-field="nature" data-editable="true">Nature</th>
                                                <th data-field="passengercount" data-editable="true">No. of Passengers</th>
                                                <th data-field="passengernames" data-editable="true">Passengers</th>
                                                <th data-field="price" data-editable="true">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                       
                                            $item = null;
                                            $value = null;
                                            $departs = transportctrl::dprttransportctrlshow($item,$value); 
                                            foreach ($departs as $key => $value) {
                                                $id = $value["id"];

                                            echo '<tr>
                                                
                                                <td>'.$value["id"].'</td>
                                                <td>'.$value["FullName"].'</td>
                                                <td>'.$value["department"].'</td>
                                                <td>'.$value["destination"].'</td>
                                                <td>'.$value["date"].'</td>
                                                <td>'.$value["nature"].'</td>
                                                <td>'.$value["passengercount"].'</td>
                                                <td>'.$value["passengernames"].'</td>';

                                                if ($value["reply"] == "" || $value["reply"] == "null" ) {
                                                echo '<td>
                                               <button  type="submit" class="btn btn-success btn-block loginbtn" data-toggle="modal" data-target="#PrimaryModalalert">REPLY</button>                                                </td>
                                                </td>
                                             </tr>';
                                         }

                                         elseif ($value["reply"] == "AUTHORIZED" || $value["reply"] == "DENIED") {
                                             echo '<td>
                                               <button class="btn btn-success btn-block loginbtn" data-toggle="modal">REPLIED</button>                                                </td>
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
                                       
                                        <h2>REQUEST REPLY</h2>
                                        <form method="POST">
                                        <div class="basic-login-form-ad">
                                           
                                                    
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Reply</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="chosen-select-single mg-b-20">
                                                            <select data-placeholder="Choose a Country..." class="form-control" name="reply"  class="chosen-select" tabindex="-1" required="">
                                                            <option value=""></option>
                                                           
                                                            <option name="reply" value="AUTHORIZED">AUTHORIZE</option>
                                                            <option name="reply" value="DENIED">DENY</option>
                                                                                                                        
                                                            </select>

                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div> 

                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Request ID</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="chosen-select-single mg-b-20">
                                                            <?php echo'<input type="text" class="form-control" name="id" value="'.$id.'" required="" / required="">';  ?>
                                                            
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                    
                                    <div class="modal-footer">                                
                                        <button class="btn btn-danger"data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-success" type="submit">SEND</button>
                                    </div>
                                      <?php
                                     $useradd = new transportctrl();
                                     $useradd ->transportctrlreply();
                                        ?>  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                                      
                                   <?php 

                                        }
                                        else {

                                            echo '<thead>
                                            <tr>
                                                <th data-field="id">ID</th>
                                                <th data-field="FullName" data-editable="true">Full Name</th>
                                                <th data-field="department" data-editable="true">Department</th>
                                                <th data-field="destination" data-editable="Destination">Role</th>
                                                                                 
                                                 <th data-field="date" data-editable="true">Date</th>
                                                <th data-field="nature" data-editable="true">Nature</th>
                                                <th data-field="passengercount" data-editable="true">Passengers</th>
                                                <th data-field="vid" data-editable="true">FEEDBACK</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                       

                                            $item = null;
                                            $value = null;
                                            $departs = transportctrl::advtransportctrlshow($item,$value); 
                                            foreach ($departs as $key => $value) {

                                            $iem = "id";
                                            $alue = $value["vid"];
                                            $dprts = vehiclesmanagectrl::vehiclesmanagectrlshow($iem,$alue);

                                                $id = $value["id"];
                                                $vid = $value["vid"];

                                            echo '<tr>
                                                
                                                <td>'.($key+1).'</td>
                                                <td>'.$value["FullName"].'</td>
                                                <td>'.$value["department"].'</td>
                                                <td>'.$value["destination"].'</td>
                                                <td>'.$value["date"].'</td>
                                                <td>'.$value["nature"].'</td>
                                                <td>'.$value["passengercount"].'</td>';

                                                if ($value["vid"] == null) {
                                                    echo '<td>Pending...</td></td></tr>';
                                                }

                                                elseif ($value["vid"] != null) {
                                                    echo '<td>'.$dprts["plate"].'</td></td></tr>';
                                                }

                                               
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