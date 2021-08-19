
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
                                    <h1>Manage Users</h1>
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
                                            <button  type="submit" class="btn btn-success btn-block loginbtn" data-toggle="modal" data-target="#PrimaryModalalert">New User</button>
                                        </div>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="id">ID</th>
                                                <th data-field="othername" data-editable="true">Full Name</th>
                                                <th data-field="email" data-editable="true">Username</th>
                                                <th data-field="role" data-editable="true">Role</th>
                                                                                 
                                                 <th data-field="name" data-editable="true">Department</th>
                                                <th data-field="action" data-editable="true">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        // if () {
                                          
                                       
                                        if ($_SESSION["role"] == "System Adminstrator") {
                                            $item = null;
                                            $value = null;
                                            $departs = usersmanagectrl::usersmanagectrlshow($item,$value);
                                        }else{
                                            $item = null;
                                            $value = null;
                                            $departs = usersmanagectrl::deprtusersmanagectrlshow($item,$value); 
                                        }
                                        foreach ($departs as $key => $value) {
                                            $fullname  = $value["othername"];

                                            $iem = "id";
                                            $alue = $value["departid"];
                                            $dprts = departctrl::departctrlshow($iem,$alue); 
                                           
                                            echo '<tr>
                                                <td>'.($key+1).'</td>
                                                <td>'.$fullname.'</td>
                                                <td>'.$value["username"].'</td>
                                                <td>'.$value["role"].'</td>
                                                <td>'.$dprts["name"].'</td>
                                                <td>
                                                <button class="btn btn-danger deleteuser" dpid="'.$value["id"].'">DEL</button>
                                                <button class="btn btn-warning edituser" userid="'.$value["id"].'" data-toggle="modal" data-target="#editusers">EDIT</button>
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
                                       
                                        <h2>Add New User</h2>
                                        <form method="POST">
                                        <div class="basic-login-form-ad">
                                            <div class="form-group-inner">
                                                    <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">username</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="username" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Full Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="othername" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Role</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="chosen-select-single mg-b-20">
                                                            <select data-placeholder="Choose a Country..." class="form-control" name="role"  class="chosen-select" tabindex="-1" required="">
                                                            <option value="">Select Role</option>
                                                            <?php
                                                            if ($_SESSION["role"] == "System Adminstrator") { 
                                                            echo '<option value="System Adminstrator"> System Adminstrator</option>
                                                            <option value="Head of Department">Head of Department</option>
                                                            <option value="Transport Officer">Transport Officer</option>';  
                                                            }else{
                                                                echo '
                                                                <option value="User">User</option>
                                                                ';
                                                            }
                                                            ?>
                                                            
                                                            </select>
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php 

                                                    if ($_SESSION["role"] == "System Adminstrator") {
                                                    echo ' <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Department</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                 <div class="chosen-select-single mg-b-20">
                                                            <select class="form-control"  class="chosen-select" name="departid" tabindex="-1">
                                                            <option value="">Select Department</option>';
                                                                
                                                                $item = null;
                                                                $value = null;
                                                                $departs = departctrl::departctrlshow($item,$value); 
                                                            foreach ($departs as $key => $value) {
                                                                echo '<option value="'.$value["id"].'">'.$value["name"].'</option>';
                                                                }
                                                            echo '</select>
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                    }
                                                    ?>
                                                   

                                        </div>
                                    </div>
                                    <div class="modal-footer">                                
                                        <button class="btn btn-danger"data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-success" type="submit">SAVE</button>
                                    </div>
                                      <?php
           							 $useradd = new usersmanagectrl();
            						 $useradd ->usersmanagectrladd();
           								?>  
                                    </form>
                                </div>
                            </div>
                        </div>


                         <div id="editusers" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                       
                                        <h2>Edit User</h2>
                                        <form method="POST">
                                        <div class="basic-login-form-ad">
                                         <div class="form-group-inner">
                                                    <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">username</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" id="editname" name="editfirstname" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Full Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" id="editother" class="form-control" name="editothername" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Role</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="chosen-select-single mg-b-20">
                                                            <select data-placeholder="Choose a Country..." class="form-control" name="editrole"  class="chosen-select" tabindex="-1" required="">
                                                            <option value="" id="editrole"></option>
                                                           <?php
                                                            if ($_SESSION["role"] == "Admin") { 
                                                            echo '<option value="System Adminstrator"> System Adminstrator</option>
                                                            <option value="Head of Department">Head of Department</option>
                                                            <option value="User">User</option>';  
                                                            }
                                                            ?>
                                                            <option value="Head Of Department">Head Of Department</option>
                                                            <option value="Exam Coordinator">Exam Coordinator</option>
                                                            <option value="IPT Coordinator">IPT Coordinator</option>
                                                            <option value="Project Coordinator">Project Coordinator</option>
                                                            </select>
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                  
                                                <option  ></option>
                                                 <?php 

                                                    if ($_SESSION["role"] == "Admin") {
                                                    echo ' <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Department</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                 <div class="chosen-select-single mg-b-20">
                                                            <select class="form-control"  class="chosen-select" name="departid" tabindex="-1">
                                                            <option value="" id="editdeparti"></option>';
                                                                $item = null;
                                                                $value = null;
                                                                $departs = departctrl::departctrlshow($item,$value); 
                                                            foreach ($departs as $key => $value) {
                                                                echo '<option value="'.$value["id"].'">'.$value["name"].'</option>';
                                                                }
                                                            echo '</select>
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                    }
                                                    ?>
                                               

                                        </div>
                                    </div>
                                    <div class="modal-footer">                                
                                        <button class="btn btn-danger"data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-success" type="submit">SAVE</button>
                                    </div>
                                      <?php
                                     $useradd = new usersmanagectrl();
                                     $useradd ->usersmanagectrledit();
                                        ?>  
                                    </form>
                                </div>
                            </div>
                        </div>

                         <?php
                                     $useradd = new usersmanagectrl();
                                     $useradd ->usersmanagectrldel();
                                        ?>
